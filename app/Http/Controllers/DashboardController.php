<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Sucden Dashboard
    public function sucden()
    {
        return view('dashboard.sucden');
    }

    // Amerop Dashboard
    public function amerop()
    {
        return view('dashboard.amerop');
    }
}

