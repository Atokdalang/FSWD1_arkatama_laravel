<?php

use App\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class,'index'])->name('users.index'); // Route untuk menampilkan daftar pengguna

Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); // Menambahkan rute untuk /users/create

Route::post('/users', [UserController::class, 'store'])->name('users.store'); // Mengubah rute menjadi POST dan memberikan nama rute

Route::get('/users/detail', [UserController::class, 'detail'])->name('users.detail'); // Route untuk menampilkan detail pengguna

Route::get('/users/edit', [UserController::class, 'edit'])->name('users.edit'); // Route untuk menampilkan edit pengguna

Route::delete('/users/delete', [UserController::class, 'delete'])->name('users.delete'); // Route untuk menghapus pengguna
