<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Image_category' => $this->faker->sentence(),
            'Image' => $this->faker->imageUrl(), 
        ];
    }
}
