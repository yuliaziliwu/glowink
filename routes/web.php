<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\registercontroller;


<<<<<<< HEAD
Route::get('/', function () {
    return view('dashboard');
=======

Route::get('/', function() { 
    return view('welcome');
>>>>>>> ce273e6d675857d0547d69aa9df3f1d750b08794
});

Route::get('/view/login', function () {
    return view('login');
});

Route::get('/login', [logincontroller::class, 'login']);
Route::get('/register', [registercontroller::class, 'register']);