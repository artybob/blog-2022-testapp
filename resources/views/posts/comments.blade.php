<div class="pt-5 comment-wrap">
    @if(count($comments) > 0)
        <h3 class="mb-5 heading">{{count($comments)}} Comments</h3>

        <ul class="comment-list">
            @foreach($comments as $comment)
                @if(!$comment->parent_id)
                    @includeIf('posts.comment')
                @endif
            @endforeach

{{--                                            <li class="comment">--}}
{{--                                                <div class="vcard">--}}
{{--                                                    <img src="images/person_2.jpg" alt="Image placeholder">--}}
{{--                                                </div>--}}
{{--                                                <div class="comment-body">--}}
{{--                                                    <h3>Jean Doe</h3>--}}
{{--                                                    <div class="meta">January 9, 2018 at 2:21pm</div>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem--}}
{{--                                                        laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe--}}
{{--                                                        enim sapiente iste iure! Quam voluptas earum impedit necessitatibus,--}}
{{--                                                        nihil?</p>--}}
{{--                                                    <p><a href="#" class="reply rounded">Reply</a></p>--}}
{{--                                                </div>--}}

{{--                                                <ul class="children">--}}
{{--                                                    <li class="comment">--}}
{{--                                                        <div class="vcard">--}}
{{--                                                            <img src="images/person_3.jpg" alt="Image placeholder">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="comment-body">--}}
{{--                                                            <h3>Jean Doe</h3>--}}
{{--                                                            <div class="meta">January 9, 2018 at 2:21pm</div>--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur--}}
{{--                                                                quidem laborum necessitatibus, ipsam impedit vitae autem, eum--}}
{{--                                                                officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum--}}
{{--                                                                impedit necessitatibus, nihil?</p>--}}
{{--                                                            <p><a href="#" class="reply rounded">Reply</a></p>--}}
{{--                                                        </div>--}}


{{--                                                        <ul class="children">--}}
{{--                                                            <li class="comment">--}}
{{--                                                                <div class="vcard">--}}
{{--                                                                    <img src="images/person_4.jpg" alt="Image placeholder">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="comment-body">--}}
{{--                                                                    <h3>Jean Doe</h3>--}}
{{--                                                                    <div class="meta">January 9, 2018 at 2:21pm</div>--}}
{{--                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
{{--                                                                        Pariatur quidem laborum necessitatibus, ipsam impedit vitae--}}
{{--                                                                        autem, eum officia, fugiat saepe enim sapiente iste iure!--}}
{{--                                                                        Quam voluptas earum impedit necessitatibus, nihil?</p>--}}
{{--                                                                    <p><a href="#" class="reply rounded">Reply</a></p>--}}
{{--                                                                </div>--}}

{{--                                                                <ul class="children">--}}
{{--                                                                    <li class="comment">--}}
{{--                                                                        <div class="vcard">--}}
{{--                                                                            <img src="images/person_5.jpg" alt="Image placeholder">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="comment-body">--}}
{{--                                                                            <h3>Jean Doe</h3>--}}
{{--                                                                            <div class="meta">January 9, 2018 at 2:21pm</div>--}}
{{--                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing--}}
{{--                                                                                elit. Pariatur quidem laborum necessitatibus, ipsam--}}
{{--                                                                                impedit vitae autem, eum officia, fugiat saepe enim--}}
{{--                                                                                sapiente iste iure! Quam voluptas earum impedit--}}
{{--                                                                                necessitatibus, nihil?</p>--}}
{{--                                                                            <p><a href="#" class="reply rounded">Reply</a></p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </li>--}}
{{--                                                                </ul>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
        </ul>
    @else
        <h3 class="mb-5 heading">No comments yet</h3>
@endif
<!-- END comment-list -->

    <div class="comment-form-wrap pt-5">
        <a id="comment"></a>
        <h3 class="mb-5">Leave a comment</h3>
        @include('common.alert')
        Userdata
        <form method="post" action="{{route('comment')}}" class="p-5 bg-light">
            @csrf
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="comment" id="comment" cols="30" rows="10" class="form-control"></textarea>
                <input name="commentable_id" value="{{$post->id}}" type="hidden">
            </div>
            <div class="form-group">
                <input type="submit" value="Post Comment" class="btn btn-primary">
            </div>

        </form>
    </div>
</div>
