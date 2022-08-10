<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $query = Post::select('*');
        $searchMessage = '';

        if($request->q){
            //поиск из формы
            $query->where('body', 'like', "%$request->q%");
            $query->orWhere('title', 'like', "%$request->q%");
            $searchMessage = "Search result for '$request->q'";
        }

        elseif($request->t){
            //поиск tag
            $query->whereHas('tags', function (Builder $query) use ($request){
                $query->where('name', $request->t);
            });
            $searchMessage = "Search result for tag #$request->t";
        }

        elseif($request->cat){
            //поиск category
            $query->whereHas('categories', function (Builder $query) use ($request){
                $query->where('name', $request->cat);
            });
            $searchMessage = "Search result for category $request->cat";
        }

        $posts = $query->with('comments')->paginate(5);

        return view('posts.posts', [
            'posts' => $posts,
            'searchMessage' => $searchMessage,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StorePostRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Post $post)
    {
        $comments = $post->comments()->with('owner')->get();

        return view('posts.post', ['post' => $post, 'comments' => $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdatePostRequest $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
