<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\participant>
 */
class participantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "cni" => Str::random(15),
            // "nom" => Str::upper(Str::random(20)),
            "nom"=>$this->faker->name(),
            "email"=>$this->faker->email(),
            "tel"=>$this->faker->phoneNumber(),
            // "id_region"=>rand(1,20),
            "age"=>rand(21,100)
        ];
    }
}
