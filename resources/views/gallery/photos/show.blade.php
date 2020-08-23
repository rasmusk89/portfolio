@extends('layouts.app')

@section('content')
    <div class="custom-background">
        @include('gallery.include.auth')
    </div>
    <hr>
    <div class="custom-background">
        <a class="btn btn-light border border-secondary" href="/gallery/albums/{{$photo->album_id}}"
           role="button">{{__('messages.go_back')}}</a>
    </div>
    <div class="custom-background text-center">
        <h3>{{$photo->title}}</h3>
        <p>{{$photo->description}}</p>

        <a href="{{ URL::asset("gallery/albums/{$photo->album_id}/") }}">
            <img width="100%" src="{{ URL::asset("storage/photos/{$photo->album_id}/{$photo->photo}") }}"
                 alt="{{$photo->title}}">
        </a>
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
    </div>
@endsection
