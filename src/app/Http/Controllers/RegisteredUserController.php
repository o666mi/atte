<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create()
    {
        $users = Author::all();
        return view('register', ['authors' => $authors]);
    }
    public function store(Request $request)
    {
        $user = $request->only(['name', 'email', 'password']);
        User::create($users);
        return view('/');
    }
}
