@extends('layouts.app')

@section('content')
    <div class="custom-background">
        <a class="btn btn-light border border-secondary" href="/projects" role="button">{{__('messages.go_back')}}</a>
    </div>
    <hr>
    <div class="jumbotron text-center">
        <h1>{{__('projects.contacts_school_project')}}</h1>
        <p>{{__('projects.contacts_school_project_description')}}</p>
        <a href="https://github.com/rasmusk89/Contact-book" target="_blank" class="text-decoration-none">
            <div class="btn btn-dark">{{__('messages.view')}} GitHub</div>
        </a>
    </div>
@endsection
