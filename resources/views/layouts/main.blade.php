<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My App</title>
        <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">        
    </head>
    <body>
        @include('partials.header')

        <script src="{{ asset('js/jquery.min.js') }}"></script>        
        <script src="{{ asset('js/materialize.min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>        
    </body>
</html>
