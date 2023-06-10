@extends('templates.master')


@section('contenido-principal')
<div class="container mt-4  ">
    <div class="row align-items-stretch">
        <div class="col-12 col-lg-7">
            <h1 class="text-center">Alumnos</h1>
            <div class="list-group" id="alumnos-list">
                @foreach ($alumnos as $alumno)
                    <a href="{{ route('admin.propuestas', ['rut' => $alumno->rut]) }}" class="list-group-item d-flex justify-content-between align-items-center">        
                        <div>
                            <span class="font-weight-bold">Nombre de alumno:</span> {{ $alumno->nombre }} {{ $alumno->apellido }}
                        </div>
                        <span class="font-weight-bold ml-auto">N° de propuestas:  </span>
                        <span class="badge badge-primary badge-pill bg-dark">{{ $alumno->propuestas_count }}</span>         
                    </a>
                @endforeach
                <a href="{{route ('admin.agregarAlumno')}}" class="btn btn-primary">Agregar alumnos</a>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <h1 class="text-center">Profesores</h1>
            <div class="list-group mb-4" id="profesores-list">  
                @foreach ($profesores as $profesor)
                    <a href="" class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <span class="font-weight-bold">Nombre de profesor:</span> {{ $profesor->nombre }} {{ $profesor->apellido }}
                        </div>
                @endforeach
                    <a href="{{route ('admin.agregarProfesor')}}" class="btn btn-primary">Agregar Profesores</a>
            </div>
        </div>
    </div>
</div> 
@endsection