<?php

use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\MemorialController;
use App\Http\Controllers\VoluntarioController;
use App\Models\Galeria;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/voluntarios', [VoluntarioController::class, 'index'])->name('voluntarios.index');
Route::get('/voluntarios/create', [VoluntarioController::class, 'create'])->name('voluntarios.create');
Route::get('/voluntarios/{id}', [VoluntarioController::class, 'show'])->name('voluntarios.show');
Route::get('/voluntarios/{id}/edit', [VoluntarioController::class, 'edit'])->name('voluntarios.edit');
Route::post('/voluntarios', [VoluntarioController::class, 'store'])->name('voluntarios.store');
Route::put('/voluntarios/{id}', [VoluntarioController::class, 'update'])->name('voluntarios.update');
Route::delete('/voluntarios/{id}', [VoluntarioController::class, 'destroy'])->name('voluntarios.destroy');

Route::get('/memorial', [MemorialController::class, 'index'])->name('memorial.index');
Route::get('/memorial/create', [MemorialController::class, 'create'])->name('memorial.create');
Route::get('/memorial/{id}',[MemorialController::class, 'show'])->name('memorial.show');
Route::get('/memorial/{id}/edit', [MemorialController::class, 'edit'])->name('memorial.edit');
Route::post('/memorial',[MemorialController::class, 'store'])->name('memorial.store');
Route::put('/memorial/{id}', [MemorialController::class, 'update'])->name('memorial.update');
Route::delete('/memorial/{id}', [MemorialController::class, 'destroy'])->name('memorial.destroy');

Route::get('/galeria', [GaleriaController::class, 'index'])->name('galeria.index');
Route::get('/galeria/create', [GaleriaController::class, 'create'])->name('galeria.create');
Route::get('/galeria/{id}', [GaleriaController::class, 'show'])->name('galeria.show');
Route::get('/galeria/{id}/edit', [GaleriaController::class, 'edit'])->name('galeria.edit');
Route::post('/galeria', [GaleriaController::class, 'store'])->name('galeria.store');
Route::put('/galeria/{id}', [GaleriaController::class, 'update'])->name('galeria.update');
Route::delete('/galeria/{id}', [GaleriaController::class, 'destroy'])->name('galeria.destroy');
