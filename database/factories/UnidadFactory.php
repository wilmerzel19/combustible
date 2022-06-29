<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unidad>
 */
class UnidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'placa'=> $this->faker->word,
            'tipo_vehiculo'=> $this->faker->randomElement(['toyota','mahindra']),
            'tarjeta_id'=> $this->faker->numberBetween(1,1000),
        ];
    }
}
