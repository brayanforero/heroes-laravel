<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'home.index')->name('home.index')->middleware('guest');

Route::view('login','auth.login')->name('auth.login')->middleware('guest');

Route::post('login',[ AuthController::class, 'loggedIn'])->name('auth.loggedIn');
Route::post('logout',[ AuthController::class, 'logout'])->name('auth.logout');

Route::resource('heroes', HeroController::class)->middleware('auth');
