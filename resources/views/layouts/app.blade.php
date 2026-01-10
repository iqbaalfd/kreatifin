<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Kreatifin - Terhubung. Berkarya. Berkolaborasi.</title>

        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,800,900&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900 bg-white">
        <div class="min-h-screen flex flex-col"> 
            @include('layouts.navigation')

            @isset($header)
                <header class="bg-white border-b border-gray-50"> 
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <main class="flex-grow">
                {{ $slot }}
            </main>

            <footer class="bg-white border-t border-gray-100 pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
            <div class="space-y-4">
                <div class="text-2xl font-black text-gray-900 tracking-tighter uppercase">
                    KREATIFIN<span class="text-kreatifin-orange">.</span>
                </div>
                <p class="text-gray-500 text-sm leading-relaxed max-w-xs font-medium">
                    Wadahnya mahasiswa kreatif berkolaborasi. Mengubah hobi menjadi peluang karir profesional yang menjanjikan.
                </p>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <h4 class="text-[10px] font-black text-gray-900 uppercase tracking-[0.2em] mb-4">Navigasi</h4>
                    <ul class="space-y-2 text-sm text-gray-500 font-bold">
                        <li><a href="{{ route('home') }}" class="hover:text-kreatifin-orange transition">Beranda</a></li>
                        <li><a href="{{ route('kreator.cari') }}" class="hover:text-kreatifin-orange transition">Cari Kreator</a></li>
                        {{-- Cek apakah route about ada, jika tidak arahkan ke # --}}
                        <li><a href="{{ Route::has('about') ? route('about') : '#' }}" class="hover:text-kreatifin-orange transition">Tentang Kami</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-[10px] font-black text-gray-900 uppercase tracking-[0.2em] mb-4">Akses</h4>
                    <ul class="space-y-2 text-sm text-gray-500 font-bold">
                        @auth
                            <li><a href="{{ route('dashboard') }}" class="hover:text-kreatifin-orange transition">Dashboard</a></li>
                            <li><a href="{{ route('profile.edit') }}" class="hover:text-kreatifin-orange transition">Pengaturan</a></li>
                        @else
                            <li><a href="{{ route('login') }}" class="hover:text-kreatifin-orange transition">Masuk Akun</a></li>
                            <li><a href="{{ route('register') }}" class="hover:text-kreatifin-orange transition">Daftar Kreator</a></li>
                        @endauth
                    </ul>
                </div>
            </div>

            <div class="text-left md:text-right">
                <h4 class="text-[10px] font-black text-gray-900 uppercase tracking-[0.2em] mb-4">Dukungan</h4>
                <p class="text-sm text-gray-500 font-bold mb-4">Butuh bantuan atau kolaborasi?</p>
                <a href="https://wa.me/6281222757767" target="_blank" class="inline-flex items-center gap-2 bg-gray-900 text-white px-6 py-3 rounded-2xl text-[10px] font-black hover:bg-kreatifin-orange transition shadow-xl shadow-gray-200 uppercase tracking-widest">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.438 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    Hubungi Admin
                </a>
            </div>
        </div>

        <div class="pt-8 border-t border-gray-50 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-[9px] text-gray-400 font-black uppercase tracking-[0.3em]">
                © 2026 KREATIFIN — THE NEXT GENERATION OF CREATORS.
            </p>
            <div class="flex items-center gap-4">
                <span class="text-[9px] text-gray-300 font-black uppercase tracking-widest italic border-l-2 border-orange-200 pl-4">Dibuat dengan 🔥 untuk UAS Pemrograman Web</span>
            </div>
        </div>
    </div>
</footer>
        </div>
    </body>
</html>