<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\checkoutcontroller;
use App\Http\Controllers\cartcontroller;

Route::get('/', function () {
    return view('dashboard');
});


Route::get('/view/login', function () {
    return view('login');
});

Route::get('/login', [logincontroller::class, 'login']);
Route::get('/register', [registercontroller::class, 'register']);
Route::get('/checkout', [checkoutcontroller::class, 'checkout']);
Route::get('/cart', [cartcontroller::class, 'cart']);


