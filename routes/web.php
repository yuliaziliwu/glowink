<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\AddBarangController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/view/halaman', function () {
    return view('halaman');
});

Route::get('/view/add_barang.blade', function () {
    return view('add_barang');
});

Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'register']);
// Route::get('/dashboard  ', [NavbarController::class, 'dashboard']);
Route::get('/checkout', [CheckoutController::class, 'checkout']);
Route::get('/cart', [CartController::class, 'cart']);
Route::get('/halaman', [HalamanController::class, 'halaman']);
Route::get('/add_barang', [AddBarangController::class, 'add_barang']);

