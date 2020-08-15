@extends('layouts.app')

@section('content')
    <a class="btn btn-dark" href="/gallery/albums" role="button">Go back</a>
    <hr>
    @include('gallery.include.messages')
    <h1>{{$album->name}}</h1>
    <hr>
    <a class="btn btn-primary" href="/gallery/photos/create/{{$album->id}}">Upload a photo</a>
@endsection
