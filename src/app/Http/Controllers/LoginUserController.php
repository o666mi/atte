<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\LoginRequest;

class LoginUserController extends Controller
{
    public function show(LoginRequest $request)
    {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);
        
        if (Auth::guard('/')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return view('show');
    }
    public function login(Request $request)
    {
        return redirect()->route('/attendance');
    }
    public function logout(Request $request)
    {

    }
}
