<?php

use App\Http\Controllers\RecetaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para autenticación
Auth::routes();

// Rutas para recetas
Route::get('/recetas',          [RecetaController::class, 'index'])->name('recetas.index');
Route::get('/recetas/create',   [RecetaController::class, 'create'])->name('recetas.create');
Route::post('/recetas',         [RecetaController::class, 'store'])->name('recetas.store');

