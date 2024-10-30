<?php

use App\Http\Controllers\DoacaoController;
use App\Http\Controllers\VoluntarioController;
use App\Models\Doacao;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/voluntarios', [VoluntarioController::class, 'index'])->name('voluntarios.index');

Route::get('/doacoes', [DoacaoController::class, 'index'])->name('doacoes.index');
