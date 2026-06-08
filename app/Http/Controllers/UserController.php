<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTripleA;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showRegister()
    {
        return view('user.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:_triple_a__user,email',
            'password' => 'required|min:8',
        ]);

        UserTripleA::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

       return back()->with('success', 'Register successful! Redirecting to login...');
    }
}
