<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
<<<<<<< HEAD
        $validated = $request->validateWithBag('updatePassword', [
=======
>>>>>>> f8ef78f (Initial working Laravel Docker setup)
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back();
<<<<<<< HEAD
        return back()->with('status', 'password-updated');
=======
>>>>>>> f8ef78f (Initial working Laravel Docker setup)
    }
}
