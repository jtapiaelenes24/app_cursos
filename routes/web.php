<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class)->name('home');

### GRUPO DE RUTAS ###
// Route::controller(CursoController::class)->group(function () {
//     // Usando la función name establecemos un nombre para la ruta
//     Route::get('cursos', 'index')->name('cursos.index');
//     Route::get('cursos/create', 'create')->name('cursos.create');
//     Route::get('cursos/{curso}', 'show')->name('cursos.show');
// });

// ### RUTA PARA PROCESAR FORMULARIO DE NUEVOS CURSOS ###
// Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

// ### RUTA PARA ACCEDER AL FORMULARIO DE ACTUALIZACIÓN ###
// Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

// ### RUTA PARA PROCESAR EL FORMULARIO DE ACTUALIZAR CURSOS ###
// Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

// ### RUTA PARA ELIMIAR REGISTROS ###
// Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');


// Creamos todas las rutas con una sola línea de código
Route::resource('cursos', CursoController::class);

### RUTA PARA ELIMIAR REGISTROS ###
// El 1r nosotros es el nombre de la ruta, el 2º es el nombre de la vista   
Route::view('nosotros', 'nosotros')->name('nosotros');
