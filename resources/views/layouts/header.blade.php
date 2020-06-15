<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-responsive.css') }}" rel="stylesheet">
    



</head>
<body>
    @if (Request::is('login'))
        @include('layouts.login_nav')
    @elseif(Request::is('register'))
        @include('layouts.login_nav')

    @else
    @include('layouts.nav')
    @endif

    @if (Request::is('login'))
        @yield('content')
    @elseif(Request::is('register'))
        @yield('content')

    @else
    <section id="main-content">
        <section class="wrapper">
    @yield('content')
        </section>
    </section>

    @endif
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.19/datatables.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="{{ asset('js/common-script.js') }}" defer></script>
    <script src="{{ asset('js/jquery.dcjqaccordion.2.7.js') }}" defer></script>
    <script src="{{ asset('js/jquery.nicescroll.js') }}" defer></script>
    <script src="{{ asset('js/jquery.scrollTo.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.jquery.sparkline.js') }}" defer></script>
    <script src="{{ asset('js/table.js') }}" defer></script>
</body>
</html>