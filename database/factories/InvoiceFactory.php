<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_id' => Project::factory(),
            'invoice_number' => fake()->randomNumber(),
            'amount_gross' => fake()->randomFloat(2, 1, 50),
            'platform_fee' => 2,
            'amount_net' => fake()->randomFloat(2, 1, 40),
        ];
    }
}
