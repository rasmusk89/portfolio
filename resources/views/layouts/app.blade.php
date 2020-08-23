<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css?v=').time()}}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
{{--    <link rel="icon" href="{{ URL::asset('favicon1.png') }}" type="image/x-icon"/>--}}
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <title>Rasmus Kilk - {{config('app.name', 'My projects page')}}</title>
</head>
<body >
<div class="background">
<div class="d-flex flex-column min-vh-100">
    @include('include.navbar')
    <div class="container">
        @yield('content')
    </div>
    <footer class="mt-auto footer">
        <ul class="text-muted text-center list-unstyled">
            <li>Rasmus Kilk 2020</li>
            <li>+372 55 83 273</li>
            <li>rasmuskilk@gmail.com</li>
        </ul>
    </footer>
</div>
</div>
<script src={{ asset('js/app.js') }}></script>
</body>
</html>

