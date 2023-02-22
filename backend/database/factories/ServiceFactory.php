<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'title' => fake()->sentence($nbWords = 2, $variableNbWords = true)  ,
            'description-sm' => fake()->sentence($nbWords = 12, $variableNbWords = true),
            'description-lg' => fake()->sentence($nbWords = 40, $variableNbWords = true),
            'location' => fake()->city(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
