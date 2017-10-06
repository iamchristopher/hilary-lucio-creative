<ol class="blogList {{ isset($inline) ? 'inline' : '' }}">
    @foreach ($projects as $project)
        <li>
            <img src="{{ $project->getImageAttribute() ?? '/images/temp_blog_image.jpg' }}" />
            <article>
                <h1><span>{{ $project->post_title }}</span></h1>
                <span class="uppercase">{{ $project->getMainCategoryAttribute() }}</span>
                <p>{{ $project->content }}</p>
                <a class="btn primary" href="/portfolio/{{ $project->slug }}">View project</a>
            </article>
        </li>
    @endforeach
</ol>
