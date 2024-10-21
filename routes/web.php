<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DudaController;

Route::delete('/dudas/{id}', [DudaController::class, 'destroy'])->name('dudas.destroy');

Route::get('/', [DudaController::class, 'create'])->name('duda.create');
Route::post('/duda/store', [DudaController::class, 'store'])->name('duda.store');
Route::get('/dudas', [DudaController::class, 'index'])->name('dudas.index');