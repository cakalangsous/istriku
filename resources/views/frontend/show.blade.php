@extends('frontend.master')

@section('content')
<section id="content">

    <div class="content-wrap pt-5" style="overflow: visible;">

        <div class="container">
            <div class="single-post mb-0">
                <div class="entry">

                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="entry-title">
                                <div class="entry-categories"><a href="demo-blog-categories.html">{{ $post->category->name }}</a></div>
                                <h2>{{ $post->title }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        <div class="entry-meta">
                            <ul>
                                <li>{{ date('F j, Y', strtotime($post->published_at)) }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="post-image my-3">
                        <a href="{{ asset('storage/'.$post->image) }}" data-lightbox="image"><img class="rounded" src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}"></a>
                    </div>
                    <div class="entry-content">

                        <div class="row">

                            <div class="col-lg-2 media-content" data-animate="fadeIn">
                                <div>
                                    <h5 class="mb-2">Share this Post:</h5>
                                    <div>
                                        <a href="javascript:void(0)" onclick="shareOnFacebook('{{ url()->current() }}', '{{ $post->title }}')" class="social-icon si-small rounded-circle text-light border-0 bg-facebook">
                                            <i class="fa-brands fa-facebook-f"></i>
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="shareOnTwitter('{{ url()->current() }}', '{{ $post->title }}')" class="social-icon si-small rounded-circle text-light border-0 bg-x-twitter">
                                            <i class="fa-brands fa-x-twitter"></i>
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="shareOnWhatsApp('{{ url()->current() }}', '{{ $post->title }}')" class="social-icon si-small rounded-circle text-light border-0 bg-whatsapp">
                                            <i class="fa-brands fa-whatsapp"></i>
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-1"></div>

                            <div class="text-content col-lg-6">

                                {!! $post->body !!}

                                <div class="line"></div>
                                <h4 class="mb-3">Tags</h4>
                                <div class="tagcloud">
                                    @forelse ($post->tags as $tag)
                                        <a href="{{ route('posts.tag.show', $tag->slug) }}">{{ $tag->name }}</a>
                                    @empty
                                        
                                    @endforelse
                                </div>

                                <div class="clear"></div>

                                {{-- <div id="comments">

                                    <h3 id="comments-title"><span>3</span> Comments</h3>

                                    <ol class="commentlist">

                                        <li class="comment even thread-even depth-1" id="li-comment-1">

                                            <div id="comment-1" class="comment-wrap">

                                                <div class="comment-meta">

                                                    <div class="comment-author vcard">

                                                        <span class="comment-avatar">
                                                        <img alt='' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60'></span>

                                                    </div>

                                                </div>

                                                <div class="comment-content">

                                                    <div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2012 at 10:46 am</a></span></div>

                                                    <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                                    <a class='comment-reply-link' href='#'><i class="bi-reply-fill"></i></a>

                                                </div>

                                                <div class="clear"></div>

                                            </div>


                                            <ul class='children'>

                                                <li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">

                                                    <div id="comment-3" class="comment-wrap">

                                                        <div class="comment-meta">

                                                            <div class="comment-author vcard">

                                                                <span class="comment-avatar">
                                                                <img alt='' src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G' class='avatar avatar-40 photo' height='40' width='40'></span>

                                                            </div>

                                                        </div>

                                                        <div class="comment-content">

                                                            <div class="comment-author"><a href='#' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

                                                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                                            <a class='comment-reply-link' href='#'><i class="bi-reply-fill"></i></a>

                                                        </div>

                                                        <div class="clear"></div>

                                                    </div>

                                                </li>

                                            </ul>

                                        </li>

                                        <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">

                                            <div id="comment-2" class="comment-wrap">

                                                <div class="comment-meta">

                                                    <div class="comment-author vcard">

                                                        <span class="comment-avatar">
                                                        <img alt='' src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G' class='avatar avatar-60 photo' height='60' width='60'></span>

                                                    </div>

                                                </div>

                                                <div class="comment-content">

                                                    <div class="comment-author"><a href='https://themeforest.net/user/semicolonweb' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

                                                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                                    <a class='comment-reply-link' href='#'><i class="bi-reply-fill"></i></a>

                                                </div>

                                                <div class="clear"></div>

                                            </div>

                                        </li>

                                    </ol>

                                    <div class="clear"></div>

                                    <div id="respond">

                                        <h3>Leave a <span>Comment</span></h3>

                                        <form class="row mb-0" action="#" method="post" id="commentform">

                                            <div class="form-group col-4">
                                                <label for="author">Name</label>
                                                <input type="text" name="author" id="author" value="" size="22" tabindex="1" class="form-control">
                                            </div>

                                            <div class="form-group col-4">
                                                <label for="email">Email</label>
                                                <input type="text" name="email" id="email" value="" size="22" tabindex="2" class="form-control">
                                            </div>

                                            <div class="form-group col-4">
                                                <label for="url">Website</label>
                                                <input type="text" name="url" id="url" value="" size="22" tabindex="3" class="form-control">
                                            </div>

                                            <div class="w-100"></div>

                                            <div class="form-group col-12">
                                                <label for="comment">Comment</label>
                                                <textarea name="comment" id="comment" cols="58" rows="7" tabindex="4" class="form-control"></textarea>
                                            </div>

                                            <div class="form-group col-12 mt-4 mb-0">
                                                <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-large button-black button-dark text-transform-none fw-medium ls-0 button-rounded m-0">Submit Comment</button>
                                            </div>

                                        </form>

                                    </div>

                                </div> --}}
                            </div>

                        </div>

                    </div>
                </div>

                <h3 class="mb-0">Related Posts</h3>

                <div class="row posts-md">
                    @forelse ($relatedPosts as $related)
                        <div class="col-lg-3 col-sm-6">
                            <article class="entry">
                                <div class="entry-image">
                                    <a href="#"><img src="demos/blog/images/video-thumbs/1.jpg" alt="Image 3"></a>
                                </div>
                                <div class="entry-title title-sm text-start">
                                    <div class="entry-categories"><a href="demo-blog-categories.html">{{ $related->category->name }}</a></div>
                                    <h3><a href="#" class="color-underline stretched-link">{{ $related->title }}</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li>{{ date('F j, Y', strtotime($post->published_at)) }}</li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    @empty
                        
                    @endforelse
                </div>

            </div>
        </div>

    </div>

</section>
@endsection