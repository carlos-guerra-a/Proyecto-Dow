<?php

namespace App\Http\Controllers;
use App\Models\Propuesta;
use Illuminate\Http\Request;

class PropuestaController extends Controller
{
    public function verPropuesta($id)
    {
        $propuesta = Propuesta::find($id);
        return view('propuesta.home', compact('propuesta'));
    }


}
