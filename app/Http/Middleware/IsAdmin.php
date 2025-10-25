<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // If logged in and user is admin
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        // If not admin, redirect to user dashboard
        return redirect('/user/dashboard')->with('error', 'Access denied.');
    }
}

