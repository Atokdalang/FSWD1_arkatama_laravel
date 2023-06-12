<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function profile()
    {
        // Mengambil data pengguna yang sedang login
        $user = Auth::user();

        return view('admin.profile', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        $user->update([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone
        ]);

        if ($request->hasFile('profile_image')) {
            if ($user->profile_image) {
                Storage::disk('public')->delete($user->profile_image);
            }

            $profileImage = $request->file('profile_image');
            $imagePath = $profileImage->store('profile_images', 'public');
            $user->profile_image = $imagePath;
        }

        $user->save();


        return redirect()->back()->with('success', 'Profile updated successfully');
    }

}
