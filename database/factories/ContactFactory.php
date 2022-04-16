<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'contact_number' => $this->faker->unique()->randomNumber($nbDigits = 9, $strict = true),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
