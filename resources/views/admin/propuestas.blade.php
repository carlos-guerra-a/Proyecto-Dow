@extends('templates.master')


@section('contenido-principal')
    @php
        $estados = [1 => 'Esperando Revisión',2=>'Modificar Propuesta',3=>'Rechazado',4=>'Aceptado'];
    @endphp
    <div class="text-center mb-4">
        <h1>Propuestas de {{ $alumnos->nombre }} {{ $alumnos->apellido }}</h1>
    </div>
    <div class="accordion mb-4 " id="propuestas-accordion">
        <div class="container justify-content-center" id="propuestas-accordion">
            @foreach ($propuestas as $propuesta)
                <div class="card">
                    <div class="list-group-item d-flex">
                        <div class="row">
                            <div class="col col-4 offset-4 ">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-{{ $propuesta->id }}" aria-expanded="true" aria-controls="collapse-{{ $propuesta->id }}">
                                        ID de propuesta: {{ $propuesta->id }} | Estado: {{ $estados[$propuesta->estado] }}
                                    </button>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div id="collapse-{{ $propuesta->id }}" class="collapsing" aria-labelledby="heading-{{ $propuesta->id }}" data-parent="#propuestas-accordion">
                        <div class="card-body">
                            <div class="container">
                                {{-- <embed src="{{ asset('storage/' . $propuesta->documento) }}" width="100%" height="600px" type="application/pdf"> --}}
                                <embed src="{{ asset('pdf/file1.pdf') }}" width="100%" height="600px" type="application/pdf">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group">
                                <label for="opciones">Seleccione estado:</label>
                                <select class="form-control" id="opciones">
                                    <option value="1">Esperando Revisión</option>
                                    <option value="2">Modificar Propuesta</option>
                                    <option value="3">Rechazado</option>
                                    <option value="4">Aceptado</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('admin.home') }}" class="btn btn-primary mr-2">Modificar Estado</a>
                                <a href="{{ route('admin.home') }}" class="btn btn-secondary mr-2">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


