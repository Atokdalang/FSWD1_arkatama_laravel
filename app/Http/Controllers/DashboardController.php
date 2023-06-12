<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Logika Anda untuk laman layout
        $data = [];

        return view('dashboard', $data);
    }

    public function reset()
    {
        // Logika Anda untuk laman layout
        $data = [];

        return view('form.reset', $data);
}

public function sendResetLinkEmail(Request $request)
{
    // Logika pengiriman reset password

    Session::flash('status', 'Reset password link has been sent to your email.');

    return redirect('/reset');
}

}
