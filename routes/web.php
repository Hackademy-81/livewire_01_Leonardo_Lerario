<?php

use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'home'])->name('welcome');
Route::get('/article/create', [PublicController::class, 'create'])->name('article.create');
Route::get('/article/index', [PublicController::class, 'index'])->name('article.index');
Route::get('/article/{id}/edit', [PublicController::class, 'edit'])->name('article.edit');