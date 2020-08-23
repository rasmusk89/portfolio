@extends('layouts.app')

@section('content')
    <div class="custom-background">
        <a class="btn btn-light border border-secondary" href="/projects" role="button">{{__('messages.go_back')}}</a>
    </div>
    <hr>
    <div id="app">
        <div class="custom-background">
            <contacts></contacts>
        </div>
    </div>
@endsection
