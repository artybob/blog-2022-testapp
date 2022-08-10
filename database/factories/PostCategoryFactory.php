<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostCategory>
 */
class PostCategoryFactory extends Factory
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
            'category_id' => fake()->numberBetween(0, FactoryHelper::CATEGORIES_CREATE),
        ];
    }
}
