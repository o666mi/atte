<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('register');
    }
    public function store(Request $request){
        $user = new user;
        return redirect('/register')
    }
}
