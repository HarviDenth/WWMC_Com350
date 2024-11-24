<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class habitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('habitacions')->insert([
            [
                
                'numero_habitacion'=>1,
                //'tipo_habitacion'=>'simple',
                'precio_por_noche'=>100,
                'estado'=>'libre',
                'descripcion'=>'habitaacion simple',
            ],
            [
                
                'numero_habitacion'=>2,
                //'tipo_habitacion'=>'simple',
                'precio_por_noche'=>100,
                'estado'=>'libre',
                'descripcion'=>'habitaacion simple',
            ],
            [
                
                'numero_habitacion'=>3,
                //'tipo_habitacion'=>'simple',
                'precio_por_noche'=>100,
                'estado'=>'libre',
                'descripcion'=>'habitaacion simple',
            ],
            [
                
                'numero_habitacion'=>4,
                //'tipo_habitacion'=>'simple',
                'precio_por_noche'=>100,
                'estado'=>'libre',
                'descripcion'=>'habitaacion simple',
            ],
            [
                
                'numero_habitacion'=>5,
               // 'tipo_habitacion'=>'simple',
                'precio_por_noche'=>100,
                'estado'=>'libre',
                'descripcion'=>'habitaacion simple',
            ],
            [
                
                'numero_habitacion'=>6,
               // 'tipo_habitacion'=>'simple',
                'precio_por_noche'=>100,
                'estado'=>'libre',
                'descripcion'=>'habitaacion simple',
            ],
            [
                
                'numero_habitacion'=>7,
               // 'tipo_habitacion'=>'simple',
                'precio_por_noche'=>100,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion simple',
            ],
            [
                
                'numero_habitacion'=>8,
               // 'tipo_habitacion'=>'simple',
                'precio_por_noche'=>100,
                'estado'=>'libre',
                'descripcion'=>'habitaacion simple',
            ],
            [
                
                'numero_habitacion'=>9,
              //  'tipo_habitacion'=>'simple',
                'precio_por_noche'=>100,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion simple',
            ],
            [
                
                'numero_habitacion'=>10,
              //  'tipo_habitacion'=>'simple',
                'precio_por_noche'=>100,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion simple',
            ],


            [
                
                'numero_habitacion'=>11,
              //  'tipo_habitacion'=>'doble',
                'precio_por_noche'=>150,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion doble',
            ], [
                
                'numero_habitacion'=>12,
              //  'tipo_habitacion'=>'doble',
                'precio_por_noche'=>150,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion doble',
            ], [
                
                'numero_habitacion'=>13,
             //   'tipo_habitacion'=>'doble',
                'precio_por_noche'=>150,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion doble',
            ], [
                
                'numero_habitacion'=>14,
             //   'tipo_habitacion'=>'doble',
                'precio_por_noche'=>150,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion doble',
            ], [
                
                'numero_habitacion'=>15,
              //  'tipo_habitacion'=>'doble',
                'precio_por_noche'=>150,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion doble',
            ],



            [
                
                'numero_habitacion'=>11,
              //  'tipo_habitacion'=>'triple',
                'precio_por_noche'=>200,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion triple',
            ], [
                
                'numero_habitacion'=>12,
              //  'tipo_habitacion'=>'triple',
                'precio_por_noche'=>200,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion triple',
            ], [
                
                'numero_habitacion'=>13,
              //  'tipo_habitacion'=>'triple',
                'precio_por_noche'=>200,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion triple',
            ], [
                
                'numero_habitacion'=>14,
              //  'tipo_habitacion'=>'triple',
                'precio_por_noche'=>200,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion triple',
            ], [
                
                'numero_habitacion'=>15,
             //   'tipo_habitacion'=>'triple',
                'precio_por_noche'=>200,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion triple',
            ],



            [
                
                'numero_habitacion'=>16,
              //  'tipo_habitacion'=>'matrimonial',
                'precio_por_noche'=>200,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion matrimonial',
            ], [
                
                'numero_habitacion'=>17,
             //   'tipo_habitacion'=>'matrimonial',
                'precio_por_noche'=>200,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion matrimonial',
            ], [
                
                'numero_habitacion'=>18,
             //   'tipo_habitacion'=>'matrimonial',
                'precio_por_noche'=>200,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion matrimonial',
            ], [
                
                'numero_habitacion'=>19,
             //   'tipo_habitacion'=>'matrimonial',
                'precio_por_noche'=>200,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion matrimonial',
            ], [
                
                'numero_habitacion'=>20,
              //  'tipo_habitacion'=>'matrimonial',
                'precio_por_noche'=>200,
                'estado'=>'ocupado',
                'descripcion'=>'habitaacion matrimonial',
            ],
        ]);
    
    }
}
