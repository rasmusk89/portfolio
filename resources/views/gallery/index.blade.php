@extends('layouts.app')

@section('content')
    <div class="custom-background">
        <a class="btn btn-light" href="/projects" role="button">{{__('messages.go_back')}}</a>
    </div>
    <hr>
    <div class="custom-background">
        @include('gallery.include.auth')
    </div>
    <hr>
    <div class="jumbotron text-center">
        <h1>{{__('messages.photo_gallery')}}</h1>
        @if (Auth::check())
            <a href="gallery/create" class="text-decoration-none">
                <div class="btn btn-dark">{{__('messages.create_album')}}</div>
            </a>
        @endif
        <a href="gallery/albums" class="text-decoration-none">
            <div class="btn btn-dark">{{__('messages.view_albums')}}</div>
        </a>
    </div>
@endsection
