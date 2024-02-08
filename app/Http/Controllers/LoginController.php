<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check if the user is a driver or passenger
            if ($user->driver) {
                // User is a driver
                return redirect()->route('driver.dashboard');
            } elseif ($user->passenger) {
                // User is a passenger
                return redirect()->route('passenger.dashboard');
            }
        }

        // Authentication failed
        return redirect()->route('login.form')->with('error', 'Invalid credentials');
    }
}
