<?php

namespace Database\Factories;

// database/factories/LibroFactory.php

use App\Models\Libro;
use App\Models\Editorial;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    protected $model = Libro::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence,
            'editorial_id' => Editorial::all()->random()->id,
            'edicion' => $this->faker->numberBetween(1, 10),
            'pais' => $this->faker->country,
            'precio' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
