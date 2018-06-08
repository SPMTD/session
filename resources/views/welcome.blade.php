<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
        
            <title>{{ config('app.name', 'Session') }}</title>
        
            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>
        
            <!-- Fonts -->
            <link rel="dns-prefetch" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref nav-bar">
            @if (Route::has('login'))
                <div class="top-left links">
                        <a href="{{ url('/home') }}">Session</a>
                        <a href="{{ url('/spots') }}">Spots</a>
                </div>
                <div class="top-right links">
                    @auth
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
               </form>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>

            <div class="content">
                <div class="map_canvas" style="margin-bottom: 1%; width: 100vw; height: 20rem;">
                        {!! Mapper::render () !!}    
                </div>

                <div class="title">
                    <h1>Session</h1>
                </div>

                <div class="options">
                    <div class="row">
                        <a href="{{ url('/spots') }}" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 options-button">
                            <img class="options-icon" src="{{ asset('img/gm-icon.png') }}"
                            <br>
                            <h3>Spots</h3>
                        </a>
                        <a href="{{ url('/newspot') }}" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 options-button">
                            <br>
                            <p>test</p>
                        </a>
                        <a href="{{ url('/newspot') }}" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 options-button">
                            <br>
                            <p>test</p>
                        </a>
                        <a href="{{ url('/newspot') }}" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 options-button">
                            <br>
                            <p>test</p>
                        </a>
                    </div>
                </div>
            </div>
    </body>
</html>
