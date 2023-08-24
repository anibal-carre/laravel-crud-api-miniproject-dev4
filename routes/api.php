<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MatriculaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('docentes', DocenteController::class);
Route::resource('alumnos', AlumnoController::class);
Route::resource('cursos', CursoController::class);

Route::prefix('matriculas')->group(function () {
    // Matricular un alumno en un curso específico
    Route::post('alumnos/{alumno}/curso/{curso}', [MatriculaController::class, 'matricularAlumno']);
});

Route::prefix('asistencias')->group(function () {
    Route::post('registrar', [AsistenciaController::class, 'registrarAsistencia']);
    // Agregar otras rutas relacionadas con asistencias si es necesario
});
