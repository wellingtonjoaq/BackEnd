<?php

use App\Http\Controllers\VoluntarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/voluntarios', [VoluntarioController::class, 'index'])->name('voluntarios.index');
Route::get('/voluntarios/create', [VoluntarioController::class, 'create'])->name('voluntarios.create');
Route::get('/voluntarios/{id}', [VoluntarioController::class, 'show'])->name('voluntarios.show');
Route::get('/voluntarios/{id}/edit', [VoluntarioController::class, 'edit'])->name('voluntarios.edit');
Route::post('/voluntarios', [VoluntarioController::class, 'store'])->name('voluntarios.store');

Route::delete('/voluntarios/{id}', [VoluntarioController::class, 'destroy'])->name('voluntarios.destroy');