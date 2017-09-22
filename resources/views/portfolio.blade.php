@extends('layouts.main')
@section('content')
<div class="masthead secondary">
    <div class="container">
        <h1 class="secondary" data-subtitle="Selected projects">Portfolio</h1>
    </div>
</div>
<div class="container">
    @component('components/projectList', [
        'posts' => array_fill(0, 3, true)
    ])@endcomponent
    <nav class="pagination">
        <a href="#" rel="first">&laquo;</a>
        <a href="#" rel="prev">&lsaquo;</a>
        <ul>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
        </ul>
        <a href="#" rel="next">&rsaquo;</a>
        <a href="#" rel="last">&raquo;</a>
    </nav>
</div>
@endsection
