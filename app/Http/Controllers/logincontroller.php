<?php

namespace App\Http\Controllers;
namespace App\Http\logincontroller;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function login(){
        return view('/views/login');
}
}
