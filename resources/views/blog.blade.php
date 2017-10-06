@extends('layouts.main')
@section('content')
<div class="masthead tertiary">
    <div class="container">
        <h1 class="tertiary" data-subtitle="Thoughts &amp; musings">Articles</h1>
    </div>
</div>
<div class="container">
    @component('components/blogList', [
        'posts' => $posts
    ])@endcomponent
    @component('components/pagination', [
        'numPages' => 5
    ])@endcomponent
</div>
@endsection
