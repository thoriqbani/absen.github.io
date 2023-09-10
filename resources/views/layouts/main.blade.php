<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        @vite('resources/css/app.css')
        <style type="text/css">
            
        </style>
    </head>
    <body>
        @include('partials.navbar')
    
    <div class="w-full h-screen flex pt-40">
        @yield('container')
    </div>
        
        @include('partials.footer')
    </body>
</html>