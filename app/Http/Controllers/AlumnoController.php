<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
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

    public function propuestas($rut)
    {
    $alumnos = Estudiante::find($rut);
    $propuestas = $alumnos->propuestas;
    
    return view('alumno.propuestas', compact('alumnos','propuestas'));
    }
    
}
