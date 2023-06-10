@extends('templates.master')


@section('contenido-principal')
    <div class="container justify-content-center">
        <h1 >Lista de profesores</h1>
        <div class="">
            <div class="list-group col" id="profesores-list">  
                @foreach ($profesores as $profesor)

                    <a href="{{ route('profesor.alumnos', ['rut' => $profesor->rut]) }}" class="list-group-item d-flex justify-content-between align-items-center">
                    
                    <div>
                        <span class="font-weight-bold">Nombre de profesor: {{ $profesor->nombre }} {{ $profesor->apellido }}</span> 
                    </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection