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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .section_our_solution .row {
            align-items: center;
        }

        .our_solution_category {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .our_solution_category .solution_cards_box {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .solution_cards_box .solution_card {
            flex: 0 50%;
            background: #fff;
            box-shadow: 0 2px 4px 0 rgba(136, 144, 195, 0.2),
                0 5px 15px 0 rgba(37, 44, 97, 0.15);
            border-radius: 15px;
            margin: 8px;
            padding: 10px 15px;
            position: relative;
            z-index: 1;
            overflow: hidden;
            min-height: 265px;
            transition: 0.7s;
        }

        .solution_cards_box .solution_card:hover {
            background: #309df0;
            color: #fff;
            transform: scale(1.1);
            z-index: 9;
        }

        .solution_cards_box .solution_card:hover::before {
            background: rgb(85 108 214 / 10%);
        }

        .solution_cards_box .solution_card:hover .solu_title h3,
        .solution_cards_box .solution_card:hover .solu_description p {
            color: #fff;
        }

        .solution_cards_box .solution_card:before {
            content: "";
            position: absolute;
            background: rgb(85 108 214 / 5%);
            width: 170px;
            height: 400px;
            z-index: -1;
            transform: rotate(42deg);
            right: -56px;
            top: -23px;
            border-radius: 35px;
        }

        .solution_cards_box .solution_card:hover .solu_description button {
            background: #fff !important;
            color: #309df0;
        }

        .solution_card .so_top_icon {}

        .solution_card .solu_title h3 {
            color: #212121;
            font-size: 1.3rem;
            margin-top: 13px;
            margin-bottom: 13px;
        }

        .solution_card .solu_description p {
            font-size: 15px;
            margin-bottom: 15px;
        }

        .solution_card .solu_description button {
            border: 0;
            border-radius: 15px;
            background: linear-gradient(140deg,
                    #42c3ca 0%,
                    #42c3ca 50%,
                    #42c3cac7 75%) !important;
            color: #fff;
            font-weight: 500;
            font-size: 1rem;
            padding: 5px 16px;
        }

        .our_solution_content h1 {
            text-transform: capitalize;
            margin-bottom: 1rem;
            font-size: 2.5rem;
        }

        .our_solution_content p {}

        .hover_color_bubble {
            position: absolute;
            background: rgb(54 81 207 / 15%);
            width: 100rem;
            height: 100rem;
            left: 0;
            right: 0;
            z-index: -1;
            top: 16rem;
            border-radius: 50%;
            transform: rotate(-36deg);
            left: -18rem;
            transition: 0.7s;
        }

        .solution_cards_box .solution_card:hover .hover_color_bubble {
            top: 0rem;
        }

        .solution_cards_box .solution_card .so_top_icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #fff;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .solution_cards_box .solution_card .so_top_icon img {
            width: 40px;
            height: 50px;
            object-fit: contain;
        }

        /*start media query*/
        @media screen and (min-width: 320px) {
            .sol_card_top_3 {
                position: relative;
                top: 0;
            }

            .our_solution_category {
                width: 100%;
                margin: 0 auto;
            }

            .our_solution_category .solution_cards_box {
                flex: auto;
            }
        }

        @media only screen and (min-width: 768px) {
            .our_solution_category .solution_cards_box {
                flex: 1;
            }
        }

        @media only screen and (min-width: 1024px) {
            .sol_card_top_3 {
                position: relative;
                top: -3rem;
            }

            .our_solution_category {
                width: 50%;
                margin: 0 auto;
            }
        }

        .fa {
            padding: 20px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
        }

        /* Add a hover effect if you want */


        /* Set a specific color for each brand */

        /* Facebook */
        .fa-facebook {
            width: 100%;
            background: #3B5998;
            color: white;
        }

        .fa-instagram {
            width: 100%;
            background: #125688;
            color: white;
        }

        .fa-youtube {
            width: 100%;
            background: #bb0000;
            color: white;
        }

        .fa-tumblr {
            width: 100%;

            background: #2c4762;
            color: white;
        }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light   shadow-sm" style="background-color: rgba(3, 3, 3, 0.822)">
            <div class="container ">
                <a class="navbar-brand text-white fw-bold" href="{{ url('/') }}">
                 Nouvil
                </a>
                <a href="/" class="nav-link  text-white m-3 ">
                    Home
                  </a>
                <a href="/blog" class="nav-link  text-white m-3  ">
                   Posts
                </a>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <ul class="nav " style="">
                            <li></li>
                            <li></li>


                        </ul>



                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item ">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')
</body>


</html>


