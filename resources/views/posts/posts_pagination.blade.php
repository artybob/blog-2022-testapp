@if($posts->total() > $posts->perPage())
    <div class="row text-start pt-5 border-top">
        <div class="col-md-12">
            <div class="custom-pagination">
                {{-- 1 страница--}}
                @if(!$posts->onFirstPage())
                    @if($posts->currentPage() !== 2)
                        <a href="{{$posts->url(1)}}">1</a>
                        <span>...</span>
                    @endif
                @endif

                {{-- prev страница--}}
                @if($posts->currentPage()-1 > 0)
                    <a href="{{$posts->previousPageUrl()}}">{{$posts->currentPage()-1}}</a>
                @endif

                {{-- активная страница--}}
                <span class="active-page">{{$posts->currentPage()}}</span>

                {{-- next страница--}}
                @if($posts->currentPage() !== $posts->lastPage())
                    <a href="{{$posts->nextPageUrl()}}">{{$posts->currentPage()+1}}</a>
                @endif

                {{-- last страница--}}
                @if($posts->currentPage() !== $posts->lastPage())
                    @if($posts->currentPage() !== $posts->lastPage()-1)
                        <span>...</span>
                        <a href="{{$posts->url($posts->lastPage())}}">{{$posts->lastPage()}}</a>
                    @endif
                @endif

            </div>
        </div>
    </div>
@endif



