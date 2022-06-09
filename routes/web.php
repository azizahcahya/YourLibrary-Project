<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware;
// use App\Http\Controllers\RegisterController;

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

// LOGIN
Route::get('/', function () {
    return view('login');
});
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login View');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/forgotpass', function () {
    return view('forgotpass');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('masuklogin');

// REGISTER
Route::post('/postregist', [LoginController::class, 'register'])->name('masukregist');
// 

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('Dashboard Admin');

Route::get('/admin/users', [AdminUserController::class, 'index'])->name('Manage Users');
Route::get('/admin/users/create', [AdminUserController::class, 'create'])->name('Create User');
Route::post('/admin/users/create', [AdminUserController::class, 'store'])->name('Store Data User');
Route::delete('/admin/users/{id}', [AdminUserController::class, 'destroy'])->name('Delete Data User');

Route::get('/admin/posts/checkSlug', [AdminPostController::class, 'checkSlug']);
Route::resource('/admin/posts', AdminPostController::class);

// Route::get('/admin', function(){
//     return view('formPeminjaman');
// });

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/yourbooks', function () {
    return view('yourBooks');
});

Route::get('/formpeminjaman', function () {
    return view('formPeminjaman');
});

Route::get('/extenddate', function () {
    return view('extendForm');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
