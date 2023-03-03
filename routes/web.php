<?php

use App\Models\Eggs;
use App\Http\Controllers\EggController;
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

Route::get('/', [EggController::class, 'index'])->name('index');
Route::get('/eggs/create', [EggController::class, 'create'])->name('eggs.create');
Route::get('/eggs/{id}', [EggController::class, 'show'])->name('eggs.show');
Route::post('/eggs', [EggController::class, 'store'])->name('eggs.store');
Route::get('/eggs/{id}/edit', [EggController::class, 'edit'])->name('eggs.edit');
Route::put('/eggs/{id}', [EggController::class, 'update'])->name('eggs.update');
Route::delete('/eggs/{id}', [EggController::class, 'destroy'])->name('eggs.destroy');
