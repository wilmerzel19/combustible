<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonaUnidad>
 */
class PersonaUnidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fecha'=> $this->faker->date,
            'km'=> $this->faker->numberBetween(1,1000),
            'recorrido'=>$this->faker->word,
            'litros'=>$this->faker->word,
            'persona_id'=>$this->faker->numberBetween(1,1000),
            'unidad_id'=>$this->faker->numberBetween(1,1000),
        ];
    }
}
