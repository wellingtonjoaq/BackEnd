<?php

use App\Http\Controllers\MemorialController;
use App\Http\Controllers\VoluntarioController;
use App\Models\Memorial;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/voluntarios', [VoluntarioController::class, 'index'])->name('voluntarios.index');
Route::get('/voluntarios/create', [VoluntarioController::class, 'create'])->name('voluntarios.create');
Route::get('/voluntarios/{id}', [VoluntarioController::class, 'show'])->name('voluntarios.show');

Route::post('/voluntarios', [VoluntarioController::class, 'store'])->name('voluntarios.store');

Route::get('/memorial', [MemorialController::class, 'index'])->name('memorial.index');
Route::get('/memorial/create', [MemorialController::class, 'create'])->name('memorial.create');
Route::get('/memorial/{id}',[MemorialController::class, 'show'])->name('memorial.show');
Route::get('/memorial/{id}/edit', [MemorialController::class, 'edit'])->name('memorial.edit');
Route::post('/memorial',[MemorialController::class, 'store'])->name('memorial.store');
Route::put('/memorial/{id}', [MemorialController::class, 'update'])->name('memorial.update');
Route::delete('/memorial/{id}', [MemorialController::class, 'destroy'])->name('memorial.destroy');
