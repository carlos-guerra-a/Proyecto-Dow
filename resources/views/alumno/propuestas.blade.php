<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        <h1>Propuestas de {{ $alumnos->nombre }}</h1>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        @foreach ($propuestas as $propuesta)
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    ID de propuesta: {{ $propuesta->id }} | Estado: {{ $propuesta->estado }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">Propuesta {{ $propuesta->id }}</h5>
                    <p class="card-text">{{ $propuesta->documento }}</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Comentar</a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>