<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Customer_SupportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Full_name' => $this->faker->sentence(),
            'Email' => $this->faker->sentence(),
            'Subject' => $this->faker->sentence(),
            'Message' => $this->faker->paragraph(),
        ];
    }
}
