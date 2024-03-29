<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', [TodoController::class,'home'])->name('home');

Route::post('/store', [TodoController::class,'store'])->name('store');

Route::get('/edit/{id}', [TodoController::class,'edit'])->name('edit');

Route::post('/update/{id}',[TodoController::class,'update'])->name('update');

Route::post('/detele/{id}', [TodoController::class,'delete'])->name('delete');