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
            //
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraphs(5, true),
            'author' => $this->faker->name,
            'image_path' => $this->faker->imageUrl(),
            'slug' => $this->faker->slug,
            'minutes_to_read' => $this->faker->numberBetween(1, 10)
        ];
    }
}
