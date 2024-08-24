<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Service_title' => $this->faker->sentence(),
            'Service_description' => $this->faker->paragraph(),
            'Icon' => $this->faker->imageUrl(), 
        ];
    }
}
