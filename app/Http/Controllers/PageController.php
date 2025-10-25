<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // This method will handle the home route
    public function home()
    {
        // You can return a view or simple text for testing
        return view('welcome');
        // OR for testing:
        // return "Welcome to the homepage!";
    }
}

