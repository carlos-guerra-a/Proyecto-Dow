<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:lightsteelblue">
    
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col d-flex flex-fluid justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bienvenido</h5>
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label">Cuenta USM</label>
                                <input type="email" class="form-control" id="email" placeholder="Ingrese su cuenta USM">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Clave</label>
                                <input type="password" class="form-control" id="password" placeholder="Ingrese su clave">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Rol</label>
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
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>