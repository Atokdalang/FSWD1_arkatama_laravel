<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/hello', function () {
return 'nama saya fadly';
});

Route::redirect('/nama', '/hello');

Route::fallback(function () {
    return 'halaman ini tidak ada';
});

Route::get('/conflict/{merk}', function ($id) {
    return 'Nama Barang : ' . $id;
});

Route::get('/conflict/nokia', function ($namaItems) {
    return 'Tipe Barang Saya Adalah Nokia';
});
