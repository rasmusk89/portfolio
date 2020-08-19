@extends('layouts.app')

@section('content')
    <a class="btn btn-dark" href="/projects" role="button">{{__('messages.go_back')}}</a>
    <hr>
    <div class="jumbotron text-center">
        <h1>Product API</h1>
        <p>Description of work</p>
        <a href="//rasmusk.ee/productAPI" target="_blank" class="text-decoration-none"><div class="btn btn-dark">{{__('messages.go_to')}}..</div></a>
    </div>
@endsection
