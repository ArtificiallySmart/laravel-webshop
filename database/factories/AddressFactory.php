<?php

namespace Database\Factories;

use App\Models\User;
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
            'house_number' => $this->faker->buildingNumber(),
            'zipcode' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'country' => 'Nederland',
            'created_at' => now(),

        ];
    }
}
