<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function addComment(Request $request)
    {
        $request->validate([
            'comment' => 'required|max:255',
            'commentable_id' => 'required',
        ]);

        //Auth::user()->id
        $userId = 1;

        $comment = new Comment();
        $comment->body = $request->comment;
        $comment->commentable_id = $request->commentable_id;
        $comment->owner_id = $userId;
        $comment->commentable_type = 'App\Models\Post';

        $comment->save();

        return redirect()->to(url()->previous() . '#comment')->with('success', 'Комментарий добавлен');
    }
}
