<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('index')

    <div class="container mt-5">
        <h1>Listado de Alumnos</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="d-flex justify-content-end align-items-center">
            <input type="text" id="searchInput" class="form-control me-2" style="width: 200px;" placeholder="Buscar...">
            <a href="{{ route('alumnos.create') }}" class="btn btn-primary">Agregar Alumno</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Número de Control</th>
                    <th>Nombre</th>
                    <th>Semestre</th>
                    <th>Fecha de Creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->Num_Control }}</td>
                    <td>{{ $alumno->Nombre }}</td>
                    <td>{{ $alumno->Semestre }}</td>
                    <td>{{ $alumno->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('alumnos.show', $alumno->Num_Control) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('alumnos.edit', $alumno->Num_Control) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('alumnos.destroy', $alumno->Num_Control) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $alumnos->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Aquí el código JS para filtrar la tabla, similar al que ya tenías.
    </script>
</body>
</html>
