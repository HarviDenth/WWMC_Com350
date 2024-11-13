<!-- resources/views/libros/index.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Libros</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Listado de Libros</h1>
    <a href="{{ route('menu') }}">Volver al Menú</a>
    <a href="{{ route('libros.create') }}" class="btn btn-primary">Insertar Nuevo Libro</a>
    
    @if ($libros->isEmpty())
        <p>No hay libros disponibles.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Editorial</th>
                    <th>Edición</th>
                    <th>País</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    <tr>
                        <td>{{ $libro->id }}</td>
                        <td>{{ $libro->titulo }}</td>
                        <td>{{ $libro->editorial->nombre }}</td>
                        <td>{{ $libro->edicion }}</td>
                        <td>{{ $libro->pais }}</td>
                        <td>{{ number_format($libro->precio, 2) }}</td>
                        <td>
                            <a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Estás seguro de eliminar este libro?')" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
