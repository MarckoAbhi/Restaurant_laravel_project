<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        return view('auth.login'); // Assuming login.blade.php is in resources/views/auth/
    }

    /**
     * Handle the login request.
     */
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to login the user
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->remember)) {
            // Redirect to intended page or default home page
            return redirect()->intended('/dashboard'); // Change '/dashboard' as per your route
        } else {
            // Authentication failed, return back with an error
            return back()->withErrors([
                'email' => 'These credentials do not match our records.',
            ]);
        }
    }

    /**
     * Logout the user and redirect to login page.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}