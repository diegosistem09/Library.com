<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/books/showall',[BookController::class,'index']);
Route::post('/books/create',[BookController::class,'store']);
Route::get('/books/show/{id}',[BookController::class,'show']);
Route::put('/books/upd/{id}',[BookController::class,'update']);
Route::get('/books/dlt/{id}',[BookController::class,'destroy']);