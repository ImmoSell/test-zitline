<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('login.login');
    }

    public function postlogin(Request $request) {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/');
        }
        return redirect('/');
    }
}