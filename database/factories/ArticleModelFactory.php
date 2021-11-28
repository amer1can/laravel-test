<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ArticleModelFactory extends Factory
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
            'text' => $this->faker->text(400),
            'views' => $this->faker->numberBetween(10,1000),
            'likes' => $this->faker->numberBetween(5,50),
            'min_image' => $this->faker->imageUrl($width = 300, $height = 300, 'cats'),
            'image' => $this->faker->imageUrl($width = 1100, $height = 400, 'cats'),
            'theme_comment' => null,
            'comment' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
