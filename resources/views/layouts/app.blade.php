<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Lilita+One|Viga" rel="stylesheet"> 

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link href="{{('/img/nav.png')}}" rel="shortcut icon">

    <style>

            body{
                font-family: 'Lato', sans-serif;
            }
            .navbar{
                background-color: #FF2B2B;
            }
            .nav span{
                font-size: 14px;
                font-family: 'Lilita One', cursive;
            }


        /*DESKTOP VERSION*/
        @media (min-width: 992px) { 

            .selamat{
                margin-top: 55px;
                padding: 5px;
                color: #fff;
                background-color: blue;
            }

         }


    </style>
    @yield('styles')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>

        
        @include('layouts.header')

        <!-- @include('layouts.sambutan') -->

        <main class="py-4">
            <div class="container">
                <div class="mt-5">
                    @yield('content')
                </div>
            </div>
        </main>

        @include('layouts.footer')

</body>
</html>
