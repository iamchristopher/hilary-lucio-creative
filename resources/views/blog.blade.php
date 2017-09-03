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
            <img src="/images/temp_blog_image.jpg" />
            <article>
                <h1><span>My plant is dying (and other office crimes)</span></h1>
                <time datetime="">12/31/2017</time>
                <p>Mauris consectetur risus et justo sagittis auctor. Aliquam sagittis mi in ipsum pretium, nec sodales massa sodales. Curabitur quis diam scelerisque, mattis lectus pulvinar, vestibulum nisi. Nullam sit amet mi in sapien scelerisque scelerisque in id massa. Integer vehicula lacus eu ante egestas facilisis. Integer sagittis libero at arcu consequat, eu dignissim nisi pulvinar.</p>
                <a class="btn primary" href="">Keep reading</a>
            </article>
        </li>
        @endfor
    </ol>
    <nav class="pagination">
        <a href="#" rel="first">&laquo;</a>
        <a href="#" rel="prev">&lsaquo;</a>
        <ul>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
        </ul>
        <a href="#" rel="next">&rsaquo;</a>
        <a href="#" rel="last">&raquo;</a>
    </nav>
</div>
@endsection
