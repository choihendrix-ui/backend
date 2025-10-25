<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Simple test response — replace with a view later if you want
        return response()->json([
            'role' => 'admin',
            'message' => 'Welcome to the Admin Dashboard!'
        ]);
    }
}


