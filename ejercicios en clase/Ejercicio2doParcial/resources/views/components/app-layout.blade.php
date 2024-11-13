<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <header class="bg-blue-600 p-4 text-white">
        <nav class="container mx-auto flex justify-between">
            <a href="{{ url('/') }}" class="text-xl font-bold">Librería</a>
            <div>
                <a href="{{ route('libros.index') }}" class="mr-4">Libros</a>
                <a href="{{ route('libros.create') }}" class="mr-4">Agregar Libro</a>
            </div>
        </nav>
    </header>

    <div class="container mx-auto py-6">
        @yield('content')
    </div>

    <footer class="bg-blue-600 p-4 text-white text-center">
        <p>&copy; {{ date('Y') }} Librería</p>
    </footer>
</body>
</html>
