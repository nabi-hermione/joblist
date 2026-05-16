<?php

namespace Database\Factories;

use App\Models\ListJobs;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends Factory<ListJobs>
 */
class ListJobsFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'job_description' => fake()->paragraph(),
            'salary' => fake()->randomFloat(2, 50000, 150000),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
