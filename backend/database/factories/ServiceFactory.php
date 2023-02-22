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
          'name' => fake()->name(),
          'title' => fake()->text(),
          'description-sm' => fake()->text(),
          'description-lg' => fake()->text(),
          'location' => fake()->city(),
          'email' => fake()->unique()->safeEmail(),
          'email_verified_at' => now(),
        ];
    }
}
