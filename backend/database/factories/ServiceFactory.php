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
          'serviceImg' => fake()->imageUrl(640, 400, 'cats'),
          'name' => fake()->name(),
          'title' => fake()->sentence($nbWords = 2, $variableNbWords = true),
          'descriptionSm' => fake()->sentence($nbWords = 8),
          'descriptionLg' => fake()->sentence($nbWords = 20),
          'location' => fake()->city(),
          'email' => fake()->unique()->safeEmail(),
          'email_verified_at' => now(),
        ];
    }
}
