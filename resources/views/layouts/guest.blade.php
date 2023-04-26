<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        {{-- WEBSITE ICON --}}
        <link rel="icon" href="{{ asset('img/logo-white.png') }}" type="image/gif" sizes="16x16">
  
        <!-- SOCIAL MEDIA -->
        <script src="https://connect.facebook.net/signals/plugins/inferredEvents.js?v=2.8.51" async=""></script>
        <script src="https://connect.facebook.net/signals/config/646202875830368?v=2.8.51&amp;r=stable" async=""></script>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Bootstrap Css --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        {{-- Font awesome --}}
        <script src="https://kit.fontawesome.com/32778aa99c.js" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        {{-- TOPBAR --}}
        @include('layouts.guest.topbar')

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full mt-6 py-20 overflow-hidden sm:rounded-lg">
                {{-- {{ $slot }} --}}
                @yield('guest-content')
            </div>
        </div>

        {{-- GUEST FOOTER --}}
        @include('layouts.guest.footer')

        {{-- Bootsrap, jQuery, Pooper.js --}}
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>

</html>
