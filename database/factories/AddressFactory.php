<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'street' => $this->faker->streetName(),
            'house_number' => $this->faker->numberBetween(0, 500),
            'house_number_addition' => $this->faker->randomLetter(),
            'postal_code' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'country' => 'Nederland',
            'created_at' => now(),
        ];
    }
}
