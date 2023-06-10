@extends('templates.master')


@section('contenido-principal')
@php
$estados = [1 => 'Esperando Revisión',2=>'Modificar Propuesta',3=>'Rechazado',4=>'Aceptado'];
@endphp

    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://aula.usm.cl/portada/images/logo-usm_blanco.ba50c1e92c05ce59220ab09bd88a6d5b.svg" alt="Logo" class="d-inline-block align-text-top container-fluid">     
            </a>
            <div class="d-flex justify-content-center mb-4">
                <a href="{{ route('alumno.home') }}" class="btn btn-primary border">Volver</a>
            </div>
        </div>
    </nav>

    <div class="text-center mb-4">
        <h1>Propuestas de {{ $alumnos->nombre }} {{ $alumnos->apellido }}</h1>
    </div>

        <div class="accordion" id="propuestas-accordion">
            @foreach ($propuestas as $propuesta)
                <div class="card">
                    <div class="list-group-item d-flex">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-{{ $propuesta->id }}" aria-expanded="true" aria-controls="collapse-{{ $propuesta->id }}">
                                ID de propuesta: {{ $propuesta->id }} | Estado: {{ $estados[$propuesta->estado] }}
                            </button>
                        </h2>

                    </div>
                    <div id="collapse-{{ $propuesta->id }}" class="collapsing" aria-labelledby="heading-{{ $propuesta->id }}" data-parent="#propuestas-accordion">
                        <div class="card-body">
                            <div class="container">
                                <embed src="{{ asset('pdf/file1.pdf') }}" width="100%" height="600px" type="application/pdf">                            </div>
                        </div>
                        
                     </div>
                </div>
            @endforeach
            <div>
                <div class="row">
                    <div class="col mx-4">
                        <a href="{{ route('alumno.subir', ['rut' => $alumnos->rut]) }}" class="btn btn-primary ml-auto">Agregar Propuesta</a>

            </div>
        </div>

    </div>
    

</body>
</html>