<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is logged in and role is user
        if (auth()->check() && auth()->user()->role === 'user') {
            return $next($request); // Allow regular user
        }

        // If user is not a normal user, redirect to admin dashboard
        return redirect('/admin/dashboard')->with('error', 'Access Denied! Users only.');
    }
}

