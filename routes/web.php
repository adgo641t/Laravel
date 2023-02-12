<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DBController;
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
Route::get('/logout', [DBController::class, 'logout']);
Route::get('/edit/{user}',[DBController::class, 'EditUser'])->name('edit');


//** POSTS */
Route::post('/login', [DBController::class,'login'])->name('login');
Route::post('/register', [DBController::class,'register'])->name('register');

//** PUTS */
Route::put('/update/{user}',[DBController::class, 'Update'])->name('update');

//** DELETE */
Route::delete('/delete/{user}',[DBController::class, 'Delete'])->name('delete');
