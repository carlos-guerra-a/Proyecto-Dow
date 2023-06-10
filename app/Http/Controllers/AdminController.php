<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Profesor;
use App\Models\Propuesta;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $alumnos = Estudiante::withCount('propuestas')->get();
        $profesores = Profesor::all();
        $propuestas = Propuesta::all();

        return view('admin.home', compact('alumnos', 'profesores', 'propuestas'));
    }

    public function propuestas($rut)
    {
    $alumnos = Estudiante::find($rut);
    $propuestas = $alumnos->propuestas;
    
    return view('admin.propuestas', compact('alumnos','propuestas'));
    }

    public function agregarAlumno(){
        return view('admin.agregarAlumno');
    }

    public function agregarProfesor(){
        return view('admin.agregarProfesor');

    }

    public function store(Request $request)
    {
        $estudiante = new Estudiante();
        $estudiante->rut = $request->rut;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;
        $estudiante->save();


    return redirect()->route('admin.home');
    }

    public function storeProfesor(Request $request)
    {
        $profesor = new Profesor();
        $profesor->rut = $request->rut;
        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        $profesor->save();


    return redirect()->route('admin.home');
    }


}
