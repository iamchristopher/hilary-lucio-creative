@extends('layouts.main')
@section('content')
    <div class="masthead secondary">
        <div class="container">
            <h2 class="secondary" data-subtitle="Selected projects">Portfolio</h2>
        </div>
    </div>
    <div class="container">
        <a href="/portfolio">&lsaquo; Back to all case studies</a>
        <main class="project">
            <header>
                <img src="{{ $project->getImageAttribute() ?? '/images/temp_blog_image.jpg' }}" />
                <div>
                    <h1><span>{{ $project->post_title }}</span></h1>
                    <time datetime="">{{ $project->getMainCategoryAttribute() }}</time>
                    <p>{{ $project->content }}</p>
                    @component('components/pagination', [
                        'numPages' => 3
                    ])@endcomponent
                </div>
            </header>
            <div class="alternatingContent">
                @foreach($project->attachment as $attachment)
                    <section>
                        <img src="{{ $attachment->guid }}" />
                        <div>
                            <h2>{{ $attachment->title }}</h2>
                            <p>{{ $attachment->post_content }}</p>
                        </div>
                    </section>
                @endforeach
            </div>
        </main>
        <hr />
    </div>
    <div class="container centred">
        <h3
            class="alternate"
            data-subtitle="Check out these other case studies"
        >
            Want more cool shit?
        </h3>
        @component('components/projectList', [
            'posts' => array_fill(0, 3, true),
            'inline' => true
        ])@endcomponent
    </div>
@endsection
