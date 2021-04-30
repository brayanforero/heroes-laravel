<?php

use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'home.index')->name('home.index');

Route::get('login', function (){
    return view('auth.login');
})->name('login');

Route::resource('heroes', HeroController::class);
