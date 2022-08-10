<li class="comment">
    <div class="vcard">
        <img src="{{$comment->owner->avatar}}" alt="Image placeholder">
    </div>
    <div class="comment-body">
        <h3>{{$comment->owner->name}}</h3>
        <div class="meta">{{$comment->created_at}}</div>
        <p>{{$comment->body}}</p>
        <p><a href="#" class="reply rounded">Reply</a></p>
    </div>

    @if ($comment->children)
        @foreach($comment->children as $c)
            <ul class="children">
                @include('posts.comment', ['comment' => $c])
            </ul>
        @endforeach
    @endif
</li>
