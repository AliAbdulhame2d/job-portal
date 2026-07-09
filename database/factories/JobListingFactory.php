<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobListing>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'description' => fake()->paragraph(3, true),
            'salary' => fake()->randomFloat(2, 30000, 120000),
            'type' => fake()->randomElement(['Full Time', 'Part Time', 'Remote', 'Hybrid', 'Internship']),
            'is_active' => fake()->boolean(90),
            'company_id' => null,
        ];
    }
}
