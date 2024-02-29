<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
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
Route::get('/', [LinkController::class, 'index'])->name('links.index');

Route::get('/{code}', [LinkController::class, 'code_redirect'])->name('links.code_redirect');

// Route::get('/show/{link}', [LinkController::class, 'show'])->name('links.show');

Route::post('/create', [LinkController::class, 'create'])->name('links.create');
