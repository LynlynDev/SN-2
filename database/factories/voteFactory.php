<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\vote>
 */
class voteFactory extends Factory
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
            'date' => $this->faker->date($format = 'Y-m-d'),
            'id_election' => 1,
            'idbulletin' => rand(1, 5),
            'id_participant' => rand(1, 200),
        ];
    }
}
