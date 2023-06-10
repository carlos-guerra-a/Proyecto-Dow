@extends('templates.master')


@section('contenido-principal')
<div class="container mt-4">
    <h1>Agregar Profesor</h1>
    <form method="POST" action="{{ route('admin.guardarProfesor') }}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="">
        </div>
        <div class="form-group">
            <label for="rut">RUT:</label>
            <input type="text" class="form-control" id="rut" name="rut" value="">
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mr-2">Agregar</button>
            <a href="{{ route('login') }}" class="btn btn-secondary mr-2">Cancelar</a>
        </div>
    </form>
</div>
@endsection
   
   
