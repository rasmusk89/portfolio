@extends('layouts.app')

@section('content')
    <a class="btn btn-dark" href="/projects" role="button">{{__('messages.go_back')}}</a>
    <hr>
        <div id="app">
            <contacts></contacts>
        </div>
@endsection
