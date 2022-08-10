<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostTag;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Factories\FactoryHelper;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Post::factory(FactoryHelper::POSTS_CREATE)->create();
        Comment::factory(FactoryHelper::COMMENTS_CREATE)->create();
        Tag::factory(30)->create();
        Category::factory(8)->create();
        PostCategory::factory(FactoryHelper::CATEGORIES_CREATE)->create();
        PostTag::factory(FactoryHelper::TAGS_CREATE)->create();

    }
}
