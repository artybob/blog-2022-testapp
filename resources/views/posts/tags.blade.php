<div class="sidebar-box">
    <h3 class="heading">Tags</h3>
    <ul class="tags">
        @php($tags = App\Models\Tag::all())
        @if($tags)
            @foreach($tags as $tag)
                <li><a href="{{route('posts.index')}}?t={{$tag->name}}">{{$tag->name}}</a></li>
            @endforeach
        @else
            No tags found
        @endif
    </ul>
</div>


