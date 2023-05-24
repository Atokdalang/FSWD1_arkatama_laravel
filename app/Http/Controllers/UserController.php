<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //function menampilkan index
    public function index()
    {
        $users = User::all();
        return view('user.index', compact(['users']));
    }

    //function create data pengguna
    public function create()
    {
        $users = User::all();
        return view('user.create', compact(['users']));
    }

    //function tambah pengguna
    public function store(Request $request)
{
    // Mendapatkan nilai input dari form
    $name = $request->input('name');
    $role = $request->input('role');
    $password = $request->input('password');
    $email = $request->input('email');
    $phone = $request->input('phone');
    $address = $request->input('address');
    $avatar = $request->file('avatar');

    // Periksa apakah file dipilih untuk diunggah
    if ($avatar) {
        // Menentukan direktori tujuan untuk menyimpan file
        $targetDir = 'assets/';

        // Membuat nama unik untuk file yang diunggah
        $uniqueName = uniqid() . '_' . $avatar->getClientOriginalName();

        // Memindahkan file yang diunggah ke direktori tujuan
        $avatar->storeAs($targetDir, $uniqueName);

        // Jika unggah file berhasil, masukkan data pengguna ke dalam database
        $query = "INSERT INTO users (name, role, password, email, phone, address, avatar) VALUES (?, ?, ?, ?, ?, ?, ?)";

        DB::insert($query, [$name, $role, $password, $email, $phone, $address, $uniqueName]);
    } else {
        // Jika tidak ada file yang dipilih untuk diunggah, masukkan data pengguna ke dalam database tanpa avatar
        $query = "INSERT INTO users (name, role, password, email, phone, address) VALUES (?, ?, ?, ?, ?, ?)";

        DB::insert($query, [$name, $role, $password, $email, $phone, $address]);
    }

    // Redirect ke halaman index pengguna setelah proses penyimpanan selesai
    return redirect()->route('users.index');
}

    //function detail data pengguna
    public function detail()
    {
        $users = User::all();
        return view('user.detail', compact(['users']));
    }

    //function edit data pengguna
    public function edit()
    {
        // Mengambil semua data pengguna dari tabel "users"
        $users = User::all();

        // Mengirimkan data pengguna ke view "user.detail" menggunakan compact() untuk membuat array asosiatif
        // Array asosiatif tersebut akan memiliki kunci "users" yang mengacu pada data pengguna yang diambil sebelumnya
        return view('user.edit', compact(['users']));
    }

     //function delete data pengguna
     public function delete(Request $request)
    {
        $id = $request->input('delete');
        $query = "DELETE FROM users WHERE id = ?";
        $deleted = DB::delete($query, [$id]);

        if ($deleted) {
            return redirect()->route('users.index')->with('success', 'Pengguna berhasil dihapus.');
        } else {
            return redirect()->route('users.index')->with('error', 'Gagal menghapus pengguna.');
        }
    }
}
