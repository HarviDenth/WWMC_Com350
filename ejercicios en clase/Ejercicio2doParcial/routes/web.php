<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu');
});
Route::resource('libros', LibroController::class);
Route::view('/menu', 'menu')->name('menu');