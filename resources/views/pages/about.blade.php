@extends('layouts.app')

@section('content')
    <a class="btn btn-dark" href="/" role="button">{{__('messages.go_back')}}</a>
    <hr>
    <div class="jumbotron text-center">
        <h1 class="mb-3">{{$title}}</h1>
        <p class="paragraph mt-4">
{{--            <br>My name is Rasmus Kilk and I am from Tartu.--}}
{{--            <br>I am currently distant studying IT systems development at Tallinn University of Technology.--}}
{{--            <br>I am most familiar with PHP programming language but I also know Java and Python.--}}
{{--            <br>Most individual projects I have done are back-end projects and written in PHP using Laravel framework.--}}
{{--            <br>I am currently looking for back-end or PHP developer positions.--}}
{{--        </p>--}}
            {{__('messages.about_me_text')}}
            <br>
        <a class="btn btn-outline-dark btn-lg mt-5" href="/contact">{{__('messages.contact_me')}}..</a>
    </div>
@endsection
