<?php

namespace Database\Factories;

use App\Models\Costumer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'costumer_id' => Costumer::factory(),
            'name' => fake()->word(),
            'status' => 'pending',
            'deadline' => fake()->dateTime(),
            'budget_amount' => fake()->randomFloat(2, 1, 50),
            'repository_url' => fake()->url(),
        ];
    }
}
