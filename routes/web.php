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

Route::view('login', 'login');

Route::post('/login', [PostController::class,'login'])->name('login');


//  Route::post('login', function(){
//      return request('email');
//  });


Route::get('/logout', function () {
    return view('logout');
});

Route::view('register', 'register');
Route::post('/register', [PostController::class,'RegisterUser'])->name('register');


Route::get('/register', function () {
    return view('register');
});

// Route::get('/ShowGame', function () {
//     return view('ShowGame');
// });
Route::get('/ShowGame', [PostController::class, 'ShowTable'])->name('Show');
Route::get('/ShowUsers',[PostController::class, 'ShowUsers'])->name('ShowUsers');
Route::get('/edit/{user}',[PostController::class, 'EditUser'])->name('edit');
Route::put('/update/{user}',[PostController::class, 'Update'])->name('update');



//Auth::routes();
