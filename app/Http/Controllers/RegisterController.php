<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('form.register', compact('roles'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|min:8',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->role_id = 3; // Set nilai role_id sesuai dengan nilai yang valid
        $user->save();

        return redirect('/')->with('success', 'Registration successful!');
    }
}

