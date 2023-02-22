<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
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
          'service-img' => fake()->imageUrl(640, 400, 'cats'),
          'name' => fake()->name(),
          'title' => fake()->sentence($nbWords = 2, $variableNbWords = true),
          'description-sm' => fake()->sentence($nbWords = 8),
          'description-lg' => fake()->sentence($nbWords = 20),
          'location' => fake()->city(),
          'email' => fake()->unique()->safeEmail(),
          'email_verified_at' => now(),
        ];
    }
}
