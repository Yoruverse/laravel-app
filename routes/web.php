<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
})->name('home')->middleware('auth');

Route::get('/login', [LoginController::class, "index"])->name('login');
Route::post('/login', [LoginController::class, "post"])->name('login.post');