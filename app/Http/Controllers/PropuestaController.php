<?php

namespace App\Http\Controllers;
use App\Models\Propuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PropuestaController extends Controller
{
    public function verPropuesta($id)
    {
        $propuesta = Propuesta::find($id);
        return view('propuesta.home', compact('propuesta'));

       }




    public function subirPropuesta(Request $request, $rut)
    {
        $documento = $request->file('documento');
        $nombre = $documento->getClientOriginalName();
        
        $contador = 1;
        $auxiliar = $nombre;
        while (Storage::exists('public/' . $nombre)) {
            $auxiliar = $nombre;
            $contador . $nombre;
            $contador++;
        }
        
        $path = $documento->storeAs('public', $nombre);


        // Crear una nueva instancia de Propuesta
        $propuesta = new Propuesta();
        $propuesta->fecha = now(); // Obtener la fecha actual
        $propuesta->documento = $nombre;
        $propuesta->estado = 1; // Establecer el estado deseado
        $propuesta->estudiante_rut = $rut;
        $propuesta->save();

    dd("subido");

    return $path;
}
    
    
}





