@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <a href="gallery/create" class="text-decoration-none"><div class="btn btn-dark">Create album</div></a>
        <a href="gallery/albums" class="text-decoration-none"><div class="btn btn-dark">View albums</div></a>
    </div>
@endsection
