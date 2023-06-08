<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap-custom.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body style="background-color:white">

    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://aula.usm.cl/portada/images/logo-usm_blanco.ba50c1e92c05ce59220ab09bd88a6d5b.svg" alt="Logo" class="d-inline-block align-text-top container-fluid">
                
              </a>
        </div>
      </nav>
    
    <div class="container-fluid d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col d-flex flex-fluid justify-content-center ">
                <div class="card mt-5">
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


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>