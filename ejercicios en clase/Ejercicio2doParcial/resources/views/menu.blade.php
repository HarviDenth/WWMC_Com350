<!-- resources/views/menu.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Librería</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Bienvenido a la Gestión de Librería</h1>
    <nav>
        <ul>
            <li><a href="{{ route('libros.index') }}">Listar Libros</a></li>
            <li><a href="{{ route('libros.create') }}">Insertar Nuevo Libro</a></li>
        </ul>
    </nav>
</body>
</html>
