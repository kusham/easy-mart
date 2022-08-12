<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->title(),
            'slug' => fake()->slug(),
            'description' => fake()->paragraph(),
            'photo' => $this->faker->imageUrl('60', '60'),
            'status' => $this->faker->randomElement(['active', 'inactive']),

        ];
    }
}
