@extends('templates.master')


@section('contenido-principal')
@php
$estados = [1 => 'Esperando Revisión',2=>'Modificar Propuesta',3=>'Rechazado',4=>'Aceptado'];
@endphp

<div class="text-center mb-4">
<h1>Propuestas de {{ $alumnos->nombre }} {{ $alumnos->apellido }}</h1>
</div>

<div class=" container accordion " id="propuestas-accordion">
    @foreach ($propuestas as $propuesta)
        <div class="card">
            <div class="list-group-item d-flex">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-{{ $propuesta->id }}" aria-expanded="true" aria-controls="collapse-{{ $propuesta->id }}">
                        ID de propuesta: {{ $propuesta->id }} | Estado: {{ $estados[$propuesta->estado] }}
                    </button>
                </h2>
                <hr class="mb-4">
            </div>
            <div id="collapse-{{ $propuesta->id }}" class="collapsing" aria-labelledby="heading-{{ $propuesta->id }}" data-parent="#propuestas-accordion">
                <div class="card-body">
                    <div class="container">
                        <embed src="{{ asset('pdf/file1.pdf') }}" width="100%" height="600px" type="application/pdf">                            </div>
                </div>
                
             </div>
        </div>
    @endforeach
    <div class="container justify-content-center pt-5">
        <div class="row">
            <div class="col mx-4">
                <a href="{{ route('alumno.subir', ['rut' => $alumnos->rut]) }}" class="btn btn-primary ml-auto">Agregar Propuesta</a>

            </div>
        </div>

    </div>
    

<<<<<<< HEAD
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
                                <embed src="{{ asset('pdf/file1.pdf') }}" width="100%" height="600px" type="application/pdf">                  </div>
                         </div>
                         <div class="container">
                         @foreach ($profesorPropuestas as $profesorPropuesta)
                            @if($propuesta->id == $profesorPropuesta->propuesta_id)
                                {{ $profesorPropuesta->comentario }}
                            @endif

                        @endforeach
                        
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
=======
@endsection
>>>>>>> 1995a105a7100042d5c6977b3e4bd0814aa93c96
