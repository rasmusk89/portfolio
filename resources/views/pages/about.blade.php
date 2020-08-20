@extends('layouts.app')

@section('content')
    <div class="custom-background">
        <a class="btn btn-light" href="/" role="button">{{__('messages.go_back')}}</a>
    </div>
    <hr>
    <div class="jumbotron text-center">
        <h1 class="mb-3">{{$title}}</h1>
        <p class="paragraph mt-4">
            {{__('messages.about_me_text')}}
            <br>
        <a class="btn bg-light btn-lg mt-5" href="/contact">{{__('messages.contact_me')}}..</a>
    </div>
@endsection
