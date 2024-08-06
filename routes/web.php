<?php

use App\Http\Controllers\Web\GoogleLoginController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Web\AuthController;
use \App\Http\Controllers\Web\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login']);
Route::get('/home', HomeController::class)->middleware(['auth']);

Route::get('/google/redirect', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');
