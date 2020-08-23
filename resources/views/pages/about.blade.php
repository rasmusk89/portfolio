@extends('layouts.app')

@section('content')
    <div class="custom-background">
        <a class="btn btn-light border border-secondary" href="/" role="button">{{__('messages.go_back')}}</a>
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
                    <li><strong>{{__('about.name')}}</strong>: Rasmus Kilk</li>
                    <li><strong>{{__('about.location')}}</strong>: Tartu, Eesti</li>
                </ul>
            </div>

        </div>
        <h3>{{__('about.education')}}</h3>
        <div class="border border-bottom border-dark"></div>
        <ul class="list-unstyled">
            <li>
                &nbsp;<strong>{{__('about.university')}}</strong><br>
                <em>{{__('about.distant')}}</em><br>
                &nbsp;2019 -<br>
                &nbsp;{{__('about.field')}}<br>
            </li>
            <hr>
            <li>
                &nbsp;<strong>Kose Gümnaasium</strong><br>
                &nbsp;2006 - 2009<br>
                &nbsp;{{__('about.secondary')}}<br>
            </li>
            <hr>
            <li>
                &nbsp;<strong>Roosna-Alliku Põhikool</strong><br>
                &nbsp;1997 - 2006<br>
                &nbsp;{{__('about.basic')}}<br>
            </li>
            <br>
            <h3>{{__('about.certificates')}}</h3>
            <div class="border border-bottom border-dark"></div>
            <li>
                <strong>{{__('about.front_end')}}</strong><br>
                &nbsp;IT Koolitus - 2019<br>
                &nbsp;72 {{__('about.academical_hours')}}<br>
                &nbsp;<em>Git, HTML, CSS, JavaScript, DOM, JSON, AJAX, unit test, SEO</em><br>
            </li>
            <hr>
            <li>
                <strong>{{__('about.it_specialist')}}</strong><br>
                &nbsp;N.O.R.T Koolitus - 2018<br>
                &nbsp;40 {{__('about.academical_hours')}}<br>
                &nbsp;<em>{{__('about.hardware')}}</em><br>
            </li>
            <br>
        </ul>
        <h3>{{__('about.skills')}}</h3>
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
            <li>Wordpress</li>
        </ul>
        <div class="text-center">
            <a class="btn bg-light btn-lg mt-5 border border-dark" href="/contact">{{__('messages.contact_me')}}..</a>
        </div>
    </div>
@endsection
