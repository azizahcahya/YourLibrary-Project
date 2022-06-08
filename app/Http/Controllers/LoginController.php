<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function postlogin(Request $request) {
        if(Auth::attempt($request->only('username', 'password'))){
            return view('home');
        }
        return view('login');
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
    public function register(Request $request) {
        echo 'Hello World!';
    }
}
