<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap-custom.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('resources/css/app.css')}}">
    
    <title>USM - Sistema de TSI</title>
</head>
<body style="background-color:white">

    <!-- navbar -->
    <div class="container-fluid px-0 mx-0">
        <nav class="navbar bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('images\logo-usm.png')}}"  class="d-inline-block align-text-top container-fluid">
                </a>
                <div class="d-flex justify-content-center mb-4">
                    <a href="{{ route('login') }}" class="btn btn-primary border">Volver</a>
                </div>
            </div>
        </nav>
    </div>
    
    <!-- contenido principal -->
    <div class="container-fluid d-flex flex-column justify-content-center">
        @yield('contenido-principal')
    </div>
    
    <!-- footer -->
    <div>
        <footer class="bg-light tex-dark pt-5 pb-4 mx-0" style="position:absolute; bottom:0; width: 100%">
            <div class="container text-center text-md-start">
                <div class="row text-center text-md-start">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Alumnos</h5>
                        <hr class="mb-4">
                        <p>
                            Joaquín Vergara 
                        </p>
                        <p>
                            Carlos Guerra
                        </p>
                        <p>
                            Ian Dodman
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Correos</h5>
                        <hr class="mb-4">
                        <p>
                            <a href="#" class="text-dark">joaquin.vergarae@usm.cl</a>
                        </p>
                        <p>
                            <a href="#" class="text-dark">carlos.guerraa@usm.cl</a>
                        </p>
                        <p>
                            <a href="#" class="text-dark">ian.dodman@usm.cl</a>
                        </p>
                    </div>
                    <hr class="mb-4">
                    <div class="text-center">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="text-dark"><i class=""></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>