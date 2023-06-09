<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Propuesta</title>
</head>
<body>
    <h1>Subir Propuesta</h1>

    <form action="{{ route('alumno.subirPropuesta') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div>
            <label for="pdf">Seleccione el archivo PDF:</label>
            <input type="file" name="pdf" id="pdf">
        </div>

        <button type="submit">Subir Propuesta</button>
    </form>
</body>
</html>
