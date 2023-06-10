<?php

namespace App\Http\Controllers;
use App\Models\Propuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;


class PropuestaController extends Controller
{
    public function verPropuesta($id){
    $propuesta = Propuesta::find($id);
    return view('propuesta.home', ['propuesta' => $propuesta]);
    }



    public function subirPropuesta(Request $request, $rut)
    {
        $documento = $request->file('documento');
        $nombre = $documento->getClientOriginalName();
        
        $contador = 1;
        $auxiliar = $nombre;
        while (Storage::exists('public/' . $auxiliar)) {
            $auxiliar = $nombre;
            $auxiliar = $contador.$auxiliar;
            $nombre = $contador . $nombre;
            $contador++;
        }

        $nombre = $auxiliar;
        
        $path = $documento->storeAs('public', $nombre);



        $propuesta = new Propuesta();
        $propuesta->fecha = now(); 
        $propuesta->documento = $nombre;
        $propuesta->estado = 1; 
        $propuesta->estudiante_rut = $rut;
        $propuesta->save();

        
        return redirect()->route('archivo.cargado', ['rut' => $rut]);

        ;
}
    
    
}





