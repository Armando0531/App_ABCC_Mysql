<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('index')

    <div class="container mt-5">
        <h2>Editar Alumno</h2>
        <form action="{{ route('alumnos.update', $alumno->Num_Control) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="Num_Control" class="form-label">Número de Control:</label>
                <input type="text" class="form-control" id="Num_Control" name="Num_Control" value="{{ $alumno->Num_Control }}">
            </div>

            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ $alumno->Nombre }}">
            </div>

            <div class="mb-3">
                <label for="Semestre" class="form-label">Semestre:</label>
                <input type="text" class="form-control" id="Semestre" name="Semestre" value="{{ $alumno->Semestre }}">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Alumno</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
