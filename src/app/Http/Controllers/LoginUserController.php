<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    public function show(){
        return view('login');
    }
    public function login(){
        echo "login";
    }
    public function logout(){
        echo "logout";
    }
}
