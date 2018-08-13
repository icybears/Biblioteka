<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Biblioteka: Admin Area</title>
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    </head>
    <body>
        @include('partials.admin-header')

        @yield('content')

        <script src="{{ asset('js/jquery.min.js') }}"></script>        
        <script src="{{ asset('js/materialize.min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>        
    </body>
</html>