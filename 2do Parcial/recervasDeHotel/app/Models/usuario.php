<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    protected $table='usuarios';
    protected $fillable=[
        'nombre',
        'email',
        'password',
        'telefono',
        'direccion',
        'tipo_Usuario'
    ];
}