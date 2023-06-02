<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return redirect('/profesor/propuesta');

    } elseif ($tipoUsuario === 'administrador') {
        return redirect('/administrador/propuesta');
    }
}


    public function home()
{
    return view('alumno.home');
}

}















