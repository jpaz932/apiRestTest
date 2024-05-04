<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'genre' => $this->faker->randomElement(['Action', 'Comedy', 'Drama', 'Horror', 'Science Fiction']),
            'release_date' => $this->faker->date(),
            'rating' => $this->faker->randomFloat(1, 0, 10),
            'duration' => $this->faker->numberBetween(60, 180),
            'is_featured' => $this->faker->boolean(30),
            'price' => $this->faker->randomFloat(2, 5, 100),
            'director' => $this->faker->name,
        ];
    }
}
