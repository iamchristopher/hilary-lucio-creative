<ol class="blogList {{ isset($inline) ? 'inline' : '' }}">
    @foreach ($posts as $post)
        <li>
            <img src="/images/temp_blog_image.jpg" />
            <article>
                <h1><span>York Developments</span></h1>
                <time datetime="">Branding &amp; Identity</time>
                <p>Mauris consectetur risus et justo sagittis auctor. Aliquam sagittis mi in ipsum pretium, nec sodales massa sodales.</p>
                <a class="btn primary" href="/portfolio/york-developments">View project</a>
            </article>
        </li>
    @endforeach
</ol>
