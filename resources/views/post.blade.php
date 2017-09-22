@extends('layouts.main')
@section('content')
    <div class="masthead tertiary">
        <div class="container">
            <h2 class="tertiary" data-subtitle="Thoughts &amp; musings">Articles</h2>
        </div>
    </div>
    <div class="container">
        <a href="/blog">&lsaquo; Back to all blog posts</a>
        <article class="blogPost">
            <header>
                <img src="/images/temp_blog_image.jpg" />
                <div>
                    <h1><span>Once upon a time, there was a naïve young woman</span></h1>
                    <time datetime="">12/31/2017</time>
                    <p>Once upon a time, there wasa naïve young woman who thought that everything in the design world was approachedin the same way. This young woman never thought of which area of design she wantedto focus on simply becauseshe didn't know (excuse myFrench) shit from beans.</p>
                </div>
            </header>
            <p>Fast forward six years and this young woman is realizing that it is better to kick ass at one thing than to just get by on many little things. Now, this doesn't mean that you shouldn't be versatile. I'm not saying that graphic designers shouldn't understand everything from branding to web design to packaging. What I'm saying is that you will be a lot more sane if you figure out what that one thing is that you love to do. And, for the love of all things wonderful, do that thing. Even if no one wants to pay you to do it. Do it.</p>
            <p>With my epiphany, I realized that I wasn't happy trying to figure it out as I went. So, I really focused on figuring out which area of design I truly love. What I realized was that branding and identity is the thing that puts a spring in my step and a smile on my face (most of the time). The beauty of branding and identity is that it covers all of my favourite things and all of the areas where I excel. I have the opportunity to stretch my writing skills, while designing for both print, web, and social media. But here's the main thing that I fear most young designers (like myself) tend to forget: I know basically nothing. Yes, sure, I have four and a half years of experience working in the industry. But, in the big scheme of things, there are more things that I don't know about branding than things that I do know.</p>
            <p>Now, I know what you're thinking. What is this girl doing going on LinkedIn and talking about how she doesn't know anything?! Isn't that, like, career suicide? Well, no, it isn't. And here's why: I'm just being honest. And, honestly, honesty is something that is hard to come by anymore. I could walk into a room and say, "Hey, I know everything there is to know about everything and you should accept that," and then proceed to be laughed out of the room by senior team members with 10+ years experience. Or, alternatively, I could walk into a room and say, "Hey, I know some stuff and I have some room to grow in other places. I am super stoked to learn though and I can't wait to learn from all of you, who, frankly, know way more than me as a whole." Now, doesn't that sound better and more reasonable?</p>
            <p>So, what is my whole point here? It's not that I'm humble or honest (because, well, that wouldn't be very humble). It's that continued learning is essential, no matter what point you are at in your career.A very smart man once told me, "There are three distinct points in any career. When you first start out and you're shit and you know you're shit. Then you learn some stuff, and you're still kind of shit, but you think you're amazing and you stop trying to learn and better yourself. A lot of people get stuck there because they don't think they need to keep learning. And then there is the third step. Where you can actually produce work of quality but you continue to read and learn and soak up knowledge so you can continue getting better." I think that it is such a great point about the third step. Being genuinely awesome means knowing that you need to keep working to keep that momentum. If you stop caring and stop learning and stop striving to find what makes you happy in your career, thenyou will slowly begin to slip back to step two. Be a better learner. Admit you know nothing.</p>
        </article>
        <hr />
    </div>
    <div class="container centred">
        <h3
            class="alternate"
            data-subtitle="Follow it up with one of these"
        >
            Like that post?
        </h3>
        @component('components/blogList', [
            'posts' => array_fill(0, 3, true),
            'inline' => true
        ])@endcomponent
    </div>
@endsection
