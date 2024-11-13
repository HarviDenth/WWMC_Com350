<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;

    // Nombre de la tabla asociada
    protected $table = 'editoriales';

    // Campos rellenables (fillable)
    protected $fillable = ['nombre'];

    /**
     * Relación con el modelo Libro.
     * Una editorial puede tener varios libros.
     */
    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
}
