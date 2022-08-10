@extends('posts.posts_layout')
@section('posts_content')
    @if($searchMessage)
        <h3>{{$searchMessage}} ({{$posts->total()}}):</h3>
        <br>
    @endif
    @forelse($posts as $post)
        <div class="blog-entry d-flex blog-entry-search-item">
            <a href="single.html" class="img-link me-4">
                <img src="{{$post->cover}}" alt="Image" class="img-fluid">
            </a>
            <div>
                <p>
                    <span class="date">{{date('y F Y', strtotime($post->created_at))}} &bullet;</span>
                    @foreach($post->categories as $cat)
                        <a href="?cat={{$cat->name}}">{{$cat->name}}</a>
                    @endforeach
                </p>

                <h2>{{$post->id}}<a href="single.html">{{$post->title}}</a></h2>

                <p>{{$post->body}}</p>

                <p>
                    @foreach($post->tags as $tag)
                        <a href="?t={{$tag->name}}">#{{$tag->name}}</a>
                    @endforeach
                </p>

                <br>
                <p>Comments ({{count($post->comments)}})</p>
                <p><a href="{{route('posts.show', $post->id)}}" class="btn btn-sm btn-outline-primary">Read More</a>
                </p>
            </div>
        </div>

    @empty
        No posts found
    @endforelse

    @includeIf('posts.posts_pagination')
@endsection



