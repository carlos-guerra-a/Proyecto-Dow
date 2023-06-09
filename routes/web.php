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

Route::get('/profesor/{rut}/propuestas', [ProfesorController::class,'propuestas'])->name('profesor.propuestas');

// Agregar profe o alumno
Route::get('/admin/agregarAlumno', [AdminController::class, 'agregarAlumno'])->name('admin.agregarAlumno');
Route::get('/admin/agregarProfesor', [AdminController::class, 'agregarProfesor'])->name('admin.agregarProfesor');

Route::get('/profesor/{rut}/alumnos', [ProfesorController::class, 'alumnos'])->name('profesor.alumnos');

// Subir
Route::get('/alumno/subir', function(){return view('alumno.subir');})->name('alumno.subir');
Route::post('/alumno/subir', function (Illuminate\Http\Request $request) {
    // Procesar la subida del archivo PDF y guardar la propuesta

    $pdf = $request->file('pdf');
    $pdf->move(public_path('pdf'), $pdf->getClientOriginalName());

    // Código adicional para guardar la propuesta en la base de datos

    return redirect()->route('alumno.home')->with('success', 'Propuesta subida exitosamente.');
})->name('alumno.subirPropuesta');
