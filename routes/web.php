<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DudaController;

Route::get('/', [DudaController::class, 'create'])->name('duda.create');
Route::post('/duda/store', [DudaController::class, 'store'])->name('duda.store');

/*Route::get('/', function () {
    return view('welcome');
});*/