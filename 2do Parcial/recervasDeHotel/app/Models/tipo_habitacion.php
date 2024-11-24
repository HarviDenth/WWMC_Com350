<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_habitacion extends Model
{
    use HasFactory;
    protected $table='tipo_habitacion';
    protected $fillable=[
        'nombre',
        'descripcion',
        'precio',
    ];
    public function habitacionsM()
    {
        return $this->hasMany(habitacion::class, 'tipo_habitacion');
    }
}