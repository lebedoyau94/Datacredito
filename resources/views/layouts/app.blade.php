<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html, body {
            min-height: 100%;
        }

        body{
            background-color:#323f53;
        }

        .menu-section{
            width: 100vw;
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 9vh;
        }

        .logo-container{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 5rem;
            height: 6vh;
            border: 1px solid white;
        }

        h1{
            text-transform: uppercase;
            color: white;
            font-size: 1rem;
        }

        .content-section{
            background-color: white;
            height: 100vh;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            overflow-x: hidden;
        }

        .first-boxes{
            display: flex;
            margin:0 10px;
        }

        .box{
            border: 1px solid gray;
            width: 50%;
            margin: 10px 5px;
            padding: 5px;
            border-radius: 5px;
            color: #f7f6f9;
        }

        .box p, .text-perfil p{
            font-size: 12px;
            font-weight: lighter;
        }

        .vida{
            background-color: #652d91;
            cursor: pointer;
        }

        .soluciones{
            color: #46546a;
            cursor: pointer;
        }

        .perfil-box{
            display: flex;
            margin: 5px 10px;
        }

        .text-perfil{
            margin-left: 10px;
        }

        .text-perfil h5{
            color: #3c4b62;
        }

        .piloto-word{
            color: #f7992a;
            margin: 0 10px;
        }

        .circle-box{
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            align-items: center;
            margin-top: 1rem;
        }

        .circle{
            width: 100px;
            height: 100px;
            background-color: #652d91;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .white-circle{
            width: 110px;
            height: 110px;
            background-color: rgb(255, 255, 255);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .color-circle{
            background-color: rgb(60,140,203);
            background: linear-gradient(90deg, rgba(60,140,203,1) 0%, rgba(143,122,181,1) 50%, rgba(223,71,147,1) 100%);
            border-radius: 50%;
            width: 120px;
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 1rem 0;
        }

        .number-white{
            color: white;
            font-size: 30px;
        }

        .orange-box{
            background-color: #f7992a;
            width: 13rem;
            text-align: center;
            padding: 5px 10px;
            color: white;
        }

        .recomendaciones-box{
            margin: 1rem .5rem;
        }

        .recomendaciones-box h5, .deudas-box h5, .progress-box h5, .text-box h5{
            text-align: center;
            font-size: 16px;
            color: #3e4c63;
            font-weight: bold;
        }

        .recomendaciones-box .first-line, .recomendaciones-box .sec-line{
            display: flex;

        }

        .info-box{
            display: flex;
            font-size: 11px;
            margin: 1rem;
            color: #404e65;
            width: 120px;
            align-items: center;
        }

        .info-box p{
            margin-left: 10px;
        }

        .deudas-box{
            margin: 1rem 0.5rem 0 0.5rem;
        }

        .deudas-box h5{
            text-align: center;
        }

        .prestamo-box{
            display: flex;
            align-items: center;
            background-color: #3c4b62;
            width: 50%;
            justify-content: center;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            color: white;
            margin: 1rem 0 0 0;
            height: 30px;
            font-size: 18px;
        }

        .prestamo-box h6{
            margin-right: 10px;
        }

        .boxes-container{
            display: flex;

        }

        .estado-box{
            width: 50%;
            font-size: 12px;
            background-color: #f7992a;
            height: 25px;
            margin: 5px 5px 0 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            color: #414d60;
        }

        .acuerdo-box{
            width: 50%;
            font-size: 12px;
            background-color: #d1d2d4;
            height: 25px;
            margin: 5px 0 0 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            font-weight: bold;
            color: #414d60;
        }

        .atrazado{
            font-weight: bold;
        }

        .mini-text-box{
            margin: 0 0.5rem;
            border: 1px solid grey;
            height: 280px;
        }

        .container{
            display: flex;
            justify-content: space-around;
            width: 100%;
            text-align: center;
            height: 50px;
            color: #46556a;
            font-size: 12px;
            align-items: center;
        }

        .bold{
            font-weight: bold;
        }

        .horizontal-box{
            display: flex;
            font-size: 12px;
            justify-content: space-around;
            color: #414d60;
        }

        .progress-box{
            margin: 1rem 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .progress-bar{
            display: flex;
            align-items: center;
            background: rgb(0,212,255);
            background: linear-gradient(90deg, rgba(0,212,255,1) 0%, rgba(255,0,208,1) 100%);
            border-radius: 5px;
            height: 25px;
            font-size: 12px;
            color: white;
            font-weight: bold;
            width: 250px;
            justify-content: space-around;
            margin: 1rem 0 0 0;
        }

        .star{
            clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
            width: 60px;
            height: 60px;
            background-color: yellow;
            position: absolute;
            right: 0;
            top: 10px;
            font-size: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .progress-box .tiny{
            font-size: 8px;
            margin-top: 0;
            color: #455368;
            margin-top: 5px;
        }

        .progress-box .long{
            text-align: center;
            margin: 1rem 1rem;
            font-size: 12px;
            color: #455368;
        }

        .gradient-box{
            margin: 0 0.5rem;
            background: rgb(216,191,216);
            background: linear-gradient(0deg, rgba(216,191,216,1) 0%, rgba(223,239,253,1) 38%);
            padding: 1rem 0 0 0;
            height: auto;
        }

        .text-box{
            text-align: center;
        }

        .text-box p{
            color: #5f6d7f;
        }

        .blue-circle {
            height: 100px;
            border-radius: 50%;
            border: 3px solid #58677c;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100px;
        }

        .blue-circle span{
            font-size: 24px;
        }

        .blue-circle p{
            font-size: 12px;
            text-align: center;
        }

        .flex-container{
            display: flex;
            margin: 1rem 0 0 0;
        }

        .circles-container{
            display: flex;
            flex-wrap: wrap;
            width: 105px;
            height: 160px;
            margin: 1rem;
        }

        .little-circle{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            color: white;
        }

        .purple{
            background-color: #652d91;
        }

        .green{
            background-color: #8bc63e;
        }

        .orange{
            background-color: #fbb03f;
        }

        .recom-box{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-right: 1rem;
            width: 70%;
        }

        .recom-box h6, .cuotas-box h6{
            font-size: 16px;
            color: #3c4b62;
        }

        .text-circle-box{
            text-align: center;
            font-size: 12px;
            color: #3c4b62;
        }


        .cuotas-box{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            margin: 1rem 10px 1rem 10px;
            height: 200px;
            width: 45%;
        }

        .last-container{
            display: flex;
            justify-content: center;
        }

        .big-circle{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            color: white;
        }

        .big-circle span{
            font-size: 30px;
        }

        .last{
            margin-bottom: 50px;
        }

        .menu{
            display: flex;
            flex-direction: column;
        }

        .menu nav{
            position: absolute;
            background-color: #323f53;
            width: 230px;
            height: 100vh;
            top: 54px;
            right: 0;
        }

        nav ul{
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            margin: 1rem;
            height: 150px;
        }

        nav ul li{
            list-style: none;

        }

        nav ul li a{
            color: white;
            text-decoration: none;
        }

        .menu-text{
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: 1rem;
            height: 150px;
            color: white;
        }

        .menu-text h5{
            margin: 1rem 0;
            color: white;
            font-size: 20px;
        }

        .menu-section button{
            background-color: transparent;
            width: 2rem;
            height: 2rem;
            border: none;
        }

        .menu-section button:active{
            transform: translateY(3px);
        }

        .menu-web{
            display: none;
        }

        .container-number-cuotas{
            width: 40%;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .soluciones-financieras-web{
            display: none;
        }


        @media only screen and (min-width: 375px) {

            .perfil-box {
                display: flex;
                margin: 2rem;
                align-items: center;
            }

            .recomendaciones-box {
                margin: 2rem;
            }

            .info-box {
                display: flex;
                font-size: 14px;
                margin: 1rem 0;
                width: auto;
                align-items: center;
                justify-content: center;
            }

            .star {
                right: 14px;
                top: 10px;
            }


            .text-box {
                margin: 0 1rem;
            }

            .text-circle-box {
                font-size: 14px;
            }

            .recomendaciones-box h5, .deudas-box h5, .progress-box h5, .text-box h5 {
                font-size: 18px;
            }
        }

        @media only screen and (min-width: 425px){
            .recomendaciones-box h5, .deudas-box h5, .progress-box h5, .text-box h5 {
                font-size: 20px;
            }

            .text-perfil {
                margin-left: 1rem;
                font-size: 20px;
            }

            .text-perfil p {
                font-size: 14px;

            }

            .circle-box h4{
                font-size: 18px;
            }

            .circle {
                width: 120px;
                height: 120px;
            }

            .white-circle {
                width: 130px;
                height: 130px;
            }

            .color-circle {
                width: 140px;
                height: 140px;
            }

            .orange-box {
                width: 15rem;
                font-size: 18px;
            }

            .container,
            .horizontal-box,
            .progress-box .long {
                font-size: 14px;
            }

            .progress-box .tiny {
                font-size: 12px;
            }

            .star {
                width: 80px;
                height: 80px;
                right: 25px;
                top: 0;
                font-size: 10px;
            }

            .prestamo-box {
                font-size: 20px;
            }

            .estado-box, .acuerdo-box {
                font-size: 14px;
            }



            .menu nav {
                width: 290px;
            }

        }

        @media only screen and (min-width: 768px){

            .menu-web{
                height: 100vh;
                width: 250px;
                background-color: #323f53;
                display: block;
                grid-area: menu;
            }

            .menu-section {
                display: none;
            }

            body{
                display: grid;
                grid-template-areas: "menu content";
            }

            ul h5{
                margin: 1rem 0;
                color: white;
                font-size: 15px;
            }

            li a span:nth-child(2){
                margin-left: 5px;
            }

            .center-container{
                height: 100px;
                display: flex;
                justify-content: center;
                align-items: flex-end;
            }

            .logo-container {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 8rem;
                height: 9vh;
                border: 1px solid white;
            }

            .menu-text {
                height: 100px;
            }

            .last-part-menu{
                width: 100%;
                margin-top: 20px;
                display: flex;
                flex-direction: column;

            }

            .exit{
                width: 30px;
                height: 30px;
                background-color: white;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-right: 10px;
                font-size: 12px;
                color: #323f53;
            }

            .exit-box{
                width: 100%;
                display: flex;
                justify-content: end;
            }

            .hello-box{
                width: 100%;
                display: flex;
                align-items: center;
                padding: 1rem 0;
            }

            .blue-help-circle{
                width: 50px;
                max-width: 50px;
                height: 1rem;
                background-color: blue;
                margin: 0 1rem;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                font-size: 12px;
            }

            .hello-content{
                width: auto;
                font-size: 12px;
                background-color: #e1e1e5;
                margin: 0 10px 0 0;
                color: gray;
                border-radius: 5px;
                padding: 1rem 1rem;

            }

            .hello-content p{
                margin-bottom: 10px;
            }

            .answer-box{
                width: 100%;
                display: flex;
                align-items: center;
                background-color: transparent;
                display: flex;
                justify-content: end;
            }


            .answer{
                background-color: #bdd3e0;
                width: 75%;
                margin: 0 10px 0 0;
                height: 30px;
                display: flex;
                align-items: center;
                color: gray;
                border-radius: 5px;
                font-size: 12px;
                padding: 1rem 1rem;
            }


            .grid-box {
                display: grid;
                grid-template-columns: 300px 150px;
            }

            .perfil-box {
                margin: 1rem;
            }

            .orange-box {
                width: 14rem;
            }

            .info-box {
                margin: 20px;
            }

            .container, .horizontal-box, .progress-box .long {
                font-size: 15px;
            }

            .text-circle-box {
                margin: 0 1rem;
            }

            .soluciones{
                display: none;
            }

            .vida {
                background-color: transparent;
                cursor: none;
                color: #323f53;
                border: none;
                font-size: 30px;
            }

            .progress-bar {
                height: 25px;
                font-size: 20px;
                width: 380px;
            }

        }

        /* @media only screen and (min-width: 1440px){
            body{
                display: grid;
                grid-template-areas: "menu vida soluciones";
                grid-template-columns: 1fr 2fr 2fr;
            }

            .content-section{
                grid-area: vida;
            }

            .grid-box {
                display: grid;
                grid-template-columns: 300px 150px;
                justify-content: space-around;
            }
        } */

        @media only screen and (min-width: 1024px){

            .grid-box {
                display: grid;
                grid-template-columns: 400px 180px;
                justify-content: space-around;
            }

            .text-perfil {
                margin-left: 1rem;
                font-size: 26px;
            }

            .text-perfil p {
                font-size: 16px;
            }

            .vida {
                font-size: 40px;
            }

            .box p, .text-perfil p {
                font-size: 18px;
            }

            .info-box p {
                margin-left: 10px;
                font-size: 20px;
            }

            .recomendaciones-box h5, .deudas-box h5, .progress-box h5, .text-box h5 {
                font-size: 25px;
            }

            .container, .horizontal-box, .progress-box .long {
                font-size: 20px;
                margin-bottom: 1rem;
            }

            .mini-text-box {
                height: 380px;
            }

            .progress-bar {
                height: 30px;
                font-size: 20px;
                width: 580px;
            }

            .progress-box .tiny {
                font-size: 16px;
            }

            .grid-auto-columns {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
                /* align-content: center; */
                /* justify-content: center; */
                align-items: center;
                justify-items: center;
            }

            .container-number-cuotas {
                width: 50%;
            }

            .recom-box {
                width: 50%;
            }

            .text-circle-box {
                font-size: 18px;
            }

            .big-circle {
                width: 90px;
                height: 90px;
            }

            .blue-circle {
                height: 150px;
                width: 150px;
            }

            .blue-circle p {
                font-size: 18px;
            }

            .blue-circle span {
                font-size: 45px;
            }

            .recom-box h6, .cuotas-box h6, .text-box p {
                font-size: 20px;
            }

            .prestamo-flex-box {
                display: flex;
                align-items: center;
            }

            .prestamo-flex-box .estado-box, .prestamo-flex-box .acuerdo-box {
                display: flex;
                align-items: center;
                width: 200px;
                justify-content: center;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                height: 30px;
                margin-top: 1rem;
            }

            .prestamo-box {
                width:200px;
                margin-right: 10px;
                margin-left: 10px;
            }

            .prestamo-flex-box .acuerdo-box{
                margin-left: 5px;
            }
        }

    </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        {{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>--}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
