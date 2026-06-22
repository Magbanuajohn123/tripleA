<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\UserTripleA;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistration()
    {
        return view('user.register');
    }
    public function register(Request $request)
    {
        try {
            $validated = $request->validate([
                'fname' => 'required|string|max:20',
                'mname' => 'required|string|max:20',
                'lname' => 'required|string|max:20',
                'contact' => 'required|regex:/^09\d{9}$/|unique:triple_a_users,contact',
                'email' => 'required|email|unique:triple_a_users,email',
                'password' => 'required|min:8',
            ]);
            UserTripleA::create([
                'fname' => $validated['fname'],
                'mname' => $validated['mname'],
                'lname' => $validated['lname'],
                'contact' => $validated['contact'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);
         return back()->with('success', 'Registration Successful');
        } catch (Exception $e) {
            return back()->with([
                'error' => 'Error Registration '
            ]);
        }
    }
    public function showLogin()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        try {

            // for the role of user that going to login
            if (Auth::guard('admin')->attempt($credentials)) {
                $request->session()->regenerate();

                return back()->with([
                    'success' => 'Welcome Admin!',
                    'redirect'=>'/admin/adminDashboard'
                ]);
            }

            // for the role of user that going to login
            if (Auth::guard('web')->attempt($credentials)) {
    $request->session()->regenerate();

   

    return back()->with([
        'success' => 'Welcome User!',
        'redirect' => '/user/homePage'
    ]);
}

            // if both user is not found
            return back()->with([
                'error' => 'Invalid credentials'
            ]);
        } catch (\Exception $e) {
            return back()->with([
                'error' => 'Something went wrong. Please try again.'
            ]);
        }
    }
}
