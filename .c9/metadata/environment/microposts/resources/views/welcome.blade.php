{"filter":false,"title":"welcome.blade.php","tooltip":"/microposts/resources/views/welcome.blade.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":95,"column":0},"action":"remove","lines":["<!doctype html>","<html lang=\"{{ app()->getLocale() }}\">","    <head>","        <meta charset=\"utf-8\">","        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","        <title>Laravel</title>","","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Raleway:100,600\" rel=\"stylesheet\" type=\"text/css\">","","        <!-- Styles -->","        <style>","            html, body {","                background-color: #fff;","                color: #636b6f;","                font-family: 'Raleway', sans-serif;","                font-weight: 100;","                height: 100vh;","                margin: 0;","            }","","            .full-height {","                height: 100vh;","            }","","            .flex-center {","                align-items: center;","                display: flex;","                justify-content: center;","            }","","            .position-ref {","                position: relative;","            }","","            .top-right {","                position: absolute;","                right: 10px;","                top: 18px;","            }","","            .content {","                text-align: center;","            }","","            .title {","                font-size: 84px;","            }","","            .links > a {","                color: #636b6f;","                padding: 0 25px;","                font-size: 12px;","                font-weight: 600;","                letter-spacing: .1rem;","                text-decoration: none;","                text-transform: uppercase;","            }","","            .m-b-md {","                margin-bottom: 30px;","            }","        </style>","    </head>","    <body>","        <div class=\"flex-center position-ref full-height\">","            @if (Route::has('login'))","                <div class=\"top-right links\">","                    @auth","                        <a href=\"{{ url('/home') }}\">Home</a>","                    @else","                        <a href=\"{{ route('login') }}\">Login</a>","                        <a href=\"{{ route('register') }}\">Register</a>","                    @endauth","                </div>","            @endif","","            <div class=\"content\">","                <div class=\"title m-b-md\">","                    Laravel","                </div>","","                <div class=\"links\">","                    <a href=\"https://laravel.com/docs\">Documentation</a>","                    <a href=\"https://laracasts.com\">Laracasts</a>","                    <a href=\"https://laravel-news.com\">News</a>","                    <a href=\"https://forge.laravel.com\">Forge</a>","                    <a href=\"https://github.com/laravel/laravel\">GitHub</a>","                </div>","            </div>","        </div>","    </body>","</html>",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":8,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"center jumbotron\">","        <div class=\"text-center\">","            <h1>Welcome to the Microposts</h1>","        </div>","    </div>","@endsection"],"id":3}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":8,"column":11},"end":{"row":8,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":11,"mode":"ace/mode/php"}},"timestamp":1528427850534,"hash":"1f5c710a946e16a6d7098a9cc2a55a021f769325"}