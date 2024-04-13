<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Detalles del Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('index')
    <div class="container mt-5">
        <h1>Detalles del Alumno</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $alumno->Nombre }}</h5>
                <p class="card-text">
                    <strong>Número de Control:</strong> {{ $alumno->Num_Control }}<br>
                    <strong>Semestre:</strong> {{ $alumno->Semestre }}<br>
                    <strong>Fecha de Registro:</strong> {{ $alumno->created_at->toFormattedDateString() }}
                </p>
                <a href="{{ route('alumnos.index') }}" class="btn btn-primary">Volver al Listado</a>
            </div>
        </div>
    </div>
</body>
</html>
