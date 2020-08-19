@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>{{$description}}</p>
        <div>
            <a href="/about" class="btn btn-light btn-sm">{{__('messages.about')}}</a>
            <a href="/contact" class="btn btn-light btn-sm">{{__('messages.contact')}}</a>
            <a href="/projects" class="btn btn-light btn-sm">{{__('messages.projects')}}</a>
        </div>
    </div>
@endsection
