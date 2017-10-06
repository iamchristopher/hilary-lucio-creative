@extends('layouts.main')
@section('content')
    <div class="masthead secondary">
        <div class="container">
            <h2 class="secondary" data-subtitle="Selected projects">Portfolio</h2>
        </div>
    </div>
    <div class="container">
        <a class="uppercase" href="/portfolio">&lsaquo; Back to all case studies</a>
        <main class="project">
            <header>
                <img src="{{ $project->getImageAttribute() ?? '/images/temp_blog_image.jpg' }}" />
                <div>
                    <h1><span>{{ $project->post_title }}</span></h1>
                    <span class="uppercase">{{ $project->getMainCategoryAttribute() }}</span>
                    <p>{{ $project->content }}</p>
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
            'projects' => $relatedProjects,
            'inline' => true
        ])@endcomponent
    </div>
@endsection
