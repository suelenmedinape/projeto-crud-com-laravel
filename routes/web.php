<?php

use App\Http\Controllers\RegisterController;
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
    return view('produto');
})->name('produto.home');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('produto.cadastro');

Route::post('/cadastro', [RegisterController::class, 'add'])->name('produto.add');

Route::get('/lista', [RegisterController::class, 'list'])->name('produto.list');

Route::get('/edit/{id}', [RegisterController::class, 'edit'])->name('produto.edit');

Route::get('/delete/{id}', [RegisterController::class, 'delete'])->name('produto.delete');

Route::post('/update/{id}', [RegisterController::class, 'update'])->name('produto.update');