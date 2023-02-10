<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;


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


//** GETS */
Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/ShowGame', [HomeController::class, 'ShowTable'])->name('Show');
Route::get('/ShowUsers',[HomeController::class, 'ShowUsers'])->name('ShowUsers');
Route::get('/logout', [PostController::class, 'logout']);
Route::get('/edit/{user}',[PostController::class, 'EditUser'])->name('edit');


//** POSTS */
Route::post('/login', [PostController::class,'login'])->name('login');
Route::post('/register', [PostController::class,'register'])->name('register');

//** PUTS */
Route::put('/update/{user}',[PostController::class, 'Update'])->name('update');

//** DELETE */
Route::delete('/delete/{user}',[PostController::class, 'Delete'])->name('delete');





