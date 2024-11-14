<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\MemorialController;
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

Route::prefix('galerias')->group(function () {
    Route::get('/', [GaleriaController::class, 'index'])->name('galeria.index');
    Route::get('create', [GaleriaController::class, 'create'])->name('galeria.create');
    Route::get('{id}', [GaleriaController::class, 'show'])->name('galeria.show');
    Route::get('{id}/edit', [GaleriaController::class, 'edit'])->name('galeria.edit');
    Route::post('/', [GaleriaController::class, 'store'])->name('galeria.store');
    Route::put('{id}', [GaleriaController::class, 'update'])->name('galeria.update');
    Route::delete('{id}', [GaleriaController::class, 'destroy'])->name('galeria.destroy');
});

Route::prefix('memorial')->group(function () {
    Route::get('/', [MemorialController::class, 'index'])->name('memorial.index');
    Route::get('create', [MemorialController::class, 'create'])->name('memorial.create');
    Route::get('{id}', [MemorialController::class, 'show'])->name('memorial.show');
    Route::get('{id}/edit', [MemorialController::class, 'edit'])->name('memorial.edit');
    Route::post('/', [MemorialController::class, 'store'])->name('memorial.store');
    Route::put('{id}', [MemorialController::class, 'update'])->name('memorial.update');
    Route::delete('{id}', [MemorialController::class, 'destroy'])->name('memorial.destroy');
});

