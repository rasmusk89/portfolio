@extends('layouts.app')

@section('content')
    <a class="btn btn-dark" href="/projects" role="button">{{__('messages.go_back')}}</a>
    <hr>
    <div class="jumbotron text-center">
        <h1>Wordpress page</h1>
        <p>description of work</p>
        <a href="//rasmusk.ee/wordpress" target="_blank" class="text-decoration-none"><div class="btn btn-dark">{{__('messages.go_to')}}</div></a>
    </div>
@endsection
