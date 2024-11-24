<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class habitacion extends Model
{
    use HasFactory;
    protected $table='habitacion';
    protected $fillable=[
        'numero_habitacion',
        'tipo_habitacion',
        'precio_por_noche',
        'estado',
        'descripcion',
    ];
    public function tipo_habitacionM(){
        return $this->belongsTo(tipo_habitacion::class, 'tipo_habitacion');
    }
}