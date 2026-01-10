<x-app-layout>
    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="mb-12 text-center">
                <h2 class="text-4xl font-black text-gray-900 tracking-tighter uppercase">
                    Telusuri <span class="text-kreatifin-orange">Talenta</span>
                </h2>
                <p class="text-gray-500 font-medium mt-2">Temukan kreator terbaik untuk proyek impian Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach($kreators as $kreator)
                <div class="bg-white rounded-[2.5rem] border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all group">
                    <div class="h-48 overflow-hidden relative">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($kreator->name) }}&background=random" class="w-full h-full object-cover group-hover:scale-105 transition">
                        <div class="absolute top-4 right-4">
                            <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-xl text-[10px] font-bold uppercase tracking-widest shadow-sm">
                                {{ $kreator->category ?? 'Kreator' }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="font-bold text-lg text-gray-900 mb-1">{{ $kreator->name }}</h4>
                        <p class="text-gray-400 text-xs font-semibold mb-4">{{ $kreator->headline ?? 'Mahasiswa Kreatif' }}</p>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                            <div>
                                <p class="text-[9px] text-gray-400 font-black uppercase">Lokasi</p>
                                <p class="text-xs font-bold text-gray-700">{{ $kreator->city ?? 'Indonesia' }}</p>
                            </div>
                            <a href="#" class="bg-gray-900 text-white p-3 rounded-xl hover:bg-kreatifin-orange transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>