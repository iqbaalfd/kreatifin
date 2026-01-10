<nav class="bg-white border-b border-gray-100 py-4 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <a href="{{ url('/') }}" class="flex items-center font-black text-2xl tracking-tighter">
            <span class="text-kreatifin-orange">K</span>REATIFIN<span class="text-kreatifin-orange">.</span>
        </a>

        <div class="hidden space-x-8 sm:flex items-center">
            <a href="{{ url('/') }}" class="relative group py-2 text-sm font-bold uppercase tracking-widest transition {{ request()->is('/') ? 'text-kreatifin-orange' : 'text-gray-400 hover:text-gray-900' }}">
                Beranda
                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-kreatifin-orange transition-transform duration-300 {{ request()->is('/') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
            </a>
            
            <a href="{{ route('kreator.cari') }}" class="relative group py-2 text-sm font-bold uppercase tracking-widest transition {{ request()->routeIs('kreator.cari') ? 'text-kreatifin-orange' : 'text-gray-400 hover:text-gray-900' }}">
                Cari Kreator
                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-kreatifin-orange transition-transform duration-300 {{ request()->routeIs('kreator.cari') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
            </a>
            
            <a href="{{ route('about') }}" class="relative group py-2 text-sm font-bold uppercase tracking-widest transition {{ request()->routeIs('about') ? 'text-kreatifin-orange' : 'text-gray-400 hover:text-gray-900' }}">
                Tentang
                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-kreatifin-orange transition-transform duration-300 {{ request()->routeIs('about') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
            </a>
        </div>

        <div class="flex items-center space-x-5">
            @auth
                <div class="flex items-center gap-4 bg-gray-50 px-4 py-2 rounded-2xl border border-gray-100">
                    
                    {{-- LOGIKA ROLE DI SINI --}}
                    @if(Auth::user()->role == 'kreator')
                        <a href="{{ route('dashboard') }}" class="text-xs font-black uppercase tracking-widest {{ request()->routeIs('dashboard') ? 'text-kreatifin-orange' : 'text-gray-600 hover:text-black' }}">
                            Dashboard Kreator
                        </a>
                    @else
                        {{-- Jika User biasa, link dashboard diganti ke Edit Profil atau sekadar teks Hello --}}
                        <span class="text-[10px] font-black uppercase tracking-widest text-gray-400 bg-gray-200 px-2 py-1 rounded-md">
                            Akun Pengunjung
                        </span>
                    @endif
                    
                    <div class="w-px h-4 bg-gray-200"></div>

                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-xs font-black uppercase tracking-widest text-red-500 hover:text-red-700 transition">
                            Keluar
                        </button>
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}" class="text-sm font-bold text-gray-500 hover:text-gray-900 transition">Masuk</a>
                <a href="{{ route('register') }}" class="bg-kreatifin-orange text-white px-7 py-2.5 rounded-full text-sm font-bold hover:bg-orange-600 transition shadow-lg shadow-orange-100">
                    Gabung Sekarang
                </a>
            @endauth
        </div>
    </div>
</nav>