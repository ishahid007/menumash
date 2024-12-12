<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->unique()->name,
            'price' => $this->faker->randomFloat(2, 0, 100),
            'type' => $this->faker->randomElement(['food', 'drink', 'dessert', 'other']),
        ];
    }
}
