<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Profesor_Propuesta;
use App\Models\Profesor;
use App\Models\Propuesta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlumnoController extends Controller
{
    //
    public function index()
    {
    $alumnos = Estudiante::withCount('propuestas')->get();

    return view('alumno.home', compact('alumnos'));
    }

    public function show($id)
    {
        $alumno = Estudiante::findOrFail($id);

        return view('alumnos.show', compact('alumnos'));
    }

    public function admin()
    {
        $alumnos = Estudiante::all();
        return view('admin.home', compact('alumnos'));
    }

    public function propuestas($rut)
    {
    $alumnos = Estudiante::find($rut);
    $propuestas = $alumnos->propuestas;
    $profesorPropuestas = Profesor_Propuesta::all();
    $profesores = Profesor::all();
    
    return view('alumno.propuestas', compact('alumnos','propuestas', 'profesorPropuestas', 'profesores'));
    }

    //    
    // public function vistaSubir($rut){

    //     $alumnos = Estudiante::find($rut);

    //     return view('alumno.subir', compact('rut', 'alumnos'));
    // }
    public function vistaSubir($rut)
{
    return view('alumno.subir', compact('rut'));
}


    
}

