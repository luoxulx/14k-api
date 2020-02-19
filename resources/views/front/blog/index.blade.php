@extends('front.blog.layout')
@section('main')
    <div class="container">
        <header></header>
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between"></nav>
        </div>
    </div>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="pb-3 mb-4 font-italic border-bottom">Antediluvian</h3>
                @forelse($articles as $item)
                <div class="blog-post">
                    <h3 class="blog-post-title"><a href="{{ route('blog.show', ['slug'=>$item->slug]) }}">{{ $item->title }}</a></h3>
                    <p class="blog-post-meta">
                        <span class="margin-r-15">{{ date('F j, Y', strtotime($item->published_at)) }}</span>
                        <span class="glyphicon glyphicon-heart" aria-hidden="true">点击 {{ $item->view_count }}</span>
                    </p>

                    <p>{{ $item->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('blog.show', ['slug'=>$item->slug]) }}" class="btn btn-sm btn-outline-secondary">View</a>
                    </div>
                </div>
                @empty
                    <hr>
                @endforelse
                {{ $articles->links() }}
            </div>
            <aside class="col-md-3 blog-sidebar">
                @include('front.blog.aside')
            </aside>
        </div>
    </main>
    @include('front.blog.foot')
@stop
