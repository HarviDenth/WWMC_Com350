<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                
                'nombre' => 'Rene Garcia',
                'email' => 'rene@gmail.com',
                'password' => bcrypt(123456),
                'telefono' => '74415356',
                'direccion' => 'calle humbolt #13',
                'tipo_Usuario' => 'administrador',
            ],
        ]);
    }
}