<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Checkoutcontroller;

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

// Route untuk profile
Route::get('/user/profile', [ProfileController::class, 'profile'])->name('admin.profile');
Route::put('/user/profile/{id}', [ProfileController::class, 'update'])->name('admin.update');

// Route untuk form login
Route::get('/login', [LoginController::class, 'index'])->name('form.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('form.login');

// Route untuk form reset
Route::get('/reset', [DashboardController::class, 'reset'])->name('form.reset');
Route::post('/reset', [DashboardController::class, 'sendResetLinkEmail'])->name('form.reset');

//Route untuk register
Route::get('/register', [RegisterController::class, 'index'])->name('form.register');
Route::post('/register', [RegisterController::class, 'store'])->name('form.register');

//Route untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('landing');

// Route untuk landing page
Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact'); // Route untuk menampilkan contact pada landing page
Route::post('/subscribe', [LandingController::class, 'subscribe'])->name('subscribe'); // Route untuk fungsi subscribe newsletter
Route::post('/contact', [LandingController::class, 'sendContactForm'])->name('landing.contact'); // Route untuk menampilkan pesan jika sudah melakukan contact pada landing page
Route::get('/testimonial', [LandingController::class, 'testimonial'])->name('testimonial'); // Route untuk menampilkan testimonial pada landing page
Route::get('/bird', [LandingController::class, 'bird'])->name('bird'); // Route untuk menampilkan our bird gadget store pada landing page
Route::get('/about', [LandingController::class, 'about'])->name('about'); // Route untuk menampilkan about pada landing page

// Route untuk Dashboard
Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Slider
Route::get('/slider', [SliderController::class, 'index'])->name('slider.index'); // route untuk menampilkan data awal
Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create'); // route untuk menampilkan form create
Route::post('/slider', [SliderController::class, 'store'])->name('slider.store'); // route untuk menyimpan data
Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit'); // route untuk menampilkan form edit
Route::put('/slider/{id}', [SliderController::class, 'update'])->name('slider.update'); // route untuk mengupdate data
Route::delete('/slider/{id}', [SliderController::class, 'destroy'])->name('slider.destroy'); // route untuk menghapus data

// Category
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

// Product
Route::get('/checkout', [ProductController::class, 'checkout'])->name('order.checkout');
Route::get('/product/detail/{category}', [DetailController::class, 'showByCategory'])->name('product.showByCategory');
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

// User
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

// Role
Route::get('/role', [RoleController::class, 'index'])->name('role.index');
Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
Route::post('/role', [RoleController::class, 'store'])->name('role.store');
Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
Route::put('/role/{id}', [RoleController::class, 'update'])->name('role.update');
Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('role.destroy');

// Detail Product
Route::get('/product/detail', [DetailController::class, 'detail'])->name('order.detail');
Route::get('/detail', [DetailController::class, 'index'])->name('detail.index');
Route::get('/detail/create', [DetailController::class, 'create'])->name('detail.create');
Route::post('/detail', [DetailController::class, 'store'])->name('detail.store');
Route::get('/detail/edit/{id}', [DetailController::class, 'edit'])->name('detail.edit');
Route::put('/detail/{id}', [DetailController::class, 'update'])->name('detail.update');
Route::delete('/detail/{id}', [DetailController::class, 'destroy'])->name('detail.destroy');

// Route untuk mengatur menu tampilan cart/keranjang
Route::get('/cart', [CheckoutController::class, 'index'])->name('order.cart');//perbaiki besok
