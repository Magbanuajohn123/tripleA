<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;     // <--- IMPORTANT: Added this line
use Illuminate\Support\Facades\Storage; // Import Storage facade (good practice, even if not directly used in addproduct)

class AdminController extends Controller
{
    public function dashboard()
    {
        Log::info("Admin dashboard accessed."); // Changed log message for clarity
        return view("admin.adminDashboard");
    }

    public function product()
    {
        // Fetch all products to display them on the adminProduct view
        $inventory = Product::all();
        return view("admin.adminProduct", compact('inventory'));
    }

    public function addproduct(Request $request)
    {
        try {
            // Validate the incoming request data
            $validated = $request->validate([
                "product_name" => "required|string|max:255",
                "product_quantity" => "required|integer|min:1", // Ensure quantity is an integer and at least 1
                "price_per_pc" => "required|numeric|min:0",    // Ensure price is numeric and non-negative
                "product_image" => "nullable|image|mimes:jpg,jpeg,png,webp|max:2048", // Max 2MB
            ]);

            $imagePath = null;

            // Check if a product image was uploaded
            if ($request->hasFile("product_image")) {
                // Store the image in 'storage/app/public/products'
                // The 'store' method returns the path relative to the 'storage/app' directory.
                // Example path: 'public/products/unique_filename.jpg'
                $imagePath = $request->file("product_image")->store("products", "public");
            }

            // Create a new Product record in the database
            Product::create([
                "product_name" => $validated["product_name"],
                "product_quantity" => $validated["product_quantity"],
                "price_per_pc" => $validated["price_per_pc"],
                "product_image" => $imagePath, // This will store the path like 'public/products/xxxx.jpg'
            ]);

            // Redirect back with a success message
            return back()->with("success", "Product added successfully!");
        } catch (Exception $e) {
            // This will stop the app and show a big orange error screen with details
        };
    }
    public function updateproduct(Request $request)
    {
        $product = Product::findOrFail($request->id);
        
        $product->product_name = $request->product_name;
        $product->product_quantity = $request->product_quantity;
        $product->price_per_pc = $request->price_per_pc;

        $product->save();

        return redirect()->back()->with('success', 'Product Updated Successfully');
    }
    public function deleteProduct(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        $product->delete();

        return back()->with('success', 'Product deleted successfully');
    }
}
