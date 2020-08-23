@extends('layouts.app')

@section('content')
    <div class="custom-background">
        <a class="btn btn-light border border-secondary" href="/projects" role="button">{{__('messages.go_back')}}</a>
    </div>
    <hr>
    <div class="custom-background">
        @include('gallery.include.auth')
        @if (!Auth::check())
            <small><em>{{__('projects.guest_login')}}</em></small>
        @endif
    </div>
    <hr>
    <div class="jumbotron text-center">
        <h1>{{__('messages.photo_gallery')}}</h1>
        <p>{{__('projects.photo_gallery_description')}}</p>
        @if (Auth::check())
            <a href="gallery/create" class="text-decoration-none">
                <div class="btn btn-dark m-2">{{__('messages.create_album')}}</div>
            </a>
        @endif
        <a href="gallery/albums" class="text-decoration-none">
            <div class="btn btn-dark m-2">{{__('messages.view_albums')}}</div>
        </a>
    </div>
@endsection
