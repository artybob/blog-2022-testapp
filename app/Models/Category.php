<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasManyThrough(Post::class, PostCategory::class, 'category_id' , 'id' ,'id', 'post_id');
    }
}
