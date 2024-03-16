<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //$this->faker->slug()
        $activo = $this->faker->randomElement([true,false]);
        return [
            'alias' => $this->faker->sentence(),
            'comentario' =>$this->faker->text(300),
            'img_path'=>$this->faker->imageUrl(1280,720),
            'is_active' =>$activo,

        ];
    }
}
