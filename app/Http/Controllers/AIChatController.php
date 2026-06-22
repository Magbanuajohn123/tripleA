<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Product;

class AIChatController extends Controller
{
    public function chat(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $userMessage = $request->message;
        $apiKey = env('GEMINI_API_KEY');

        if (!$apiKey) {
            return response()->json([
                'reply' => 'Error: GEMINI_API_KEY is not configured.'
            ], 500);
        }

        /*
        |--------------------------------------------------------------------------
        | 1. GET INVENTORY FROM DATABASE
        |--------------------------------------------------------------------------
        */

        try {
            $inventory = Product::select('product_name', 'price_per_pc', 'product_quantity')
                ->get()
                ->map(function ($item) {
                    return "- {$item->product_name}: ₱{$item->price_per_pc} (Available: {$item->product_quantity})";
                })
                ->implode("\n");

            if (empty($inventory)) {
                $inventory = "No products are currently available.";
            }
        } catch (\Exception $e) {
            Log::error("Database Error in AI Chat: " . $e->getMessage());

            $inventory = "We offer event rental equipment such as chairs, tables, tents, and catering tools.";
        }

        /*
        |--------------------------------------------------------------------------
        | 2. SYSTEM PROMPT (AI INSTRUCTIONS)
        |--------------------------------------------------------------------------
        */

        $systemPrompt = "
You are 'Triple A Rental Assistant', an AI for an event rental business.

Your job:
- Help customers find and rent event equipment.
- Use ONLY the inventory provided below.
- NEVER invent products not listed.
- Login first to rent 
INVENTORY:
{$inventory}

RULES:
- If user asks 'what tools are available', list the inventory exactly.
- If user asks for price, use inventory data.
- If item is not in inventory, say we don't offer it.
- We specialize in: chairs, tables, tents, catering tools.
- For booking, instruct user to click 'Book Equipment' button.
- Keep responses short, clear, and friendly.

User:
";

        /*
        |--------------------------------------------------------------------------
        | 3. CALL GEMINI API
        |--------------------------------------------------------------------------
        */

        $model = "gemini-2.5-flash";
        $url = "https://generativelanguage.googleapis.com/v1/models/{$model}:generateContent?key={$apiKey}";

        try {
            $response = Http::post($url, [
                "contents" => [
                    [
                        "parts" => [
                            ["text" => $systemPrompt . $userMessage]
                        ]
                    ]
                ]
            ]);

            $data = $response->json();

            if (!$response->successful()) {
                Log::error('Gemini API Error', $data);

                return response()->json([
                    'reply' => $data['error']['message'] ?? 'AI connection error.'
                ], 500);
            }

            $reply = $data['candidates'][0]['content']['parts'][0]['text']
                ?? 'Sorry, I could not process your request.';

            return response()->json([
                'reply' => $reply
            ]);
        } catch (\Exception $e) {
            Log::error('AI Chat Exception: ' . $e->getMessage());

            return response()->json([
                'reply' => 'Connection error. Please try again later.'
            ], 500);
        }
    }
}
