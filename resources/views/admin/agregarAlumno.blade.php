<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <!-- Agrega los enlaces CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://aula.usm.cl/portada/images/logo-usm_blanco.ba50c1e92c05ce59220ab09bd88a6d5b.svg" alt="Logo" class="d-inline-block align-text-top container-fluid">    
            </a>
            <div class="d-flex justify-content-center mb-4">

                <a href="{{ route('login') }}" class="btn btn-primary border">Volver</a>

             

            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Agregar Alumno</h1>
        <form>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" value="" >
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" value="" >
            </div>
            <div class="form-group">
                <label for="rut">RUT:</label>
                <input type="text" class="form-control" id="rut" value="" >
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" class="form-control" id="email" value="" >
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('admin.home') }}" class="btn btn-primary mr-2">Agregar</a>
                <a href="{{ route('login') }}" class="btn btn-secondary mr-2">Cancelar</a>
                
                {{-- <button type="button" class="btn btn-primary">Agregar</button> --}}
            </div>
        </form>
    </div>

    <!-- Agrega los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
