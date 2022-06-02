<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
<<<<<<< HEAD
Route::get('/forgotpass', function () {
    return view('forgotpass');
});
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('masuklogin');
Route::get('/register', [LoginController::class, 'register'])->name('regist');
=======
Route::get('/register', function () {
    return view('register');
});
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('masuklogin');
Route::get('/regist', [LoginController::class, 'register'])->name('regist');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/formpeminjaman', function () {
    return view('formPeminjaman');
});
>>>>>>> aab65d3a2c77efce2fff0456d0dfe602166e9eb7
