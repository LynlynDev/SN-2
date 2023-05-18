<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\abonne>
 */
class abonneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom"=>$this->faker->name(),
            "prenom"=>$this->faker->name(),
            "age"=>rand(21, 80),
            // "profession"=>$this->faker->name(),
            "rue"=>$this->faker->state(),
            "codePostal"=>$this->faker->state(),
            "ville"=>$this->faker->state(),
            "pays"=>$this->faker->state(),
            "tel"=>$this->faker->phoneNumber(),  
            "email"=>$this->faker->email(),
        ];
    }
}
