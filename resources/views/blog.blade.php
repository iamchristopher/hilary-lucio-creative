@extends('layouts.main')
@section('content')
<div class="masthead tertiary">
    <div class="container">
        <h1 class="tertiary" data-subtitle="Thoughts &amp; musings">Articles</h1>
    </div>
</div>
<div class="container">
    @component('components/blogList', [
        'posts' => array_fill(0, 3, true)
    ])@endcomponent
    @component('components/pagination', [
        'numPages' => 5
    ])@endcomponent
</div>
@endsection
