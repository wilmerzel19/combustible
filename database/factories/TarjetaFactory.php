<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarjeta>
 */
class TarjetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'codigo'=> $this->faker->numberBetween(1,100),
            'tipo_combustible'=> $this->faker->randomElement(['Diesel','gasolina']),
        ];
    }
}
