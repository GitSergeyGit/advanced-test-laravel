<?php

namespace Database\Factories;

use App\Models\Page;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $rand = $this->faker->randomElement([Product::class, Page::class]);
        return [
            'body' => $this->faker->sentences(rand(2, 5), true),
            'test_id' => $rand::factory(),
            'test_type' => $rand,
        ];
    }
}
