<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PropuestaController;
use App\Http\Controllers\ProfesorController;

Route::get('/', [LogController::class, 'login'])->name('login');
Route::post('/', [LogController::class, 'usuario'])->name('login.post');
Route::get('/alumno', [AlumnoController::class, 'index'])->name('alumno.home');
Route::get('/alumno/{rut}/propuestas', [AlumnoController::class, 'propuestas'])->name('alumno.propuestas');
Route::get('/profesor', [LogController::class, 'homeProfesor'])->name('profesor.home');
Route::get('/home/profesor', [ProfesorController::class, 'verProfesor'])->name('profesor.home');
Route::get('/admin', [LogController::class, 'homeAdmin'])->name('admin.home');
Route::get('/propuestas/{id}', [PropuestaController::class, 'verPropuesta'])->name('propuestas.ver');

