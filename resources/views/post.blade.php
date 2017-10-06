@extends('layouts.main')
@section('content')
    <div class="masthead tertiary">
        <div class="container">
            <h2 class="tertiary" data-subtitle="Thoughts &amp; musings">Articles</h2>
        </div>
    </div>
    <div class="container">
        <a href="/blog">&lsaquo; Back to all blog posts</a>
        <article class="blogPost">
            <header>
                <img src="{{ $post->getImageAttribute() }}" />
                <div>
                    <h1><span>{{ $post->post_title }}</span></h1>
                    <time datetime="{{ $post->post_date }}">{{ Carbon\Carbon::parse($post->post_date)->format('m/d/Y') }}</time>
                    <p>{{ $post->post_excerpt }}</p>
                </div>
            </header>
            {!! nl2br($post->post_content) !!}
        </article>
        <hr />
    </div>
    <div class="container centred">
        <h3
            class="alternate"
            data-subtitle="Follow it up with one of these"
        >
            Like that post?
        </h3>
        @component('components/blogList', [
            'posts' => array_fill(0, 3, true),
            'inline' => true
        ])@endcomponent
    </div>
@endsection
