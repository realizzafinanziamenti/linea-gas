<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->withoutTwoFactor(),
            'customer_type' => fake()->randomElement(['privato', 'azienda']),
            'company_name' => fake()->company(),
            'vat_number' => fake()->vat(),
            'civic_number' => fake()->buildingNumber(),
            'stair' => fake()->optional()->bothify('Stair ?##'),
            'floor' => fake()->optional()->bothify('Floor ##'),
            'interior' => fake()->optional()->bothify('Interior ##'),
            'locality' => fake()->optional()->citySuffix(),
            'zone' => fake()->optional()->word(),
        ];
    }
}
