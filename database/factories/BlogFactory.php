<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'slug' => fake()->text(),
            'thumbnail' => fake()->Image(),
            'description' => fake()->streetAddress(), // password
            'category' => fake()->company(),
            'preview' =>fake()->text(200),
        ];
    }
}
