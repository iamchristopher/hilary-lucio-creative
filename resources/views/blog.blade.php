@extends('layouts.main')
@section('content')
<div class="masthead tertiary">
    <div class="container">
        <h1 class="tertiary" data-subtitle="Thoughts &amp; musings">Articles</h1>
    </div>
</div>
<div class="container">
    <ol class="blogList">
        @for($i = 0; $i < 6; $i++)
        <li>
            <article>
                <img src="/images/temp_blog_image.jpg" />
                <h1>test</h1>
                <time datetime="">12/31/2017</time>
                <p>Mauris consectetur risus et justo sagittis auctor. Aliquam sagittis mi in ipsum pretium, nec sodales massa sodales. Curabitur quis diam scelerisque, mattis lectus pulvinar, vestibulum nisi. Nullam sit amet mi in sapien scelerisque scelerisque in id massa. Integer vehicula lacus eu ante egestas facilisis. Integer sagittis libero at arcu consequat, eu dignissim nisi pulvinar.</p>
                <a class="btn primary" href="">Keep reading</a>
            </article>
        </li>
        @endfor
    </ol>
</div>
@endsection
