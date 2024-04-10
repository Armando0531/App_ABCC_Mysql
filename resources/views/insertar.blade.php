<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inserción de Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('index')

    <div class="container mt-5">
        <h2>Insertar Alumno</h2>
        <form action="{{ route('alumnos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Num_Control" class="form-label">Número de Control:</label>
                <input type="text" class="form-control @error('Num_Control') is-invalid @enderror" id="Num_Control" name="Num_Control" value="{{ old('Num_Control') }}">
                @error('Num_Control')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control @error('Nombre') is-invalid @enderror" id="Nombre" name="Nombre" value="{{ old('Nombre') }}">
                @error('Nombre')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Semestre" class="form-label">Semestre:</label>
                <input type="text" class="form-control @error('Semestre') is-invalid @enderror" id="Semestre" name="Semestre" value="{{ old('Semestre') }}">
                @error('Semestre')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Insertar Alumno</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
