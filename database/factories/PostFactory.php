<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'owner_id' => fake()->numberBetween(0,10),
            'cover' => 'https://placeimg.com/200/200/nature?' . mt_rand(1, 100),
            'title' => fake()->unique()->word,
            'body' => fake()->realText(400)
        ];
    }
}
