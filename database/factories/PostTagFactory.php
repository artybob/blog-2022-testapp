<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostTag>
 */
class PostTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'post_id' => fake()->numberBetween(0, FactoryHelper::POSTS_CREATE),
            'tag_id' => fake()->numberBetween(0,FactoryHelper::TAGS_CREATE),
        ];
    }
}
