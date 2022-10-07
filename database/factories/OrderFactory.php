<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'total' => $this->faker->randomFloat(1, 10, 500),
            'description' => $this->faker->sentences(rand(2, 5), true),
            'user_id' => 1,
        ];
    }
}
