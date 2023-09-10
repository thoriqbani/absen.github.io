<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        @vite('resources/css/app.css')
    </head>
    <body class="">
        <div class="bg-slate-400 w-full h-screen absolute pt-40">
            @yield('container')
        </div>
    </body>
</html>