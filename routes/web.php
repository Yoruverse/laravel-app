<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServerController;

Route::get('/', [HomeController::class, "index"])->name('home')->middleware('auth');

Route::get('/login', [LoginController::class, "index"])->name('login');
Route::post('/login', [LoginController::class, "post"])->name('login.post');

Route::get('/server/{id?}', [ServerController::class, "index"])->name('server')->middleware('auth');