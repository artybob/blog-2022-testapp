<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Получить все комментарии поста.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, PostCategory::class );
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, PostTag::class);
    }
}
