<ol class="blogList {{ isset($inline) ? 'inline' : '' }}">
    @foreach ($projects as $project)
        <li>
            <img src="{{ $project->getImageAttribute() ?? '/images/temp_blog_image.jpg' }}" />
            <article>
                <h1><span>{{ $project->post_title }}</span></h1>
                <time datetime="">{{ $project->getMainCategoryAttribute() }}</time>
                <p>{{ $project->content }}</p>
                <a class="btn primary" href="/portfolio/{{ $project->slug }}">View project</a>
            </article>
        </li>
    @endforeach
</ol>
