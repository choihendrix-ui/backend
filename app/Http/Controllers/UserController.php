<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class UserController extends Controller
{
    public function dashboard()
    {
        return response()->json([
            'role' => 'user',
            'message' => 'Welcome to the User Dashboard!'
        ]);
use App\Models\User;
=======
>>>>>>> f8ef78f (Initial working Laravel Docker setup)

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

