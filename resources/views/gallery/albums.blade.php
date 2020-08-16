@extends('layouts.app')

@section('content')
    @include('gallery.include.auth')
    <a class="btn btn-dark" href="/gallery" role="button">Go back</a>
    <hr>
    @include('gallery.include.messages')
    <h1>{{$title}}</h1>
    @if (count($albums) > 0)
        <?php
        $colcount = count($albums);
        $i = 1;
        ?>
        <div id="albums">
            <div class="row text-center">
                @foreach($albums as $album)
                    @if ($i == $colcount)
                        <div class="col-md-4">
                            <a href="/gallery/albums/{{$album->id}}">
                                <img class="img-thumbnail m-2 p-3"
                                     src="{{ URL::asset("storage/album_covers/{$album->cover_image}") }}"
                                     alt="{{$album->name}}">
                                <br>
                            </a>
                            <h4>{{$album->name}}</h4>
                            @else
                                <div class="col-md-4">
                                    <a href="/gallery/albums/{{$album->id}}">
                                        <img class="img-thumbnail m-2 p-3"
                                             src="{{ URL::asset("storage/album_covers/{$album->cover_image}") }}"
                                             alt="{{$album->name}}">
                                        <br>
                                    </a>
                                    <h4>{{$album->name}}</h4>
                                    <br>
                                    <br>
                                    @endif
                                    @if ($i % 3 == 0)
                                </div>
                        </div>
                        <div class="row text-center">
                            @else
                        </div>
                    @endif
                    <?php $i++; ?>
                @endforeach
            </div>
        </div>
    @else
        <div>
            <p><strong>No albums to display</strong>
        </div>
    @endif
    @if (Auth::check())
        <div>
            <a class="btn btn-primary" href="/gallery/create">Create new album</a>
        </div>
    @else
        <div>
            <p><em> Log in to create an album!*</em></p>
        </div>
    @endif

@endsection
