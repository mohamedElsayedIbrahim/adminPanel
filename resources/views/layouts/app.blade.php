<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

        
    </head>
    <body class="font-sans antialiased flex">
        <div class="'min-h-screen bg-gray-100"> 
            @include('layouts.navigation')
        </div>

        
        <main class="flex flex-col justify-between w-full bg-slate-50">
            @include('layouts.banner')
             
            {{$slot}}

            @include('layouts.footer') 
        </main>

        

    </body>
</html>
