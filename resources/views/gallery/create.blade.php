@extends('layouts.app')

@section('content')
    @include('gallery.include.navbar')
    <div class="container">
        @include('gallery.include.messages')
    </div>
    <div class="form-group ml-3">
        <h1>{{$title}}</h1>
        {!! Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
             <div class="form-group">
                 {{ Form::label('title', 'Title') }}
                 {{ Form::text('title', '', ['class' => "form-control", 'placeholder' => "Album title"]) }}
             </div>
            <div class="form-group">
                {{ Form::label('description', 'Album description (optional)*') }}
                {{ Form::textarea('description', '', ['class' => "form-control", 'rows' => '3', 'placeholder' => "Album description"]) }}
            </div>
            <div class="form-group">
                {{ Form::label('cover_image', 'Choose a cover image') }}
                {{ Form::file('cover_image', ['class' => 'form-control-file']) }}
            </div>
            {{ Form::submit('Submit', ['class' => 'btn btn-primary btn-lg']) }}
        {!! Form::close() !!}
    </div>
@endsection
