<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Request\LoginRequest;

/*
|--------------------------------------------------------------------------
| Web Routes

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

Route::get('/', [PostController::class, 'index'])->name('welcome');

Route::get('/login', function () {
    return view('login');
});

//Route::get('/login', [PostController::class,'login'])->name('login');


Route::get('/logout', function () {
    return view('logout');
});

Route::get('/register', function () {
    return view('register');
});

// Route::get('/ShowGame', function () {
//     return view('ShowGame');
// });
Route::get('/ShowGame', [PostController::class, 'ShowTable'])->name('posts.Show');;



