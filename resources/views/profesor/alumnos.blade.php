@extends('templates.master')


@section('contenido-principal')
    <div class="container-fluid d-flex flex-column justify-content-center">
    <h1 class="text-center">Lista de Alumnos</h1>
    <div class="list-group" id="alumnos-list">
        <div class="row">
            <div class="col col-4 offset-4">
                @foreach ($alumnos as $alumno)
                    <a href="{{ route('profesor.propuestas', ['rut' => $alumno->rut]) }}" class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <span class="font-weight-bold">Nombre de alumno:</span> {{ $alumno->nombre }} {{ $alumno->apellido }}
                
                        </div>
                        <span class="font-weight-bold ml-auto ">N° de propuestas:</span>
                        <span class="badge badge-primary badge-pill bg-dark">{{ $alumno->propuestas_count }}</span>
                    </a>
                @endforeach
            </div>
        </div>
        
        
        </div>
    </div>
@endsection