
    <div class="container-fluid d-flex flex-column justify-content-center">
        <h1 class="text-center">Subir Propuesta</h1>

        <form action="{{ route('alumno.subirPropuesta', ['rut' => $rut]) }}" method="POST" enctype="multipart/form-data" class="mt-4">

            @csrf

            <div class="form-group">
                <label for="pdf">Seleccione el archivo PDF:</label>
                <input type="file" name="documento" id="pdf" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-primary">Subir Propuesta</button>
        </form>
    </div>

