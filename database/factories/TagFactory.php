<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image_id' => Image::pluck('id')[$this->faker->numberBetween(1,Image::count()-1)],
            'name' => $this->faker->sentence(1),
        ];
    }
}
