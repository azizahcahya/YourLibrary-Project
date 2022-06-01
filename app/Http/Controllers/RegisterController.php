<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request){
        User::create([
            'username' => $request->username,  
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/login');
    }
}
