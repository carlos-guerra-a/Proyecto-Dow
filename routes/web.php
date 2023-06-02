<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;

Route::get('/', [LogController::class, 'login'])->name('login');
Route::post('/', [LogController::class, 'usuario'])->name('login.post');
Route::get('/alumno', [LogController::class, 'home'])->name('alumno.home');

Route::get('/profesor/propuesta', [ProfesorController::class, 'propuesta'])->name('profesor.propuesta');
Route::get('/administrador/propuesta', [AdministradorController::class, 'propuesta'])->name('administrador.propuesta');
