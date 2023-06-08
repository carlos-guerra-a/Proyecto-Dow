<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://aula.usm.cl/portada/images/logo-usm_blanco.ba50c1e92c05ce59220ab09bd88a6d5b.svg" alt="Logo" class="d-inline-block align-text-top container-fluid">    
            </a>
            <div class="d-flex justify-content-center mb-4">
                <a href="#" class="btn btn-primary border">Volver</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Lista de Alumnos</h1>
        <div class="list-group" id="alumnos-list">
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    <span class="font-weight-bold">Nombre de alumno:</span> Juan Pérez
                </div>
                <span class="font-weight-bold ml-auto">N° de propuestas:</span>
                <span class="badge badge-primary badge-pill">3</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    <span class="font-weight-bold">Nombre de alumno:</span> María Rodríguez
                </div>
                <span class="font-weight-bold ml-auto">N° de propuestas:</span>
                <span class="badge badge-primary badge-pill">5</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    <span class="font-weight-bold">Nombre de alumno:</span> Carlos Gómez
                </div>
                <span class="font-weight-bold ml-auto">N° de propuestas:</span>
                <span class="badge badge-primary badge-pill">2</span>
            </a>
        </div>

        <div class="mt-4">
            <button class="btn btn-primary me-2" onclick="toggleForm('alumno')">Agregar Alumno</button>
           
        </div>

        <!-- Formulario para agregar alumno -->
        <div id="alumno-form" style="display: none;">
            <h3>Agregar Alumno</h3>
            <form>
                <div class="mb-3">
                    <label for="rut" class="form-label">RUT:</label>
                    <input type="text" class="form-control" id="rut" name="rut" required>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido:</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                </div>
                <div class="mb-3">
                    <label for="mail" class="form-label">Mail:</label>
                    <input type="email" class="form-control" id="mail" name="mail" required>
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>

        <h1 class="mt-4">Lista de Profesores</h1>
        <div class="list-group" id="profesores-list">
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    <span class="font-weight-bold">Nombre de profesor:</span> Ana López
                </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    <span class="font-weight-bold">Nombre de profesor:</span> Pedro González
                </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    <span class="font-weight-bold">Nombre de profesor:</span> Laura Martínez
                </div>
            </a>
        </div>

        <div class="mt-4">
            <button class="btn btn-primary me-2">Agregar Profesor</button>
   
        </div>
    </div>

    <script>
        function toggleForm(formId) {
            const form = document.getElementById(`${formId}-form`);
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
