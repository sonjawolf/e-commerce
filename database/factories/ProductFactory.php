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
            'name' => $this->faker->word(),
            'price'=> $this->faker->numberBetween(50,200),
            'category'=> 'mobile, tv',
            'description'=> $this->faker->paragraph(2),
            'gallery'=>'no-image.png'
        ];
    }
}
