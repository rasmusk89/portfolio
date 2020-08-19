@extends('layouts.app')

@section('content')
    <a class="btn btn-dark" href="/projects" role="button">{{__('messages.go_back')}}</a>
    <hr>
    @include('gallery.include.auth')
    <div class="jumbotron text-center">
        <h1>{{__('messages.photo_gallery')}}</h1>
        @if (Auth::check())
            <a href="gallery/create" class="text-decoration-none"><div class="btn btn-dark">{{__('messages.create_album')}}</div></a>
        @endif
        <a href="gallery/albums" class="text-decoration-none"><div class="btn btn-dark">{{__('messages.view_albums')}}</div></a>
    </div>
@endsection
