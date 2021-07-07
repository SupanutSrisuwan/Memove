<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Memove</title>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href={{ asset('css/style.css') }} rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.1/sweetalert2.css" integrity="sha512-tAB44Mx++ci+FGvwu3N7f1RSXeN2s+M+pbJHHbYOmkla05H3zV0Y/LFVtwFAPU92HQcLj6SRHS925pcBBxJ4XQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.1/sweetalert2.min.css" integrity="sha512-A374yR9LJTApGsMhH1Mn4e9yh0ngysmlMwt/uKPpudcFwLNDgN3E9S/ZeHcWTbyhb5bVHCtvqWey9DLXB4MmZg==" crossorigin="anonymous" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.1/sweetalert2.min.js" integrity="sha512-haPWapEH4geHw14UUzxrXfv7WygtauJoqmcg9f3HRgqE1cr+TSlB8hqsyq0F3i34DUsvq9k3r8uCjJFBmdDE4g==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.1/sweetalert2.all.min.js" integrity="sha512-ojURvQScDt20pdPXNumdFLzEKdVJYmQW7eoJrLEbuMZh7XDEAkTnqpnXTmFTU3q19k5rnV//gIl8+I3b9fhEUg==" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

</head>
<body style="font-family: 'Kanit', sans-serif;">
    <div id="app">
        <div class="fixed-bottom memove-nav">
            <div class=" pb-3 pt-3">
                <div class="row justify-content-center text-center">
                    <div class="col-1"></div>
                    <div class="col-2">
                        <a class="" href="{{ url('/?order=1') }}">
                            <img class="mb-1" src={{ (request()->is('/')) ? asset('img/home_active.png') : asset('img/home.png') }} width="35" alt="home">
                            <br>
                            <span class="{{ (request()->is('/')) ? 'text-pink' : 'text-black' }}" style="font-weight: 300" >หน้าแรก</span>
                        </a>
                    </div>
                    <div class="col-2">
                        <a class="" href="{{ url('/order?type=1') }}">
                            <img class="mb-1" src={{ (request()->is('order')) ? asset('img/bell_active.png') : asset('img/bell.png') }} width="35" alt="bell">
                            <br>
                            <span class="{{ (request()->is('order')) ? 'text-pink' : 'text-black' }}" style="font-weight: 300" >กิจกรรม</span>
                        </a>
                    </div>
                    <div class="col-2">
                        <a class="" href="{{ url('/create') }}">
                            <img class="mb-1" src={{ (request()->is('create')) ? asset('img/create_active.png') : asset('img/create.png') }} width="35" alt="create">
                            <br>
                            <span class="{{ (request()->is('create')) ? 'text-pink' : 'text-black' }}" style="font-weight: 300" >สร้าง</span>
                        </a>
                    </div>
                    <div class="col-2">
                        <a class="" href="{{ url('/notification') }}">
                            <img class="mb-1" src={{ (request()->is('notification')) ? asset('img/chat_active.png') : asset('img/chat.png') }} width="35" alt="chat">
                            <br>
                            <span class="{{ (request()->is('notification')) ? 'text-pink' : 'text-black' }}" style="font-weight: 300" >แจ้งเตือน</span>
                        </a>
                    </div>
                    <div class="col-2">
                        <a class="" href="{{ url('/profile') }}">
                            <img class="mb-1" src={{ (request()->is('profile')) ? asset('img/user_active.png') : asset('img/user.png') }} width="35" alt="proile">
                            <br>
                            <span class="{{ (request()->is('profile')) ? 'text-pink' : 'text-black' }}" style="font-weight: 300" >โปรไฟล์</span>
                        </a>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
        {{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-bottom">--}}
            {{--<div class="container">--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--{{ config('app.name', 'Laravel') }}--}}
                {{--</a>--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                    {{--<span class="navbar-toggler-icon"></span>--}}
                {{--</button>--}}

                {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav mr-auto">--}}

                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav ml-auto">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--@if (Route::has('login'))--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                                {{--</li>--}}
                            {{--@endif--}}

                            {{--@if (Route::has('register'))--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                {{--</li>--}}
                            {{--@endif--}}
                        {{--@else--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                    {{--{{ Auth::user()->name }}--}}
                                {{--</a>--}}

                                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
