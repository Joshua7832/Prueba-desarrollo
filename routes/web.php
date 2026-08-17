<?php

use App\Http\Controllers\ToyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ToyController::class, 'showForm'])->name('toys.form');
Route::post('/guardar-usuario', [ToyController::class, 'saveUser'])->name('toys.saveUser');
Route::get('/catalogo', [ToyController::class, 'catalog'])->name('toys.catalog');
Route::post('/enviar-correo/{toy}', [ToyController::class, 'sendToyEmail'])->name('toys.sendEmail');
