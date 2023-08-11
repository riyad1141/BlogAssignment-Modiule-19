<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('/Blog',[\App\Http\Controllers\BlogController::class,'Page']);
Route::get('/Single-Post',[\App\Http\Controllers\SinglePostController::class,'Page']);
Route::get('/About',[\App\Http\Controllers\AboutController::class,'Page']);
Route::get('/Contact',[\App\Http\Controllers\ContactController::class,'Page']);
Route::get('/Category',[\App\Http\Controllers\CategoryController::class,'Page']);





Route::get('/heroData',[\App\Http\Controllers\BlogController::class,'heroData']);
