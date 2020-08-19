<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="sticky-footer.css" rel="stylesheet">
    <title>Rasmus Kilk - {{config('app.name', 'My projects page')}}</title>
</head>
<body class="d-flex flex-column min-vh-100">
@include('include.navbar')
<div class="container">
    @yield('content')

</div>

<footer class="mt-auto">
    <ul class="text-muted text-center list-unstyled">
        <li>Rasmus Kilk 2020</li>
        <li>+372 55 83 273</li>
        <li>rasmuskilk@gmail.com</li>
    </ul>
</footer>
<script src="/js/app.js"></script>
</body>
</html>
