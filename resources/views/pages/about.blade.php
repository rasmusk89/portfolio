@extends('layouts.app')

@section('content')
    <div class="custom-background">
        <a class="btn btn-light" href="/" role="button">{{__('messages.go_back')}}</a>
    </div>
    <hr>
    <div class="jumbotron text-center">
        <h1 class="mb-3 text-center">{{$title}}</h1>
        <div class="row">
            <div class="col-md-6 order-lg-12 order-sm-1 align-self-center">
                <img src="storage/profile/profile.jpg" alt="profile image" height="200em" class="rounded-circle mb-3">
            </div>
            <div class="col-md-6 order-lg-1 order-sm-12 align-self-center">
                <ul class="list-unstyled">
                    <li><strong>Nimi</strong>: Rasmus Kilk</li>
                    <li><strong>Elukoht</strong>: Tartu, Eesti</li>
                </ul>
            </div>

        </div>
        <h3>Haridus</h3>
        <div class="border border-bottom border-dark"></div>
        <ul class="list-unstyled">
            <li>
                &nbsp;<strong>Tallinna Tehnikaülikool</strong><br>
                &nbsp;2019 -<br>
                &nbsp;IT süsteemide arendamise eriala kaugõppena<br>
            </li>
            <hr>
            <li>
                &nbsp;<strong>Kose Gümnaasium</strong><br>
                &nbsp;2006 - 2009<br>
                &nbsp;Keskharidus<br>
            </li>
            <hr>
            <li>
                &nbsp;<strong>Roosna-Alliku Põhikool</strong><br>
                &nbsp;1997 - 2006<br>
                &nbsp;Põhiharidus<br>
            </li>
            <br>
            <h3>Koolitused</h3>
            <div class="border border-bottom border-dark"></div>
            <li>
                <strong>Tarkvaraarenduse Front-End</strong><br>
                &nbsp;IT Koolitus<br>
                &nbsp;Mai 2019<br>
                &nbsp;72 akadeemilist tundi<br>
                &nbsp;<em>Git, HTML, CSS, JavaScript, DOM, JSON, AJAX, unit test, SEO</em><br>
            </li>
            <hr>
            <li>
                <strong>IT-Spetsialisti/arvutitarkvara hooldaja kesktaseme koolitus</strong><br>
                &nbsp;N.O.R.T Koolitus<br>
                &nbsp;Oktoober 2018<br>
                &nbsp;40 akadeemilist tundi<br>
                &nbsp;<em>Riistvara, tarkvara, võrk ja veeb, turvalisus, pilveteenused</em><br>
            </li>
            <br>
        </ul>
        <h3>Oskused</h3>
        <div class="border border-bottom border-dark"></div>
        <ul class="text-center list-unstyled">
            <li>PHP</li>
            <li>JAVA</li>
            <li>Python</li>
            <li>HTML5</li>
            <li>CSS</li>
            <li>MySQL</li>
            <li>Laravel</li>
            <li>REST API</li>
            <li>VUE.JS</li>
        </ul>
        <div class="text-center">
            <a class="btn bg-light btn-lg mt-5 border border-dark" href="/contact">{{__('messages.contact_me')}}..</a>
        </div>
    </div>
@endsection
