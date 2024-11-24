<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class tipo_habitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_habitacions')->insert([
            [
                'id' => 1,
                'nombre' => 'simple',
                'descripcion' => 'Habitacion con cama de 1 plaza',
                'precio' => 100.00,
               
            ],
            [
                'id' => 2,
                'nombre' => 'doble',
                'descripcion' => 'habitacion con 2 camas de 1 1/2 plaza',
                'precio' => 150.00,
            ],
            [
                'id' => 3,
                'nombre' => 'triple',
                'descripcion' => 'tres camas con tv',
                'precio' => 200.00,
            ],
            [
                'id' => 4,
                'nombre' => 'matrimonio',
                'descripcion' => 'cama de 2 plazas con baño privado',
                'precio' => 200.00,
            ],
        ]);
    }
}
