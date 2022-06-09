<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function login() {
        return view('login');
    }
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
    public function register(Request $request){
        User::create([
            'username' => $request->username,  
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/login');
    }
}
