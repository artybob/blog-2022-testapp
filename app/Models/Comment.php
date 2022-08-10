<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function commentable()
    {
        return $this->morphTo();
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(Comment::class, 'parent_id', 'id')->with('owner');
    }

    public function allChildrenComment()
    {
        return $this->children()->with('owner');
    }

//    public function posts()
//    {
//        return $this->morphedByMany(Post::class, 'commentable');
//
//    }
}
