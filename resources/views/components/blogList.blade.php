<ol class="blogList {{ isset($inline) ? 'inline' : '' }}">
    @foreach ($posts as $post)
        <li>
            <img src="/images/temp_blog_image.jpg" />
            <article>
                <h1><span>My plant is dying (and other office crimes)</span></h1>
                <time datetime="">12/31/2017</time>
                <p>Mauris consectetur risus et justo sagittis auctor. Aliquam sagittis mi in ipsum pretium, nec sodales massa sodales. Curabitur quis diam scelerisque, mattis lectus pulvinar, vestibulum nisi. Nullam sit amet mi in sapien scelerisque scelerisque in id massa. Integer vehicula lacus eu ante egestas facilisis. Integer sagittis libero at arcu consequat, eu dignissim nisi pulvinar.</p>
                <a class="btn primary" href="/blog/some-article">Keep reading</a>
            </article>
        </li>
    @endforeach
</ol>
