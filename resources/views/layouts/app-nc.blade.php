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
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/0ca70bde45.js" crossorigin="anonymous"></script>
    @stack('scripts')





<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}"  rel="stylesheet">
    @stack('styles')

</head>
<body>
    <div id="app">

        <main>

            <nav>
                <div class="nav-wrapper">
                    <div class="title">
                        <p>Sedlak <small>&</small> Sedlak</p>
                    </div>
                    <div class="user"></div>
                    <ul>
                        <li class="{{Request::is('app') ? 'active' : ''}}"><a href="{{route('app')}}"><img src="{{url('images/icons/home.png')}}" alt="" class="icon">Home</a></li>
                        <li class="{{Request::is('section') ? 'active' : ''}}"><a href="{{route('section')}}"><img src="{{url('images/icons/rocket.png')}}" alt="" class="icon">Sekcje</a></li>
                        <li><a href=""><img src="{{url('images/icons/files.png')}}" alt="" class="icon">Projekty</a></li>
                        <li><a href=""><img src="{{url('images/icons/list.png')}}" alt="" class="icon">Pod projekty</a></li>
                        <li><a href=""><img src="{{url('images/icons/gear.png')}}" alt="" class="icon">Zadania</a></li>
                        <li><a href=""><img src="{{url('images/icons/user.png')}}" alt="" class="icon">Aktywność</a></li>
                    </ul>
                    <ul class="logout">
                        <li><a class="" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">

                                <img src="{{url('images/icons/logout.png')}}" alt="" class="icon">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form></li>

                    </ul>
                </div>
            </nav>

            <div class="main-content">

                    @yield('content')
            </div>

        </main>
    </div>
</body>
</html>
