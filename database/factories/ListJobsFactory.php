<?php

namespace Database\Factories;

use App\Models\ListJobs;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListJobsFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'job_description' => fake()->paragraph(),
            'salary' => fake()->randomFloat(2, 50000, 150000),
        ];
    }
    
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
