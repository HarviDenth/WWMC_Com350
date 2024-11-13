<!-- resources/views/libros/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Insertar Nuevo Libro</h1>
    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <label>Título:</label>
        <input type="text" name="titulo" required>
        
        <label>Editorial:</label>
        <select name="editorial_id" required>
            @foreach($editoriales as $editorial)
                <option value="{{ $editorial->id }}">{{ $editorial->nombre }}</option>
            @endforeach
        </select>
        
        <label>Edición:</label>
        <input type="number" name="edicion" required>
        
        <label>País:</label>
        <input type="text" name="pais" required>
        
        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" required>
        
        <button type="submit">Guardar</button>
    </form>
@endsection
