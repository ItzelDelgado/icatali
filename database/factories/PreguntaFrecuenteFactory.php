<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PreguntaFrecuente>
 */
class PreguntaFrecuenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $activo = $this->faker->randomElement([true,false]);
        return [
            'pregunta' => $this->faker->sentence(),
            'respuesta' =>$this->faker->text(300),
            'is_active' =>$activo,
        ];
    }
}
