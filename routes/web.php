<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'home.index')->name('home.index');

Route::view('login','auth.login')->name('auth.login');

Route::post('login',[ AuthController::class, 'loggedIn'])->name('auth.loggedIn');
Route::post('logout',[ AuthController::class, 'logout'])->name('auth.logout');

Route::resource('heroes', HeroController::class)->middleware('auth');
