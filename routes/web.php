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
Route::get('/register', function () {
    return view('register');
});
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('masuklogin');
Route::get('/regist', [LoginController::class, 'register'])->name('regist');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/formpeminjaman', function () {
    return view('formPeminjaman');
});
