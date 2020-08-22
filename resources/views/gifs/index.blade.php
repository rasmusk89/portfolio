@extends('layouts.app')

@section('content')
    <div class="custom-background">
        <a class="btn btn-light" href="/projects" role="button">{{__('messages.go_back')}}</a>
    </div>
    <hr>
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>{{$description}}</p>
    @include('gifs.include.messages')
    </div>
    <div class="custom-background">
        {!! Form::open(['action' => 'GiphyController@search', 'method' => 'POST']) !!}
        <div>{{ Form::label('search', __('messages.search')) }}</div>
        <div class="form-row">
            <div
                class="col">{{ Form::text('search', '', ['class' => "form-control", 'placeholder' => __('messages.desc_gifs')])}}</div>
            <div class="col">{{ Form::submit(__('messages.search'), ['class' => 'btn btn-primary btn-md']) }}</div>
        </div>
        <div class=" dropdown">
            <p class="mt-3">{{__('messages.how_many')}}: </p>
            {{ Form::select('limit', array(1 => __('messages.one'), 5 => __('messages.five'), 10 => __('messages.ten'))) }}
        </div>
        {!! Form::close() !!}
    </div>
    <div class="custom-background">
        @if (count($images) != 0)
            <a class="btn btn-light" href="/gifs" role="button">{{__('messages.go_back')}}</a>

            <div>
                @foreach($images as $image)
                    <img class="m-2 border border-light" height="200px" src="{{$image}}" alt="{{$image}}">
                @endforeach
            </div>
        @endif
    </div>

@endsection
