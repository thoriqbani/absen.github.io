<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        @vite('resources/css/app.css')
    </head>
    <body class="">

        @include('partials.navbar')

    <div class="w-full h-screen lg:pt-20 flex">
        @yield('container')
    </div>

    <div class="fixed w-full h-10 bottom-0">
        @include('partials.footer')
    </div>

    </body>
</html>