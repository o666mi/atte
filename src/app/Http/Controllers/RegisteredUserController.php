<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        return redirect()->route('/attendance');
    }
}
