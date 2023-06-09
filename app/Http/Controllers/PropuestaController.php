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

       public function subirPropuesta(Request $request)
       {
           $archivo = $request->file('documento');
           $nombreArchivo = 'nombre_deseado.pdf'; // Reemplaza 'nombre_deseado' por el nombre que desees utilizar
   
           $rutaArchivo = $archivo->storeAs('carpeta_destino', $nombreArchivo, 'public');
   
           // Guardar el nombre del archivo en la tabla propuestas
           $propuesta = new Propuesta;
           $propuesta->nombre_documento = $nombreArchivo;
           // Resto de asignaciones de valores a los campos de la propuesta
           $propuesta->save();
   
           return redirect()->route('alumno.home')->with('success', 'Propuesta subida exitosamente.');
       }
   
}