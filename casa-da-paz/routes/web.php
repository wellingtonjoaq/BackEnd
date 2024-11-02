<?php

use App\Http\Controllers\VoluntarioController;
use App\Models\Voluntario;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/voluntarios', [VoluntarioController::class, 'index'])->name('voluntarios.index');
Route::get('/voluntarios/create', [VoluntarioController::class, 'create'])->name('voluntarios.create');
Route::get('/voluntarios/{id}', [VoluntarioController::class, 'show'])->name('voluntarios.show');

Route::post('/voluntarios', [VoluntarioController::class, 'store'])->name('voluntarios.store');
