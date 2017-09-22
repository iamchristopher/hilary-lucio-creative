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
                <img src="/images/temp_blog_image.jpg" />
                <div>
                    <h1><span>York Developments</span></h1>
                    <time datetime="">Brand &amp; Identity</time>
                    <p>Once upon a time, there wasa naïve young woman who thought that everything in the design world was approachedin the same way. This young woman never thought of which area of design she wantedto focus on simply becauseshe didn't know (excuse myFrench) shit from beans.</p>
                    @component('components/pagination', [
                        'numPages' => 3
                    ])@endcomponent
                </div>
            </header>
            <section>
                <img src="/images/temp_blog_image.jpg" />
                <div>
                    <h2>Something</h2>
                    <p>Once upon a time, there wasa naïve young woman who thought that everything in the design world was approachedin the same way. This young woman never thought of which area of design she wantedto focus on simply becauseshe didn't know (excuse myFrench) shit from beans.</p>
                </div>
            </section>
            <section>
                <img src="/images/temp_blog_image.jpg" />
                <div>
                    <h2>Something</h2>
                    <p>Once upon a time, there wasa naïve young woman who thought that everything in the design world was approachedin the same way. This young woman never thought of which area of design she wantedto focus on simply becauseshe didn't know (excuse myFrench) shit from beans.</p>
                </div>
            </section>
            <section>
                <img src="/images/temp_blog_image.jpg" />
                <div>
                    <h2>Something</h2>
                    <p>Once upon a time, there wasa naïve young woman who thought that everything in the design world was approachedin the same way. This young woman never thought of which area of design she wantedto focus on simply becauseshe didn't know (excuse myFrench) shit from beans.</p>
                </div>
            </section>
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
