<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return response()->json([
            'role' => 'user',
            'message' => 'Welcome to the User Dashboard!'
        ]);
    }
}

