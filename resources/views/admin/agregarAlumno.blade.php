@extends('templates.master')

@section('contenido-principal')
<div class="container mt-4">
    <h1>Agregar Alumno</h1>
    
    <form action="{{ route('admin.guardarAlumno') }}" method="POST"> 
        @csrf 
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="" > 
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="" >
        </div>
        <div class="form-group">
            <label for="rut">RUT:</label>
            <input type="text" class="form-control" id="rut" name="rut" value="" >
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" value="" >
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Agregar</button> 
            <a href="{{ route('admin.home') }}" class="btn btn-secondary mr-2">Cancelar</a>
        </div>
    </form>
</div>
@endsection
