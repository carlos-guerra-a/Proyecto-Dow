<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap-custom.min.css')}}">

    <title>USM - Sistema de TSI</title>
</head>
<body class="bg-white" style="display: grid; grid-template-rows: auto 1fr auto; min-height: 100vh" >

    <!-- navbar -->
    <div class="container-fluid px-0 mx-0">
        <nav class="navbar bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('login') }}">
                    <img src="{{asset('images\logo-usm.png')}}"  class="d-inline-block align-text-top container-fluid">
                </a>
                <div class="d-flex justify-content-center mb-4">
                    <a href="{{ route('login') }}" class="btn btn-dark border text-white">Volver</a>
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
        <footer class="bg-light text-dark pt-2 pb-2 mx-0" style="padding: 1em 0; margin-top: auto">
            <div class="container text-center text-md-start">
                <div class="row text-center text-md-start">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-1 font-weight-bold text-primary">Alumnos</h6>
                        <hr class="mb-2">
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
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-2">
                        <h6 class="text-uppercase mb-1 font-weight-bold text-primary">Correos</h6>
                        <hr class="mb-2">
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
                    <hr class="mb-2">
                    
                </div>
            </div>
        </footer>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>