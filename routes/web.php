<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\registercontroller;



Route::get('/', function() { 
    return view('welcome');
});

Route::get('/view/login', function () {
    return view('login');
});

Route::get('/login', [logincontroller::class, 'login']);
Route::get('/register', [registercontroller::class, 'register']);