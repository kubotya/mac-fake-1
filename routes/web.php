<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'App\Http\Controllers\HelloController@index');
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');