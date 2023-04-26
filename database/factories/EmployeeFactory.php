<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'active' => 1,
            'remarks' => fake()->text($maxNbChars = 200),
            'position_id' => fake()->numberBetween($min = 1, $max = 7),
            'department_id' => fake()->numberBetween($min = 1, $max = 7),
            'created_by' => fake()->numberBetween($min = 1, $max = 20),
            'updated_by' => fake()->numberBetween($min = 1, $max = 20),
        ];
    }
}
