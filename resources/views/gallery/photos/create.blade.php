@extends('layouts.app')

@section('content')
    <a class="btn btn-dark" href="javascript:history.back()" role="button">Go back</a>
    <hr>
    <div class="container">
        @include('gallery.include.messages')
    </div>
    <div class="form-group ml-3">
        <h1>Upload a photo</h1>
        {!! Form::open(['action' => 'PhotosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', '', ['class' => "form-control", 'placeholder' => "Photo title"]) }}
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Photo description (optional)*') }}
            {{ Form::textarea('description', '', ['class' => "form-control", 'rows' => '3', 'placeholder' => "Photo description"]) }}
        </div>
            {{ Form::hidden('album_id', $album_id) }}
        <div class="form-group">
            {{ Form::label('photo', 'Choose a photo') }}
            {{ Form::file('photo', ['class' => 'form-control-file']) }}
        </div>
        {{ Form::submit('Submit', ['class' => 'btn btn-primary btn-lg']) }}
        {!! Form::close() !!}
    </div>
@endsection
