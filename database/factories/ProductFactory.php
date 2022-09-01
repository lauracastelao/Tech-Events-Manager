<?php

namespace Database\Factories;

use App\Models\Product;
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
            'title' => $this->faker->sentence(),
            'date' => $this->faker->date('Y-m-d','now'),
            'time' => $this->faker->time(),
            'max_participants' => $this->faker->numberBetween(1,100),
            'description' => $this->faker->sentence(),
            'image'=>$this->faker->imageUrl(100, 100,'cats')// 'http://lorempixel.com/640/480/'

        ];
    }
}
