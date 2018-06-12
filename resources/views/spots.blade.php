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

                <div class="spots_interface">
                      
                </div>
            </div>
    </body>
</html>
