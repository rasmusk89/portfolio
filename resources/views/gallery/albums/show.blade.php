@extends('layouts.app')

@section('content')
    @include('gallery.include.auth')
    <a class="btn btn-dark" href="/gallery/albums" role="button">{{__('messages.go_back')}}</a>
    <hr>
    @include('gallery.include.messages')
    <h1>{{$album->name}}</h1>
    <hr>

    @if (count($album->photos) > 0)
        <?php
        $colcount = count($album->photos);
        $i = 1;
        ?>
        <div id="photos">
            <div class="row text-center">
                @foreach($album->photos as $photo)
                    @if ($i == $colcount)
                        <div class="col-md-4">
                            <a href="/gallery/photos/{{$photo->id}}">
                                <img class="img-fluid m-2 p-3"
                                     src="{{ URL::asset("storage/photos/{$photo->album_id}/{$photo->photo}") }}"
                                     alt="{{$photo->title}}">
                            </a>
                            @else
                                <div class="col-md-4">
                                    <a href="/gallery/photos/{{$photo->id}}">
                                        <img class="img-fluid m-2 p-3"
                                             src="{{ URL::asset("storage/photos/{$photo->album_id}/{$photo->photo}") }}"
                                             alt="{{$photo->title}}">
                                        <br>
                                    </a>
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
            <p><strong>{{__('messages.no_photos')}}</strong></p>
        </div>
    @endif
    @if (Auth::check())
        <a class="btn btn-primary" href="/gallery/photos/create/{{$album->id}}">{{__('messages.upload_photo')}}</a>
    @else
        <p><em> {{__('messages.login_to_upload_image')}}!*</em></p>
    @endif
@endsection
