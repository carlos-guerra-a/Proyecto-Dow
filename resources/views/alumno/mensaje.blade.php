@extends('templates.master')

@section('contenido-principal')
    <div class="container">
        <h1>Archivo cargado correctamente</h1>
        <p>El archivo se ha cargado correctamente.</p>

        <a href="{{ route('alumno.propuestas', ['rut' => $rut]) }}" class="btn btn-primary">Volver a las propuestas</a>
    </div>
@endsection
