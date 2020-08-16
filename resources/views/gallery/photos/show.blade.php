@extends('layouts.app')

@section('content')
    <a class="btn btn-dark" href="/gallery/albums/{{$photo->album_id}}" role="button">Go back</a>
    <hr>

    <h3>{{$photo->title}}</h3>
    <p>{{$photo->description}}</p>

    <img src="{{ URL::asset("storage/photos/{$photo->album_id}/{$photo->photo}") }}" alt="{{$photo->title}}">
    <br><br>

    {!! Form::open(['action' => ['PhotosController@destroy', $photo->id], ',method' => 'POST']) !!}

        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete photo', ['class' => 'btn btn-danger'])}}

    {!! Form::close() !!}
    <small>Size: {{$photo->size}}</small>

@endsection
