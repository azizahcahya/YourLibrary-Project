<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function MonitoringUser(){
        $data = User::orderBy('id','DESC')->get();
        return view('pustakawan.user.index', ['data' => $data]);
    }

   
}