<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>TODO List</title>
        
        <script src="{{ asset('js/app.js') }}" defer></script>
        @livewireStyles
        
        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        @livewireStyles
    </head>
    <body class="container mx-auto p-4">
        <h1 class="text-4xl text-center font-bolder p-4">Lista de tareas</h1>

        @yield('contenido')

        @livewireScripts
    </body>
</html>