<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
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
            'Position' => $this->faker->sentence(),
            'Profile_image' => $this->faker->imageUrl(), 
            'Biography_description' => $this->faker->paragraph(),
        ];
    }
}
