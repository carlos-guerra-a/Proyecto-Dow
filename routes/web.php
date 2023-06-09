<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PropuestaController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\AdminController;

Route::get('/', [LogController::class, 'login'])->name('login');
Route::post('/', [LogController::class, 'usuario'])->name('login.post');

Route::get('/alumno', [AlumnoController::class, 'index'])->name('alumno.home');
Route::get('/alumno/{rut}/propuestas', [AlumnoController::class, 'propuestas'])->name('alumno.propuestas');

Route::get('/profesor', [LogController::class, 'homeProfesor'])->name('profesor.home');

Route::get('/home/profesor', [ProfesorController::class, 'verProfesor'])->name('profesor.home');
Route::get('/admin', [LogController::class, 'homeAdmin'])->name('admin.home');

Route::get('/propuestas/{id}', [PropuestaController::class, 'verPropuesta'])->name('propuestas.ver');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
Route::get('/admin/{rut}/propuestas', [AdminController::class, 'propuestas'])->name('admin.propuestas');
Route::get('/profesor/{rut}/alumnos', [ProfesorController::class, 'alumnos'])->name('profesor.alumnos');
Route::get('/profesor/{rut}/propuestas', [ProfesorController::class,'propuestas'])->name('profesor.propuestas');

// Agregar profe  alumno
Route::get('/admin/agregarAlumno', [AdminController::class, 'agregarAlumno'])->name('admin.agregarAlumno');
Route::post('/admin/guardarAlumno', [AdminController::class, 'store'])->name('admin.guardarAlumno'); 
Route::get('/admin/agregarProfesor', [AdminController::class, 'agregarProfesor'])->name('admin.agregarProfesor');
Route::post('/admin/guardarProfesor', [AdminController::class, 'storeProfesor'])->name('admin.guardarProfesor');



// Subir
Route::get('/alumno/{rut}/subir', [AlumnoController::class, 'vistaSubir'])->name('alumno.subir');

// Route::get('/alumno/{rut}/mensaje', [PropuestaController::class, 'subirPropuesta'])->name('archivo.cargado');
Route::get('/alumno/{rut}/mensaje', function ($rut) {return view('alumno.mensaje', compact('rut'));})->name('archivo.cargado');



//subir
Route::post('/alumno/subir/{rut}', [PropuestaController::class, 'subirPropuesta'])->name('alumno.subirPropuesta');
