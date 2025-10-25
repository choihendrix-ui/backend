<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\RateLimiter;

class ForgotPasswordController extends Controller
{
    /**
     * Show the form to request a password reset link.
     */
    public function showLinkRequestForm()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle sending the reset password link email.
     */
    public function sendResetLinkEmail(Request $request)
    {
        // ✅ Validate the input
        $request->validate([
            'email' => 'required|email',
        ]);

        // ✅ Clear rate limiter so you don't get "Please wait before retrying"
        RateLimiter::clear($request->ip());

        // ✅ Attempt to send the reset link
        $status = Password::sendResetLink(
            $request->only('email')
        );

        // ✅ Return success or error message
        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }
}

