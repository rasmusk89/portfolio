@extends('layouts.app')

@section('content')
    <div class="custom-background">
        <a class="btn btn-light" href="/projects" role="button">{{__('messages.go_back')}}</a>
    </div>
    <hr>
    <div class="jumbotron text-center">
        <h1>{{__('projects.product_api')}}</h1>
        <p>{{__('projects.product_api_description')}}</p>
        <a href="//rasmusk.ee/productAPI" target="_blank" class="text-decoration-none">
            <div class="btn btn-dark m-2">{{__('messages.view')}}..</div>
        </a>
        <a href="https://github.com/rasmusk89/TestWork" target="_blank" class="text-decoration-none">
            <div class="btn btn-dark m-2">GitHub..</div>
        </a>
    </div>
@endsection
