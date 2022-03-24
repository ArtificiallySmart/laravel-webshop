<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 5, 30),
            'thumbnail' => $this->faker->imageUrl(),
            'stock' => rand(10, 25)
        ];
    }
}
