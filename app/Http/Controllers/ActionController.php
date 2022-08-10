<?php

namespace App\Http\Controllers;

use App\Http\Classes\MegaChild;
use App\Http\Classes\MegaParent;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function index() {

//        $comment = Comment::find(1);
//
//        $commentable = $comment->commentable;
//
//        dd($post->comments);

//        $posts = Post::with('comments')->get();
//
//        return view('welcome', ['posts' => $posts]);

        $r = Post::whereId(13)->with('tags')->get()->toArray();

        dd($r);

    }

}
