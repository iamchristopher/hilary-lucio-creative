<ol class="blogList {{ isset($inline) ? 'inline' : '' }}">
    @foreach ($posts as $post)
        <li>
            <img src="{{ $post->getImageAttribute() ?? '/images/temp_blog_image.jpg' }}" />
            <article>
                <h1><span>{{ $post->post_title }}</span></h1>
                <time datetime="{{ $post->post_date }}">{{ Carbon\Carbon::parse($post->post_date)->format('m/d/Y') }}</time>
                <p>{!! $post->post_excerpt !!}</p>
                <a class="btn primary" href="/blog/{{ $post->slug }}">Keep reading</a>
            </article>
        </li>
    @endforeach
</ol>
