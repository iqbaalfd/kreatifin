<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>KreatifIn - Masuk atau Daftar</title>

        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-50">
            <div>
                <a href="/">
                    <div class="w-20 h-20 bg-kreatifin-orange rounded-[2rem] flex items-center justify-center text-white text-4xl font-black shadow-xl shadow-orange-100">
                        K
                    </div>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-8 py-8 bg-white shadow-sm border border-gray-100 overflow-hidden sm:rounded-[2.5rem]">
                {{ $slot }}
            </div>
            
            <p class="mt-8 text-gray-400 text-xs font-bold uppercase tracking-[0.2em]">© 2026 Kreatifin Marketplace</p>
        </div>
    </body>
</html>