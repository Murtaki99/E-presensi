<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Local>
 */
class LocalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'class' => $this->faker->randomElement(['1', '2', '3', '4','5','6']),
            'local' => $this->faker->randomElement(['A', 'B', 'C', 'D'])
        ];
    }
}
