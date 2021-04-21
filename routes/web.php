<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
    return view('auth.login');
});

// Route::get('/book', function () {
//     return view('Book.index');
// });
#Route::resource('/book', BookAdminController::class);
// BookAdminController

#Route::get('/book',[BookAdminController::class]);

Route::get('/book',[BookAdminController::class,'index']);

Route::get('/books/showall',[BookController::class,'VieBook']);

Route::group(['middleware' => 'auth'],function () {
    Route::get('/',[BookController::class,'VieBook']);
});

Route::get('/books/create',[BookController::class,'create_w']);

#Route::delete('/books/delete/{id}',[BookController::class,'Delete']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
