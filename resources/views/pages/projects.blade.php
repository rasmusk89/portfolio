@extends('layouts.app')

@section('content')
    <div class="custom-background">
        <a class="btn btn-light" href="/" role="button">{{__('messages.go_back')}}</a>
    </div>
    <hr>
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
    </div>
    <div class="list-group text-center m-1">
        <a href="/gallery" class="list-group-item list-group-item-action project-list">
            <div class="d-flex w-100 justify-content-center">
                <h4 class="mb-2">{{__('messages.photo_gallery')}}</h4>
            </div>
            <p class="mb-1 paragraph">This is photo gallery where you can create, view and delete albums and photos when
                logged in
                and view albums and photos when not logged in. You can only delete photos that you have uploaded.
                The project was created using Laravel framework.</p>
        </a>
        <a href="/productapi" class="list-group-item list-group-item-action project-list">
            <div class="d-flex w-100 justify-content-center">
                <h4 class="mb-2">{{__('messages.product_api')}}</h4>
            </div>
            <p class="mb-1 paragraph">This was a test work I did when for applying for a job. The page presents 50
                newest items fetched
                with API. When clicked on product, the page loads the first image, quantity and price with AJAX.
                The project was created using PHP without any framework and Bootstrap 4 framework.</p>
        </a>
        <a href="/contacts" class="list-group-item list-group-item-action project-list">
            <div class="d-flex w-100 justify-content-center">
                <h4 class="mb-2">{{__('messages.contact_book')}}</h4>
            </div>
            <p class="mb-1 paragraph">This is a contact book created using a tutorial. You can view, add, edit and
                delete contacts.
                The backend was created using PHP and frontend was created with Vue.js framework.</p>
        </a>
        <a href="/gifs" class="list-group-item list-group-item-action project-list">
            <div class="d-flex w-100 justify-content-center">
                <h4 class="mb-2">{{__('messages.gifs')}}</h4>
            </div>
            <p class="mb-1 paragraph">Gifs</p>
        </a>
    </div>
@endsection
