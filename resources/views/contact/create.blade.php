@extends('layouts.app')

@section('content')
    <a class="btn btn-dark" href="/" role="button">{{__('messages.go_back')}}</a>
    <hr>
    <div class="jumbotron text-center">
        <h1>{{__('messages.contact_me')}}</h1>
        <br><br>
        <div class="row">
            <div class="col-6">
                <ul class="text-left">
                    <li>{{__('messages.phone')}}: +372 55 83 273</li>
                    <li>{{__('messages.email')}}: rasmuskilk@gmail.com</li>
                    <li>LinkedIn: <a target="_blank" href="//www.linkedin.com/in/rasmus-kilk">linkedin.com/in/rasmus-kilk</a></li>
                </ul>
            </div>
            <div class="col-6">
                @include('gallery.include.messages')
                <h4 class="mb-2">{{__('messages.send_me_message')}}</h4>
                <hr>
                {!! Form::open(['action' => 'ContactFormController@store', 'method' => 'POST']) !!}
                <div class="form-group text-left">
                    {{ Form::label('name', __('messages.name') . ':') }}
                    {{ Form::text('name', '', ['class' => "form-control", 'placeholder' => __('messages.enter_name')]) }}
                </div>
                <div class="form-group text-left">
                    {{ Form::label('email', __('messages.email') . ':') }}
                    {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => __('messages.enter_email')]) }}
                </div>
                <div class="form-group text-left">
                    {{ Form::label('message', __('messages.message') . ':') }}
                    {{ Form::textarea('message', '', ['class' => 'form-control', 'rows' => '3', 'placeholder' => __('messages.enter_message')]) }}
                </div>
                {{ Form::submit(__('messages.send_message'), ['class' => 'btn btn-primary btn-lg']) }}
                {!! Form::close() !!}
            </div>
        </div>

    </div>
@endsection
