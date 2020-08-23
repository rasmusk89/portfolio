@extends('layouts.app')

@section('content')
    <div class="custom-background">
        @include('gallery.include.auth')
    </div>
    <hr>
    <div class="custom-background">
        <a class="btn btn-light border border-secondary" href="/gallery" role="button">{{__('messages.go_back')}}</a>
    </div>
    @include('gallery.include.messages')
    <div class="custom-background">
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
                <p><strong>{{__('messages.no_albums')}}</strong>
            </div>
        @endif
        @if (Auth::check())
            <div>
                <a class="btn btn-primary m-2" href="/gallery/create">{{__('messages.create_album')}}</a>
            </div>
        @else
            <div>
                <p><em> {{__('messages.login_to_create_album')}}!*</em></p>
            </div>
        @endif
    </div>

@endsection
