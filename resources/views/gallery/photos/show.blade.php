@extends('layouts.app')

@section('content')
    @include('gallery.include.auth')
    <a class="btn btn-dark" href="/gallery/albums/{{$photo->album_id}}" role="button">{{__('messages.go_back')}}</a>
    <hr>

    <h3>{{$photo->title}}</h3>
    <p>{{$photo->description}}</p>

    <img src="{{ URL::asset("storage/photos/{$photo->album_id}/{$photo->photo}") }}" alt="{{$photo->title}}">
    <br><br>

    @if (! Auth::guest())
        @if ($photo->user_id == Auth::user()->id)
            {!! Form::open(['action' => ['PhotosController@destroy', $photo->id], ',method' => 'POST']) !!}

            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit(__('messages.delete_photo'), ['class' => 'btn btn-danger'])}}

            {!! Form::close() !!}
        @endif
    @endif
    <small>{{__('messages.size')}}: {{$photo->size}}</small>

@endsection
