<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    // Nombre de la tabla asociada
    protected $table = 'libros';

    // Campos rellenables (fillable)
    protected $fillable = [
        'titulo',
        'editorial_id',
        'edicion',
        'pais',
        'precio',
    ];

    /**
     * Relación con el modelo Editorial.
     * Un libro pertenece a una editorial.
     */
    public function editorial()
    {
        return $this->belongsTo(Editorial::class);
    }
}
