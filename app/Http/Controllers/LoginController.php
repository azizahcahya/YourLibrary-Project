<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            if (auth()->user()->role === 'administrator' || auth()->user()->role === 'pustakawan'){
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/');
            }
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function register(Request $request){
        User::create([
            'username' => $request->username,  
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/');
    }
}
