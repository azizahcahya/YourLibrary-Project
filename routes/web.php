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
Route::get('/forgotpass', function () {
    return view('forgotpass');
});
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('masuklogin');
Route::get('/register', [LoginController::class, 'register'])->name('regist');
