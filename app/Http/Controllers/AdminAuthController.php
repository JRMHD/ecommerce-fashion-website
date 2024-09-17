<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle login attempt
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            // Store admin information in session
            session(['admin' => $admin]);

            return redirect()->route('admin.dashboard');
        } else {
            return back()->withErrors(['Invalid credentials']);
        }
    }

    // Show forgot password form
    public function showForgotPasswordForm()
    {
        return view('admin.forgot-password');
    }

    // Handle forgot password request
    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin) {
            $token = Str::random(60);

            // Save token to the admin model or a password reset table
            $admin->update(['reset_token' => $token]);

            // Send password reset link via email
            Mail::send('admin.emails.reset-password', ['token' => $token], function ($message) use ($admin) {
                $message->to($admin->email)
                    ->subject('Admin Password Reset');
            });

            return back()->with('message', 'Password reset link has been sent!');
        } else {
            return back()->withErrors(['Email not found']);
        }
    }


    // Show reset password form
    public function showResetPasswordForm($token)
    {
        return view('admin.reset-password', ['token' => $token]);
    }



    // Handle password reset
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'password' => 'required|confirmed',
        ]);

        $admin = Admin::where('reset_token', $request->token)->first();

        if ($admin) {
            // Update password and remove reset token
            $admin->update([
                'password' => Hash::make($request->password),
                'reset_token' => null,
            ]);

            return redirect()->route('admin.login')->with('message', 'Password has been reset!');
        } else {
            return back()->withErrors(['Invalid token']);
        }
    }

    // Show admin dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
