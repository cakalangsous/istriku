@extends('frontend.master')

@section('content')

<section id="content">
    <div class="content-wrap pt-5" style="overflow: visible;">
        <div class="container">
            <div class="d-flex justify-content-between mb-4">
                <h3 class="font-body fw-medium m-0">Postingan Terakhir</h3>
            </div>

            <div id="posts" class="row gutter-40">

                @forelse ($posts as $post)
                    <div class="entry col-12">
                        <div class="grid-inner row g-0">
                            <div class="col-md-4">
                                <div class="entry-image">
                                    <a href="{{ asset('storage/'.$post->image) }}" data-lightbox="image"><img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}"></a>
                                </div>
                            </div>
                            <div class="col-md-8 ps-md-4">
                                <div class="entry-title title-sm">
                                    <h2><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h2>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="uil uil-schedule"></i> {{ date('F j, Y', strtotime($post->published_at)) }}</li>
                                        <li><i class="uil uil-folder-open"></i> <a href="{{ route('posts.category.show', $post->category->slug) }}">{{ $post->category->name }}</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p class="mb-2">{{ $post->excerpt }}</p>
                                    <a href="{{ route('posts.show', $post->slug) }}" class="more-link">Lanjutkan membaca ...</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{ $posts->links() }}
                @empty
                    
                @endforelse

            </div>

        </div>

        {{-- <div class="section">
            <div class="container">
                <div class="ad-banner">
                    <small class="mb-2 d-block">Advertisement</small>
                    <a href="https://themeforest.net/item/canvas-the-multipurpose-html5-template/9228123" target="_blank"><img src="demos/blog/images/ad.jpg" alt="Ad Image"></a>
                </div>
            </div>
        </div> --}}

        
    </div>
</section>

@endsection