<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>FP PBKK D</title>
    </head>
    <body class="h-full">
        <div class="min-h-full">
            <x-navbar></x-navbar>
            {{-- <x-header>{{ $title }}</x-header> --}}
            <main>
            <div class="mx-auto max-w-full px-2 py-4 sm:px-4 lg:px-6">
                {{ $slot }}
            </div>
            </main>
        </div>  
    </body>
</html>
