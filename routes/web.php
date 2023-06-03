<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;

Route::get('/', [LogController::class, 'login'])->name('login');
Route::post('/', [LogController::class, 'usuario'])->name('login.post');
Route::get('/alumno', [LogController::class, 'homeAlumno'])->name('alumno.home');
Route::get('/profesor', [LogController::class, 'homeProfesor'])->name('profesor.home');
Route::get('/admin', [LogController::class, 'homeAdmin'])->name('admin.home');
