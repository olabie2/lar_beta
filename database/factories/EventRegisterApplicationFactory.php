<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CompanyEvent;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventRegisterApplication>
 */
class EventRegisterApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       return [
            'full_name'        => $this->faker->name(),
            'email'            => $this->faker->unique()->safeEmail(),
            'phone_number'     => $this->faker->optional()->phoneNumber(),
            // Assign to an existing event randomly
            'company_event_id' => CompanyEvent::inRandomOrder()->first()?->id 
                                  ?? CompanyEvent::factory(), // fallback if no events
        ];
    }
}
