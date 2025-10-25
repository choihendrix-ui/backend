<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sucden()
    {
        return view('dashboard_sucden'); // no redirects here
    }

    public function amerop()
    {
        return view('dashboard_amerop'); // no redirects here
    }
}

