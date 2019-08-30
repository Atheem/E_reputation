<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
       <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
       <link rel="stylesheet" href="{{ asset('/css/mat.css') }}">
       <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

        <!-- Styles -->
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img src="Assets/ebf.png" alt="">
                </div>
                <div>
                    <svg width="100%" height="100%" viewBox=" 90 " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                        <path id="path">
                               <animate attributeName="d" from="m0,110 h0" to="m0,110 h1100" dur="6.8s" begin="0s" repeatCount="indefinite"/>
                           </path>
                           <text font-size="18"  fill='hsla(20, 15%, 10%, 1)'>
                               <textPath xlink:href="#path">Marrakech E-reputation system.
                           </textPath>
                           </text>
                       </svg>
                </div>
                
            </div>
        </div>
        <script src="/js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
        <script src="/js/js.js"></script>
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>
