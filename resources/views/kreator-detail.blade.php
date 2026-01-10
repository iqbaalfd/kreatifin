<x-app-layout>
    <div class="py-12 bg-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row items-center gap-10 mb-16 p-10 bg-gray-50 rounded-[3.5rem] border border-gray-100 shadow-sm">
                
                <div class="shrink-0 relative">
                    @if($kreator->avatar)
                        <img src="{{ asset('avatars/' . $kreator->avatar) }}" 
                             class="w-40 h-40 rounded-[2.5rem] object-cover shadow-2xl shadow-orange-100 border-4 border-white">
                    @else
                        <div class="w-40 h-40 bg-gradient-to-br from-orange-400 to-kreatifin-orange rounded-[2.5rem] flex items-center justify-center text-white text-6xl font-black shadow-2xl shadow-orange-100">
                            {{ substr($kreator->name, 0, 1) }}
                        </div>
                    @endif
                    
                    <div class="absolute -bottom-2 -right-2 px-4 py-1.5 {{ $kreator->status == 'Available' ? 'bg-green-500' : 'bg-red-500' }} text-white text-[10px] font-black rounded-full border-4 border-white uppercase tracking-widest shadow-lg">
                        {{ $kreator->status ?? 'Active' }}
                    </div>
                </div>

                <div class="text-center md:text-left flex-1">
                    <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
                        <h1 class="text-5xl font-black text-gray-900 tracking-tight">{{ $kreator->name }}</h1>
                        <div class="flex gap-2 justify-center md:justify-start">
                            <span class="px-3 py-1 bg-white border border-gray-200 rounded-lg text-[10px] font-black text-gray-400 uppercase tracking-widest">
                                {{ $kreator->skill ?? 'Creative Talent' }}
                            </span>
                            <span class="px-3 py-1 bg-orange-100 rounded-lg text-[10px] font-black text-kreatifin-orange uppercase tracking-widest">
                                Verified
                            </span>
                        </div>
                    </div>
                    
                    <p class="text-gray-500 text-lg max-w-2xl leading-relaxed italic">
                        "{{ $kreator->bio ?? 'Membantu mewujudkan visi kreatif Anda melalui karya visual yang memukau. Berpengalaman dalam menangani proyek komersial maupun personal.' }}"
                    </p>

                    <div class="mt-6 flex items-center justify-center md:justify-start gap-4 text-gray-400">
                         <div class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span class="text-xs font-bold uppercase tracking-widest">{{ $kreator->city ?? 'Lokasi Tidak Atur' }}</span>
                         </div>
                    </div>
                </div>

                <div class="w-full md:w-auto">
                    @if($kreator->phone)
                        @php
                            $pesanWa = urlencode("Halo " . $kreator->name . ", saya melihat portofolio Anda di Kreatifin dan tertarik untuk berdiskusi lebih lanjut.");
                        @endphp
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $kreator->phone) }}?text={{ $pesanWa }}" 
                           target="_blank" 
                           class="group bg-gray-900 text-white px-10 py-5 rounded-[2rem] font-black hover:bg-kreatifin-orange transition-all duration-500 shadow-xl hover:shadow-orange-200 flex items-center justify-center gap-3 w-full md:w-auto transform hover:-translate-y-1">
                            <svg class="w-6 h-6 group-hover:animate-bounce" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.937 3.659 1.432 5.623 1.433h.005c6.554 0 11.89-5.335 11.893-11.892a11.826 11.826 0 00-3.396-8.411z"/></svg>
                            HUBUNGI KREATOR
                        </a>
                    @else
                        <button disabled class="bg-gray-200 text-gray-400 px-10 py-5 rounded-[2rem] font-black cursor-not-allowed flex items-center justify-center gap-3 w-full md:w-auto border-2 border-dashed border-gray-300">
                            KONTAK BELUM ADA
                        </button>
                    @endif
                </div>
            </div>

            <div class="mb-12 flex items-end justify-between border-b border-gray-100 pb-8">
                <div>
                    <h3 class="text-4xl font-black text-gray-900 tracking-tighter uppercase">
                        Koleksi <span class="text-kreatifin-orange italic">Karya</span>
                    </h3>
                    <p class="text-gray-400 font-bold text-xs uppercase tracking-[0.3em] mt-2">Daftar Portofolio Terbaik</p>
                </div>
                <div class="hidden md:block">
                    <span class="px-5 py-2 bg-gray-900 text-white rounded-xl text-xs font-black uppercase tracking-widest">
                        {{ $kreator->portofolios->count() }} TOTAL KARYA
                    </span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                @forelse($kreator->portofolios as $p)
                <div class="group bg-white rounded-[3rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-4">
                    <div class="h-80 overflow-hidden relative">
                        <img src="{{ asset('images/' . $p->image) }}" 
                             class="w-full h-full object-cover transition duration-1000 group-hover:scale-110">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col justify-end p-10">
                            <p class="text-gray-200 text-sm leading-relaxed mb-4 transform translate-y-10 group-hover:translate-y-0 transition-transform duration-500">
                                {{ $p->description }}
                            </p>
                            <div class="w-10 h-1 bg-kreatifin-orange rounded-full"></div>
                        </div>
                    </div>

                    <div class="p-10">
                        <h4 class="font-black text-2xl text-gray-900 group-hover:text-kreatifin-orange transition-colors duration-300 uppercase leading-tight mb-2">
                            {{ $p->title }}
                        </h4>
                        <div class="flex items-center justify-between">
                            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest">
                                Publikasi: {{ $p->created_at->format('d M Y') }}
                            </p>
                            <svg class="w-5 h-5 text-gray-200 group-hover:text-kreatifin-orange transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full py-32 text-center bg-gray-50 rounded-[4rem] border-4 border-dashed border-gray-100">
                    <div class="text-6xl mb-6">🎨</div>
                    <p class="text-gray-400 font-black text-2xl uppercase tracking-tighter italic">Kreator ini belum memamerkan karyanya.</p>
                </div>
                @endforelse
            </div>

        </div>
    </div>
</x-app-layout>