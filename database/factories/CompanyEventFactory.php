<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyEvent>
 */
class CompanyEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       $start = $this->faker->dateTimeBetween('-1 month', '+3 months'); // random start date
        $end = (clone $start)->modify('+'.rand(1, 5).' hours'); // end time after start

        return [
            'title' => $this->faker->sentence(6, true),
            'description' => $this->faker->paragraph(3, true),
            'location' => $this->faker->city() . ', ' . $this->faker->country(),
            'start_time' => $start,
            'end_time' => $end,
            'banner_image' => $this->faker->imageUrl(800, 400, 'events', true),
            'organizer_id' => 1, // fallback to 1 if no users
            'capacity' => $this->faker->numberBetween(10,50),
            'price' => $this->faker->randomElement(['Free','100','60','40','5','2']),
            'status' => $this->faker->boolean(),
        ];
    
    }
}
    