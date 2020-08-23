@extends('layouts.app')

@section('content')
    <div class="custom-background">
        <a class="btn btn-light border border-secondary" href="/" role="button">{{__('messages.go_back')}}</a>
    </div>
    <hr>
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>{{$description}}</p>
    </div>
    <div class="list-group text-center m-1">
        <a href="/gallery" class="list-group-item list-group-item-action project-list">
            <div class="d-flex w-100 justify-content-center">
                <h4 class="mb-2">{{__('projects.photo_gallery')}}</h4>
            </div>
        </a>
        <a href="/productapi" class="list-group-item list-group-item-action project-list">
            <div class="d-flex w-100 justify-content-center">
                <h4 class="mb-2">{{__('projects.product_api')}}</h4>
            </div>
        </a>
        <a href="/contacts" class="list-group-item list-group-item-action project-list">
            <div class="d-flex w-100 justify-content-center">
                <h4 class="mb-2">{{__('projects.contact_book')}}</h4>
            </div>
        </a>
        <a href="/gifs" class="list-group-item list-group-item-action project-list">
            <div class="d-flex w-100 justify-content-center">
                <h4 class="mb-2">{{__('projects.gifs')}}</h4>
            </div>
        </a>
        <a href="/contacts_school" class="list-group-item list-group-item-action project-list">
            <div class="d-flex w-100 justify-content-center">
                <h4 class="mb-2">{{__('projects.contacts_school_project')}}</h4>
            </div>
        </a>
    </div>
@endsection
