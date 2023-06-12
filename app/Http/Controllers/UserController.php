<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        // Ambil semua data user dari database
        $user = User::with('role')->get();

        // Tampilkan halaman index
        return view('user.index', compact('user'));
    }

    public function create()
    {
        // Ambil data roles dari database
        $roles = Role::all();

        // Tampilkan form create user dengan passing data roles
        return view('user.create', compact('roles'));
    }

    public function store(Request $request)
{
    // Simpan data ke database
    $user = User::create([
        'name' => $request->name,
        'address' => $request->address,
        'email' => $request->email,
        'phone' => $request->phone,
        'password' => $request->password,
        'role_id' => $request->role // Menyimpan role_id yang dipilih oleh pengguna
    ]);

    // Periksa apakah ada file gambar yang diunggah
    if ($request->hasFile('profile_image')) {
        $profileImage = $request->file('profile_image');
        $imagePath = $profileImage->store('profile_images', 'public');
        $user->profile_image = $imagePath;
        $user->save();
    }

    // Redirect ke halaman user.index
    return redirect()->route('user.index');
}

    public function edit($id)
    {
        // Ambil data user berdasarkan id
        $user = User::find($id);

        // Ambil data roles dari database
        $roles = Role::all();

        // Tampilkan halaman edit dengan passing data user dan roles
        return view('user.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        // Ambil data user berdasarkan id
        $user = User::find($id);

        // Update data user
        $user->update([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'role_id' => $request->role
        ]);

        // Periksa apakah ada file gambar yang diunggah
        if ($request->hasFile('profile_image')) {
            // Hapus gambar profil lama jika ada
            if ($user->profile_image) {
                Storage::delete($user->profile_image);
            }

            // Simpan gambar profil baru
            $profileImage = $request->file('profile_image');
            $imagePath = $profileImage->store('profile_images', 'public');
            $user->profile_image = $imagePath;
            $user->save();
        }

        // Redirect ke halaman user.index
        return redirect()->route('user.index');
    }

    public function destroy($id)
{
    // Ambil data user berdasarkan id
    $user = User::find($id);

    // Hapus file gambar profil jika ada
    if ($user->profile_image) {
        Storage::disk('public')->delete($user->profile_image);
    }

    // Hapus data user
    $user->delete();

    // Redirect ke halaman user.index
    return redirect()->route('user.index');
}

}
