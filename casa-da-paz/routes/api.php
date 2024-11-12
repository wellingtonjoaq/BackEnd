<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\VoluntarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('voluntarios')->group(function () {
    Route::get('/', [VoluntarioController::class, 'index'])->name('voluntarios.index');
    Route::get('create', [VoluntarioController::class, 'create'])->name('voluntarios.create');
    Route::get('{id}', [VoluntarioController::class, 'show'])->name('voluntarios.show');
    Route::get('{id}/edit', [VoluntarioController::class, 'edit'])->name('voluntarios.edit');
    Route::post('/', [VoluntarioController::class, 'store'])->name('voluntarios.store');
    Route::put('{id}', [VoluntarioController::class, 'update'])->name('voluntarios.update');
    Route::delete('{id}', [VoluntarioController::class, 'destroy'])->name('voluntarios.destroy');
});
