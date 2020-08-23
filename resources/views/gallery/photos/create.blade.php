@extends('layouts.app')

@section('content')
    <div class="custom-background">
        @include('gallery.include.auth')
    </div>
    <hr>
    <div class="custom-background">
        <a class="btn btn-light border border-secondary" href="/gallery/albums/{{$album_id}}" role="button">{{__('messages.go_back')}}</a>
    </div>
    <div class="custom-background">
        <div class="container">
            @include('gallery.include.messages')
        </div>
        <div class="form-group ml-3">
            <h1>{{__('messages.upload_photo')}}</h1>
            {!! Form::open(['action' => 'PhotosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{ Form::label('title', __('messages.title')) }}
                {{ Form::text('title', '', ['class' => "form-control", 'placeholder' => __('messages.title') . '...']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', __('messages.description') . ' (' . __('messages.optional') . ')*') }}
                {{ Form::textarea('description', '', ['class' => "form-control", 'rows' => '3', 'placeholder' => __('messages.description') . '...']) }}
            </div>
            {{ Form::hidden('album_id', $album_id) }}
            <div class="form-group">
                {{ Form::label('photo', __('messages.choose_photo').':') }}
                {{ Form::file('photo', ['class' => 'form-control-file']) }}
            </div>
            {{ Form::submit(__('messages.submit'), ['class' => 'btn btn-primary btn-lg']) }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
