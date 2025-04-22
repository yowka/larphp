<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PosterController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'about');
Route::view('/contact', 'contact');
Route::view('/auth', 'auth');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/about', [AboutController::class, 'index']);
Route::get('/poster', [PosterController::class, 'index'])->name('poster');
Route::get('/poster/{id}', [PosterController::class, 'show'])->name('poster.show');
