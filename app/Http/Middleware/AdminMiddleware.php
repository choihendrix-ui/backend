<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is logged in and role is admin
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request); // Allow admin
        }

        // If user is not admin, redirect to user dashboard
        return redirect('/user/dashboard')->with('error', 'Access Denied! Admins only.');
    }
}

