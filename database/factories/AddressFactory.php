<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'city' => $this->faker->city(),
            'street' => $this->faker->streetAddress(),
            'house' => $this->faker->numberBetween(0, 100),
            'floor' => $this->faker->numberBetween(0, 55),
            'room' => $this->faker->numberBetween(0, 500),
            'code' => $this->faker->postcode(),
            'reg' => $this->faker->dateTimeBetween('-60 days', '-30 days'),
        ];
    }
}
