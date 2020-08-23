@extends('layouts.app')

@section('content')
    <div class="custom-background">
        <a class="btn btn-light border border-secondary" href="/gallery" role="button">{{__('messages.go_back')}}</a>
    </div>
    <hr>
    <div class="custom-background">
        @include('gallery.include.auth')
    </div>
    <hr>
    <div class="custom-background">
        <div class="container">
            @include('gallery.include.messages')
        </div>
        <div class="form-group ml-3">
            <h1>{{$title}}</h1>
            {!! Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{ Form::label('title', __('messages.title')) }}
                {{ Form::text('title', '', ['class' => "form-control", 'placeholder' => __('messages.title') . '...']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', __('messages.description') . ' (' . __('messages.optional') . ')*') }}
                {{ Form::textarea('description', '', ['class' => "form-control", 'rows' => '3', 'placeholder' => __('messages.description') . '...']) }}
            </div>
            <div class="form-group">
                {{ Form::label('cover_image', __('messages.choose_cover_image') . ':') }}
                {{ Form::file('cover_image', ['class' => 'form-control-file']) }}
            </div>
            {{ Form::submit(__('messages.submit'), ['class' => 'btn btn-primary btn-lg']) }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
