@extends('layouts.app')

@section('content')
    <div class="custom-background">
        <a class="btn btn-light border border-secondary" href="/" role="button">{{__('messages.go_back')}}</a>
    </div>
    <hr>

    <div class="jumbotron text-center">
        <h1>{{__('messages.contact')}}</h1>
        <br><br>
        <div class="row">
            <div class="col-md-6 order-sm-1">
                <ul class="text-left">
                    <li>{{__('messages.phone')}}: +372 55 83 273</li>
                    <li>{{__('messages.email')}}: rasmuskilk@gmail.com</li>
                    <li>LinkedIn: <a target="_blank" href="//www.linkedin.com/in/rasmus-kilk">linkedin.com/in/rasmus-kilk</a>
                    </li>
                </ul>
                <br>
            </div>
            <div class="col-md-6 order-sm-12">
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
