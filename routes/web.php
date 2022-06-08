<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// LOGIN
Route::get('/login', function () {
    return view('login');
});
 
Route::get('/register', function () {
    return view('register');
});

Route::get('/forgotpass', function () {
    return view('forgotpass');
});
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('masuklogin');

// REGISTER
Route::post('/postregist', [LoginController::class, 'register'])->name('masukregist');
// 
Route::get('/yourbooks', function () {
    return view('yourBooks');
});

Route::get('/formpeminjaman', function () {
    return view('formPeminjaman');
});

Route::get('/extenddate', function () {
    return view('extendForm');
});
