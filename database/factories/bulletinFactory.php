<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\bulletin>
 */
class bulletinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'couleur' => $this->faker->colorName(),
            'photo' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}