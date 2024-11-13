<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Editorial;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::with('editorial')->get(); // Cargar la relación con Editorial
        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $editoriales = Editorial::all();
        return view('libros.create', compact('editoriales'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'editorial_id' => 'required|exists:editoriales,id',
            'edicion' => 'required|integer|min:1|max:255',
            'pais' => 'required|string|max:50',
            'precio' => 'required|numeric|min:0',
        ]);

        Libro::create($request->all());
        return redirect()->route('libros.index')->with('success', 'Libro creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $libro = Libro::findOrFail($id);
        $editoriales = Editorial::all();
        return view('libros.edit', compact('libro', 'editoriales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'editorial_id' => 'required|exists:editoriales,id',
            'edicion' => 'required|integer|min:1|max:255',
            'pais' => 'required|string|max:50',
            'precio' => 'required|numeric|min:0',
        ]);

        $libro = Libro::findOrFail($id);
        $libro->update($request->all());
        return redirect()->route('libros.index')->with('success', 'Libro actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();
        return redirect()->route('libros.index')->with('success', 'Libro eliminado exitosamente.');
    }
}
