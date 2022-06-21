<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Peminjaman;

class AdminController extends Controller
{
    public function index(){
        if(auth()->user()->role === 'public'){
            abort(403);
        }

        $countUsers = User::orderBy('id','DESC')->count();
        $countPosts = Post::orderBy('id','DESC')->count();
        $countBookings =\DB::table('peminjamen')->count();
        return view('admin.dashboard', ['dataUser' => $countUsers, 'dataPost' => $countPosts, 'dataBooking' => $countBookings]);
    }

}
