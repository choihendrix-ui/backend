<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
<<<<<<< HEAD
=======
use Inertia\Inertia;
use Inertia\Response;
>>>>>>> f8ef78f (Initial working Laravel Docker setup)

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
<<<<<<< HEAD
    public function showConfirmForm()
=======
    public function show(): Response
>>>>>>> f8ef78f (Initial working Laravel Docker setup)
    {
        return Inertia::render('Auth/ConfirmPassword');
    }

    /**
     * Confirm the user's password.
     */
    public function confirm(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string'],
        ]);

        if (!Hash::check($request->password, $request->user()->password)) {
            throw ValidationException::withMessages([
                'password' => ['The provided password does not match our records.'],
            ]);
        }

        // Password is correct, mark password confirmation in session
        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended('/'); // Redirect where needed
    }
}

