@extends('frontend.master')

@section('content')
<section class="page-title page-title-center">
    <div class="container">
        <div class="page-title-row">

            <div class="page-title-content mw-sm">
                <h1>{{ $data != null ? ucwords($data?->name) : '' }}</h1>
            </div>

        </div>
    </div>
</section>

<section id="content">
    <div class="content-wrap pt-0 pt-sm-6">
        <div class="container">

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
                @empty
                    <div class="entry col-12">
                        <div class="grid-inner row g-0"></div>
                            <div class="col-md-12">
                                <div class="entry-title title-sm text-center">
                                    <h2>Belum ada postingan.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse

            </div>

        </div>
    </div>
</section>
@endsection