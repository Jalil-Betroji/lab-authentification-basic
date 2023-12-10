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
    return view('login');
})->name('login');
Route::post('/',[App\Http\Controllers\AuthController::class,'login']);
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::post('/register', [App\Http\Controllers\UserController::class,'store'])->name('create.user');
Route::get('/home' ,function(){
    return view('home');
})->name('home');
Route::delete('/' ,[App\Http\Controllers\AuthController::class,'logout'])->name('logout');