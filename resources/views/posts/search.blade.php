<form method="get" action="{{route('posts.index')}}" class="sidebar-search-form">
{{--    <span class="bi-search"></span>--}}
    <input type="text"
           class="form-control"
           id="s"
           name="q"
           value="{{request()->get('q')}}"
           placeholder="Type a keyword and hit enter">
</form>



