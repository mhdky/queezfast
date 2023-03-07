<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => mt_rand(1,4),
            'github' => 'https://github.com/mhdky',
            'author' => fake()->name(),
            'date' => fake()->date(),
            'title' => fake()->sentence(4,7),
            'slug' => fake()->slug(),
            'excerpt' => fake()->paragraph(mt_rand(2,3))
        ];
    }
}
