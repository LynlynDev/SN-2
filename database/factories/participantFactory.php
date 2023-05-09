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
            "age"=>rand(21,100),
            "email"=>$this->faker->email(),
            "tel"=>$this->faker->phoneNumber(),   //faker permet le respect de l'agencement, de l'order des noms, emails
            "id_region"=>rand(1,20),
            'login' => Str::upper(str::random(10)),
            'pwd' => $this->faker->password()
           
        ];
    }
}
