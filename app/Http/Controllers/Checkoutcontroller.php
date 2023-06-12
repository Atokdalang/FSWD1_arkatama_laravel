<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Checkoutcontroller extends Controller
{
    public function index()
    {
        // Logika Anda untuk laman layout
        $data = [];

        return view('order.cart', $data);
    }

}
