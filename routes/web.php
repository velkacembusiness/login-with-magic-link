<?php

use App\Actions\SendMagicLink;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/auth/login', 'auth.login')->middleware('guest');
Route::post('/auth/login', SendMagicLink::class)->name('auth.login')->middleware('guest');

Route::get('/auth/session/{user:email}', LoginController::class)->name('auth.session')->middleware(['signed', 'guest']);
