<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class);

### GRUPO DE RUTAS ###
Route::controller(CursoController::class)->group(function () {
    // Usando la función name establecemos un nombre para la ruta
    Route::get('cursos', 'index')->name('cursos.index');
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::get('cursos/{curso}', 'show')->name('cursos.show');
});

### RUTA PARA PROCESAR FORMULARIO DE NUEVOS CURSOS ###
Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

### RUTA PARA ACCEDER AL FORMULARIO DE ACTUALIZACIÓN ###
Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

### RUTA PARA PROCESAR EL FORMULARIO DE ACTUALIZAR CURSOS ###
Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
