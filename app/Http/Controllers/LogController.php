<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class LogController extends Controller
{
    public function login() {

        return view('login.login');
    }


    public function usuario(Request $request)
{
    // Obtener el tipo de usuario seleccionado
    $tipoUsuario = $request->input('usuario');

    // Redireccionar según el tipo de usuario
    if ($tipoUsuario === 'alumno') {
        return redirect()->route('alumno.home');

    } elseif ($tipoUsuario === 'profesor') {
        return redirect()->route('profesor.home');

    } elseif ($tipoUsuario === 'administrador') {
        return redirect()->route('admin.home');
    }
}


    public function homeAlumno()
{
    return view('alumno.home');
}

    public function homeProfesor()
    {
        $alumnos = Estudiante::all();
        return view('home')->with('alumnos', $alumnos);
    }

    public function homeAdmin()
    {
        return view('admin.home');
    }




}















