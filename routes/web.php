<?php

use App\Actions\SendMagicLink;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/auth/login', 'auth.login')->middleware('guest');
Route::post('/auth/login', SendMagicLink::class)->name('auth.login')->middleware('guest');
