@extends('templates.master')


@section('contenido-principal')
    <div class="container-fluid d-flex flex-column justify-content-center">
        <div class="row g-0">
            <div class="col d-flex flex-fluid justify-content-center">
                <div class="card mt-0">
                    <div class="card-body">
                        <h5 class="card-title">Bienvenido</h5>
                        <form method="POST" action="{{ route('login.post') }}">
                            @csrf
                            {{-- <div class="mb-3">
                                <label for="email" class="form-label">Cuenta USM</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su cuenta USM">

                                
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Clave</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su clave">

                            </div> --}}
                            <div class="mb-3">
                                <label class="form-label">Seleccione su perfil:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="usuario" id="alumno" value="alumno" checked>
                                    <label class="form-check-label" for="alumno">
                                        Alumno
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="usuario" id="profesor" value="profesor">
                                    <label class="form-check-label" for="profesor">
                                        Profesor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="usuario" id="administrador" value="administrador">
                                    <label class="form-check-label" for="administrador">
                                        Administrador
                                    </label>
                                </div>
                            </div>
                            <div class="row mx-3 justify-content-center"><button type="submit" class="btn btn-primary">Ingresar</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection