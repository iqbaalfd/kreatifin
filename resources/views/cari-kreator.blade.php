<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 leading-tight">
            {{ __('Jelajahi Talenta Terbaik') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10 flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h2 class="text-4xl font-extrabold text-gray-900">Cari Kreator <span class="text-kreatifin-orange">Terbaik</span></h2>
                    <p class="text-gray-500 mt-2 text-lg">Temukan mitra kolaborasi yang tepat untuk proyek impianmu.</p>
                </div>
                
                {{-- FORM PENCARIAN --}}
                <form action="{{ route('kreator.cari') }}" method="GET" class="relative">
                    <input type="text" 
                           name="search" 
                           value="{{ request('search') }}" 
                           placeholder="Cari videografer..." 
                           class="pl-12 pr-6 py-3 bg-white border-gray-100 rounded-2xl shadow-sm focus:ring-kreatifin-orange focus:border-kreatifin-orange w-full md:w-80 border-0">
                    
                    <button type="submit" class="absolute left-4 top-3.5 text-gray-400 hover:text-kreatifin-orange transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($freelancers as $f)
                <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition duration-500 group">
                    <div class="h-60 bg-gray-100 relative overflow-hidden">
                        @if($f->portofolios->first())
                            <img src="{{ asset('images/' . $f->portofolios->first()->image) }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                        @else
                            <div class="flex flex-col items-center justify-center h-full text-gray-300 bg-gray-50">
                                <svg class="w-12 h-12 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <span class="text-[10px] font-bold uppercase tracking-widest">Karya belum tersedia</span>
                            </div>
                        @endif
                        
                        <div class="absolute top-4 right-4">
                            <span class="bg-black/40 backdrop-blur-md text-white text-[10px] font-black px-3 py-1.5 rounded-full uppercase tracking-tighter">
                                {{ $f->portofolios->count() }} Karya
                            </span>
                        </div>
                    </div>
                    
                    <div class="p-8">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="shrink-0 relative">
                                @if($f->avatar)
                                    <img src="{{ asset('avatars/' . $f->avatar) }}" class="w-14 h-14 rounded-2xl object-cover shadow-lg border-2 border-white">
                                @else
                                    <div class="w-14 h-14 bg-gradient-to-br from-orange-400 to-kreatifin-orange rounded-2xl flex items-center justify-center text-white text-xl font-black shadow-lg">
                                        {{ substr($f->name, 0, 1) }}
                                    </div>
                                @endif
                                <div class="absolute -top-1 -right-1 w-4 h-4 rounded-full border-2 border-white {{ $f->status == 'Available' ? 'bg-green-500' : 'bg-red-500' }}"></div>
                            </div>
                            
                            <div>
                                <h3 class="font-bold text-xl text-gray-900 group-hover:text-kreatifin-orange transition line-clamp-1">{{ $f->name }}</h3>
                                <div class="flex items-center gap-2">
                                    <p class="text-[10px] font-black uppercase tracking-wider {{ $f->status == 'Available' ? 'text-green-600' : 'text-red-500' }}">
                                        {{ $f->status == 'Available' ? 'Available Now' : 'Currently Busy' }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <p class="text-gray-500 text-sm mb-6 line-clamp-2 italic leading-relaxed h-10">
                            {{ $f->bio ?? 'Kreator ini belum menulis bio singkat.' }}
                        </p>

                        <div class="flex flex-wrap gap-2 mb-8">
                            @if($f->skill)
                                <span class="px-3 py-1 bg-orange-50 rounded-lg text-[10px] font-black text-kreatifin-orange uppercase tracking-widest">{{ $f->skill }}</span>
                            @endif
                            <span class="px-3 py-1 bg-gray-50 rounded-lg text-[10px] font-black text-gray-400 uppercase tracking-widest">Verified</span>
                        </div>

                        <div class="flex items-center justify-between pt-6 border-t border-gray-50">
                            <div>
                                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Konsultasi</p>
                                <p class="text-lg font-black text-gray-900">Gratis</p>
                            </div>
                            <a href="{{ route('kreator.detail', $f->id) }}" class="bg-gray-900 text-white px-6 py-3 rounded-2xl text-xs font-black hover:bg-kreatifin-orange hover:shadow-xl hover:shadow-orange-100 transition duration-300 uppercase tracking-widest">
                                LIHAT PROFIL
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- PAGINATION --}}
            <div class="mt-16">
                {{ $freelancers->links() }}
            </div>

            {{-- PESAN JIKA DATA TIDAK DITEMUKAN --}}
            @if($freelancers->isEmpty())
            <div class="text-center py-20 bg-white rounded-[3rem] border-2 border-dashed border-gray-100">
                <div class="text-6xl mb-4">🔍</div>
                <p class="text-gray-400 text-lg font-bold">Kreator "{{ request('search') }}" tidak ditemukan.</p>
                <p class="text-gray-300 text-sm mb-6">Coba cari kategori lain atau kata kunci yang berbeda.</p>
                <a href="{{ route('kreator.cari') }}" class="px-6 py-2 bg-gray-900 text-white rounded-xl text-xs font-bold uppercase tracking-widest hover:bg-kreatifin-orange transition">Reset Pencarian</a>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>