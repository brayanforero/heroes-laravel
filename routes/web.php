<?php

use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('heroes', HeroController::class);


