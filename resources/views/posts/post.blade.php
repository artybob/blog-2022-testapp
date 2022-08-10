@extends('posts.posts_layout')

@section('posts_content')

    <section class="section">
        <div class="container">

            <div class="row blog-entries element-animate">

                <div class="col-md-12 col-lg-8 main-content">

                    <h2>
                        {{$post->title}}
                    </h2>

                    <div class="post-content-body">
                        {{$post->body}}
                    </div>


                    <div class="pt-5">
                        <p>
                        @isset($post->categories[0])
                            Categories:
                            @foreach($post->categories as $cat)
                                <a href="{{route('posts.index')}}?cat={{$cat->name}}">{{$cat->name}}</a>
                            @endforeach
                                <br>
                        @endisset
                        @isset($post->tags[0])
                                Tags:
                            @foreach($post->tags as $tag)
                                <a href="{{route('posts.index')}}?t={{$tag->name}}">#{{$tag->name}}</a>
                            @endforeach
                        @endisset
                        </p>
                    </div>

                    @includeIf('posts.comments')

                </div>

                <!-- END main-content -->

            </div>
        </div>
    </section>

    <!-- Start posts-entry -->
    {{--    <section class="section posts-entry posts-entry-sm bg-light">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row mb-4">--}}
    {{--                <div class="col-12 text-uppercase text-black">More Blog Posts</div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-md-6 col-lg-3">--}}
    {{--                    <div class="blog-entry">--}}
    {{--                        <a href="single.html" class="img-link">--}}
    {{--                            <img src="images/img_1_horizontal.jpg" alt="Image" class="img-fluid">--}}
    {{--                        </a>--}}
    {{--                        <span class="date">Apr. 14th, 2022</span>--}}
    {{--                        <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>--}}
    {{--                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>--}}
    {{--                        <p><a href="#" class="read-more">Continue Reading</a></p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-6 col-lg-3">--}}
    {{--                    <div class="blog-entry">--}}
    {{--                        <a href="single.html" class="img-link">--}}
    {{--                            <img src="images/img_2_horizontal.jpg" alt="Image" class="img-fluid">--}}
    {{--                        </a>--}}
    {{--                        <span class="date">Apr. 14th, 2022</span>--}}
    {{--                        <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>--}}
    {{--                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>--}}
    {{--                        <p><a href="#" class="read-more">Continue Reading</a></p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-6 col-lg-3">--}}
    {{--                    <div class="blog-entry">--}}
    {{--                        <a href="single.html" class="img-link">--}}
    {{--                            <img src="images/img_3_horizontal.jpg" alt="Image" class="img-fluid">--}}
    {{--                        </a>--}}
    {{--                        <span class="date">Apr. 14th, 2022</span>--}}
    {{--                        <h2><a href="single.html">UK sees highest inflation in 30 years</a></h2>--}}
    {{--                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>--}}
    {{--                        <p><a href="#" class="read-more">Continue Reading</a></p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-6 col-lg-3">--}}
    {{--                    <div class="blog-entry">--}}
    {{--                        <a href="single.html" class="img-link">--}}
    {{--                            <img src="images/img_4_horizontal.jpg" alt="Image" class="img-fluid">--}}
    {{--                        </a>--}}
    {{--                        <span class="date">Apr. 14th, 2022</span>--}}
    {{--                        <h2><a href="single.html">Don’t assume your user data in the cloud is safe</a></h2>--}}
    {{--                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>--}}
    {{--                        <p><a href="#" class="read-more">Continue Reading</a></p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <!-- End posts-entry -->

@endsection
