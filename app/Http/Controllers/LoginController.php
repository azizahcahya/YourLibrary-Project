<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
        $request ->validate([
            'name' => 'required|min:3',
            'username' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:3',
            'phone' => 'required|min:6',
        ]);
        User::create([
            'name' => $request->name,
            'username' => $request->username,  
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'role' => 'public',
        ]);
        return redirect('/');
    }
    public function resetPass(Request $request){
        User::where('email', $email)->update(['password'=>$request->input('password')]);
        return redirect('/login');
    }
}
