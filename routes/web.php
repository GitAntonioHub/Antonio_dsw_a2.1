<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DudaController;

Route::get('/dudas/{id}/edit', [DudaController::class, 'edit'])->name('dudas.edit');
Route::put('/dudas/{id}', [DudaController::class, 'update'])->name('dudas.update');


Route::delete('/dudas/{id}', [DudaController::class, 'destroy'])->name('dudas.destroy');

Route::get('/', [DudaController::class, 'create'])->name('duda.create');
Route::post('/duda/store', [DudaController::class, 'store'])->name('duda.store');
Route::get('/dudas', [DudaController::class, 'index'])->name('dudas.index');