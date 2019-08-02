<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GoOut</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!-- Styles -->
        <style>
             html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                /* font-weight: 200; */
                /* height: 100vh; */
                margin: 0;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 5em;
            }
            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links a:hover{
                font-weight:bold;
                text-decoration:none;
                border-bottom:1px solid #86592d;
                color: #86592d;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .full-height {
                height: 100vh;
            }
            .position-ref {
                position: relative;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <div class="">
                @if (Route::has('login'))
                    <div class="top-right links">
                        <a href="#"> Despre noi</a>
                        <a href="#"> Servicii</a>
                        <a href="#"> Contact</a>    
                        @auth
                            <a href="{{ url('/home/'.auth()->user()->id) }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>                
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
                
            <div class="content">
                <div>
                    <home-card></home-card>
                </div>
            </div>
            
        </div>
    </body>
</html>
