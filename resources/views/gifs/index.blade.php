@extends('layouts.app')

@section('content')
    <div class="custom-background">
        <a class="btn btn-light border border-secondary" href="/projects" role="button">{{__('messages.go_back')}}</a>
    </div>
    <hr>
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>{{__('projects.gifs_description')}}</p>
        @include('gifs.include.messages')
    </div>
    <div class="custom-background">
        {!! Form::open(['action' => 'GiphyController@search', 'method' => 'POST']) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="m-1">
                    {{ Form::text('search', '', ['class' => "form-control", 'placeholder' => __('messages.desc_gifs')])}}
                </div>
                <div class="m-1">
                    {{ Form::submit(__('messages.search'), ['class' => 'btn btn-primary btn-md']) }}
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <p>{{__('messages.how_many')}}:</p>
                </div>
                <div>
                    {{ Form::select('limit', array(1 => __('messages.one'), 5 => __('messages.five'), 10 => __('messages.ten'))) }}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <div class="custom-background">
        @if (count($images) != 0)
            <a class="btn btn-light border border-secondary" href="/gifs" role="button">{{__('messages.go_back')}}</a>

            <div>
                @foreach($images as $image)
                    <img class="m-2 border border-light" style="max-width: 300px;max-height: 200px" src="{{$image}}"
                         alt="{{$image}}">
                @endforeach
            </div>
        @endif
    </div>

@endsection
