<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
    Route::resource('habitacions', habitacionController::class);
});
