<div class="sidebar-box">
    <h3 class="heading">Categories</h3>
    <ul class="categories">
        @php($categories = App\Models\Category::with('posts')->get())
        @if($categories)
            @foreach($categories as $cat)
                <li><a href="{{route('posts.index')}}?cat={{$cat->name}}">{{$cat->name}} <span>({{count($cat->posts)}})</span></a></li>
            @endforeach
        @elseы
            <li>No categories found</li>
        @endif
    </ul>
</div>
