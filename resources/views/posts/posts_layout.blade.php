@extends('layouts.app')

@section('content')

    <div class="section search-result-wrap">
        <div class="container">
            <div class="row posts-entry">
                <div class="col-lg-8">
                    @yield('posts_content')
                </div>
                <div class="col-lg-4 sidebar">
                    <div class="sidebar-box search-form-wrap mb-4">
                        @includeIf('posts.search')
                    </div>
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <h3 class="heading">Popular Posts</h3>
                        <div class="post-entry-sidebar">
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="/assets/images/img_1_sq.jpg" alt="Image placeholder"
                                             class="me-4 rounded">
                                        <div class="text">
                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="/assets/images/img_2_sq.jpg" alt="Image placeholder"
                                             class="me-4 rounded">
                                        <div class="text">
                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="/assets/images/img_3_sq.jpg" alt="Image placeholder"
                                             class="me-4 rounded">
                                        <div class="text">
                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END sidebar-box -->
                    @includeIf('posts.categories')

                    <!-- END sidebar-box -->
                    @includeIf('posts.tags')
                </div>
            </div>
        </div>
    </div>

@endsection


