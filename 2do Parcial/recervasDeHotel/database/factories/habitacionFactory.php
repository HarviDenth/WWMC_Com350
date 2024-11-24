<?php

namespace Database\Factories;

use App\Models\tipo_habitacion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\habitacion>
 */
class habitacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tipo=tipo_habitacion::inRandomOrder()->first();
        return [
            'numero_habitacion'=>fake()->randomNumber(3),
            'tipo_habitacion'=>$tipo->id,
            'precio_por_noche'=>fake()->randomNumber(3),
            'estado'=>fake()->randomElement(['activo', 'inactivo']),
            'descripcion' => fake()->sentence(),

        ];
    }
}