<?php

namespace App\Http\Controllers;
use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function verProfesor()
    {
        $profesores = Profesor::all();

        return view('profesor.home', ['profesores' => $profesores]);
    }
    

}
