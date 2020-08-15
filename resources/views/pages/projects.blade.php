@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if (count($projects) > 0)
        <ul class="list-group">
            @foreach($projects as $project)
                <li class="list-group-item"><a href="#">{{$project}}</a></li>
            @endforeach
        </ul>
    @endif
@endsection
