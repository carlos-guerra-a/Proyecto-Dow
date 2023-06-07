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
        <h1>Propuestas de {{ $alumnos->nombre }} {{ $alumnos->apellido }}</h1>
    </div>

    <div class="d-flex justify-content-center align-items-center">
    <div class="accordion" id="propuestas-accordion">
        @foreach ($propuestas as $propuesta)
            <div class="card">
                <div class="card-header" id="heading-{{ $propuesta->id }}">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-{{ $propuesta->id }}" aria-expanded="true" aria-controls="collapse-{{ $propuesta->id }}">
                            ID de propuesta: {{ $propuesta->id }} | Estado: {{ $propuesta->estado }}
                        </button>
                    </h2>
                </div>
                <div id="collapse-{{ $propuesta->id }}" class="collapsing" aria-labelledby="heading-{{ $propuesta->id }}" data-parent="#propuestas-accordion">
                    <div class="card-body">
                        <div class="container">
                            <h1>Propuesta {{ $propuesta->id }}</h1>
                            <embed src="{{ asset('storage/' . $propuesta->documento) }}" width="100%" height="600px" type="application/pdf">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('propuestas.ver', ['id' => $propuesta->id]) }}" class="btn btn-primary">Ver Propuesta</a>
                        <div class="form-group">
                            <label for="comentario-{{ $propuesta->id }}">Comentario:</label>
                            <textarea class="form-control" name="comentario" id="comentario-{{ $propuesta->id }}" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Comentar</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>