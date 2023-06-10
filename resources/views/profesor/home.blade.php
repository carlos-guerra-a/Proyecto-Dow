@extends('templates.master')


@section('contenido-principal')
    <div class="container justify-content-center">
        <h1 class="text-center">Lista de profesores</h1>
        <div class="">
            <div class="list-group" id="profesores-list">  
                <div class="row">
                    <div class="col col-4 offset-4">
                        @foreach ($profesores as $profesor)
                            <a href="{{ route('profesor.alumnos', ['rut' => $profesor->rut]) }}" class="list-group-item d-flex justify-content-between align-items-center">
                    
                                <div>
                                    <span class="font-weight-bold">Nombre de profesor:   {{ $profesor->nombre }} {{ $profesor->apellido }}</span> 
                                </div>  
                            </a>
                        @endforeach

                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
