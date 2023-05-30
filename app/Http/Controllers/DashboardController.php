<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Logika Anda untuk laman layout
        $data = [];

        return view('dashboard', $data);
    }
}
