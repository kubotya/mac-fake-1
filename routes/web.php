<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'App\Http\Controllers\HelloController@index');
Route::get('menutest', 'App\Http\Controllers\MenutestController@index');
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('/cart', [CartController::class, 'view'])->name('cart.view');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/del', [CartController::class, 'del'])->name('cart.del');
Route::delete('/cart/{itemId}', [CartController::class, 'remove'])->name('cart.remove');