<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href={{ asset('web-assets/images/favicon.png') }} sizes="35x35" type="image.png') }}>


    <link rel=" stylesheet" href={{ asset('web-assets/css/all.min.css') }}>
    <link rel="stylesheet" href={{ asset('web-assets/css/flaticon.css') }}>
    <link rel="stylesheet" href={{ asset('web-assets/css/animate.min.css') }}>
    <link rel="stylesheet" href={{ asset('web-assets/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('web-assets/css/jquery.fancybox.min.css') }}>
    <link rel="stylesheet" href={{ asset('web-assets/css/perfect-scrollbar.css') }}>
    <link rel="stylesheet" href={{ asset('web-assets/css/slick.css') }}>
    <link rel="stylesheet" href={{ asset('web-assets/css/style.css') }}>
    <link rel="stylesheet" href={{ asset('web-assets/css/responsive.css') }}>
    <link rel="stylesheet" href={{ asset('web-assets/css/color.css') }}>


    @livewireStyles()
</head>

<body>
    <main>
        @livewire('web-preloader')
        <header class="style1 w-100">
            @livewire('web-header')
        </header>
        @livewire('web-search')
        @livewire('web-sticky-menu')
        @livewire('web-responsive-menu')
        @yield('main')
        <footer>
            @livewire('web-footer')
        </footer>
    </main>
    {{-- Script --}}
    <script src={{ asset('web-assets/js/jquery.min.js') }}></script>
    <script src={{ asset('web-assets/js/popper.min.js') }}></script>
    <script src={{ asset('web-assets/js/bootstrap.min.js') }}></script>
    <script src={{ asset('web-assets/js/wow.min.js') }}></script>
    <script src={{ asset('web-assets/js/counterup.min.js') }}></script>
    <script src={{ asset('web-assets/js/jquery.fancybox.min.js') }}></script>
    <script src={{ asset('web-assets/js/perfect-scrollbar.min.js') }}></script>
    <script src={{ asset('web-assets/js/slick.min.js') }}></script>
    <script src={{ asset('web-assets/js/custom-scripts.js') }}></script>
    @livewireScripts
</body>

</html>
