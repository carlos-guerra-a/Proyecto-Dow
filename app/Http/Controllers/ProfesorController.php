<?php

namespace App\Http\Controllers;
use App\Models\Profesor;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function verProfesor()
    {
        $profesores = Profesor::all();

        return view('profesor.home', compact('profesores'));
    }
    
    public function propuestas($rut)
    {
        $alumnos = Estudiante::find($rut);
        $propuestas = $alumnos->propuestas;
    
        return view('profesor.propuestas', compact('alumnos','propuestas'));
    }

        public function alumnos()
    {
        //$alumnos = Estudiante::all();
        $alumnos = Estudiante::withCount('propuestas')->get();
        
        return view('profesor.alumnos', compact('alumnos'));
    }

}
