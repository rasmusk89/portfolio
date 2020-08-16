@extends('layouts.app')

@section('content')
    @include('gallery.include.auth')
    <div class="jumbotron text-center">
        <h1>Photo gallery</h1>
        @if (Auth::check())
            <a href="gallery/create" class="text-decoration-none"><div class="btn btn-dark">Create album</div></a>
        @endif
        <a href="gallery/albums" class="text-decoration-none"><div class="btn btn-dark">View albums</div></a>
    </div>
@endsection
