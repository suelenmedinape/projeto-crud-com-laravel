<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view(view: 'produto');
})->name('produto.home');

Route::get('/cadastro', function () {
    return view(view: 'cadastro');
})->name('produto.cadastro');

Route::get('/lista', function () {
    return view(view: 'lista');
})->name('produto.lista');