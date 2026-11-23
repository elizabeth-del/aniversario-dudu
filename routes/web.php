<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AniversarioController;

Route::get('/', [AniversarioController::class, 'index'])->name('home');
Route::post('/recuerdos', [AniversarioController::class, 'storeRecuerdo'])->name('recuerdos.store');
Route::put('/carta', [AniversarioController::class, 'updateCarta'])->name('carta.update');