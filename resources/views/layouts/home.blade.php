<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('home.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/home.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/0ca70bde45.js" crossorigin="anonymous"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <div id="home">

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
