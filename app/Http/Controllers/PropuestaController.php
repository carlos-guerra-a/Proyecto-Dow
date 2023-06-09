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




    public function subirPropuesta(Request $request)
    {
        $documento = $request->file('documento');
        $nombre = $documento->getClientOriginalName();
        
        $contador = 1;
        while (Storage::exists('public/' . $nombre)) {
            $nombre =  $contador . '_' . $nombre;
            $contador++;
        }
    
        $path = $documento->storeAs('public', $nombre);
    
        dd("subido");
    
        return $path;
    }   



    // public function subirPropuesta(Request $request) 
    // {
    //     $path = $request->file('documento')->store('public');
        
        
        
    //     return dd("Subido");
    // }   

}





