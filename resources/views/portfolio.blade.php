@extends('layouts.main')
@section('content')
<div class="masthead secondary">
    <div class="container">
        <h1 class="secondary" data-subtitle="Selected projects">Portfolio</h1>
    </div>
</div>
<div class="container">
    @component('components/projectList', [
        'projects' => $projects
    ])@endcomponent
    {{ $projects->links() }}
</div>
@endsection
