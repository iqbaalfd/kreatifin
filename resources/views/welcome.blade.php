<x-app-layout>
    {{-- Hero Section --}}
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-16 mb-24">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <div class="inline-block px-4 py-1.5 bg-orange-50 text-kreatifin-orange text-[10px] font-black uppercase rounded-full tracking-widest border border-orange-100 mb-6">
                    Platform Kreatif No. 1 Mahasiswa
                </div>
                <h1 class="text-5xl md:text-7xl font-black text-gray-900 leading-[1.1] tracking-tighter">
                    Terhubung. Berkarya. <br>
                    <span class="text-kreatifin-orange">Berkolaborasi.</span>
                </h1>
                <p class="mt-8 text-lg text-gray-500 font-medium leading-relaxed max-w-xl">
                    Temukan talenta hebat atau pamerkan portofolio terbaikmu. Kreatifin membantu mahasiswa mengubah hobi menjadi karir profesional.
                </p>
                
                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="{{ route('kreator.cari') }}" class="bg-gray-900 text-white px-8 py-4 rounded-2xl font-black uppercase tracking-widest text-xs shadow-2xl shadow-gray-200 hover:bg-kreatifin-orange transition-all hover:-translate-y-1">
                        Cari Kreator &rarr;
                    </a>
                    <a href="{{ route('register') }}" class="border-2 border-gray-200 text-gray-900 px-8 py-4 rounded-2xl font-black uppercase tracking-widest text-xs hover:border-gray-900 transition-all">
                        Gabung Sekarang
                    </a>
                </div>
                
                <div class="mt-16 flex gap-12 border-t border-gray-100 pt-10">
                    <div>
                        <span class="block text-3xl font-black text-gray-900">2,500+</span>
                        <span class="text-gray-400 text-[10px] font-black uppercase tracking-widest">Kreator Aktif</span>
                    </div>
                    <div>
                        <span class="block text-3xl font-black text-gray-900">10k+</span>
                        <span class="text-gray-400 text-[10px] font-black uppercase tracking-widest">Karya Portofolio</span>
                    </div>
                </div>
            </div>

            <div class="md:w-1/2 relative">
                <div class="bg-gray-100 rounded-[3rem] overflow-hidden shadow-2xl transform rotate-2 hover:rotate-0 transition-transform duration-500">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80" alt="Kreatifin Hero" class="w-full h-[500px] object-cover">
                </div>
                <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-[2rem] shadow-2xl flex items-center gap-4 border border-gray-50">
                    <div class="w-12 h-12 bg-kreatifin-orange rounded-2xl flex items-center justify-center text-white font-black">K</div>
                    <div>
                        <p class="text-[10px] text-gray-400 font-black uppercase tracking-widest leading-none mb-1">Status</p>
                        <p class="font-bold text-gray-900">Profesional Terjamin</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- How It Works --}}
    <section class="py-32 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-5xl font-black mb-4 text-gray-900 tracking-tighter uppercase">Bagaimana Cara Kerjanya?</h2>
            <p class="text-gray-500 font-semibold mb-20 max-w-lg mx-auto">Hanya butuh tiga langkah sederhana untuk memulai kolaborasi pertamamu.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="p-12 bg-white rounded-[3rem] border border-gray-100 shadow-sm hover:shadow-2xl transition duration-500 group text-left">
                    <div class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center mb-10 group-hover:bg-kreatifin-orange transition-colors">
                        <svg class="w-8 h-8 text-kreatifin-orange group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <h3 class="font-black text-xl mb-4 text-gray-900 uppercase tracking-tight">1. Mencari Kreator</h3>
                    <p class="text-gray-500 font-medium leading-relaxed">Telusuri ratusan profesional kreatif mahasiswa dengan berbagai keahlian khusus.</p>
                </div>

                <div class="p-12 bg-white rounded-[3rem] border border-gray-100 shadow-sm hover:shadow-2xl transition duration-500 group text-left">
                    <div class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center mb-10 group-hover:bg-kreatifin-orange transition-colors">
                        <svg class="w-8 h-8 text-kreatifin-orange group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="font-black text-xl mb-4 text-gray-900 uppercase tracking-tight">2. Tinjau Portofolio</h3>
                    <p class="text-gray-500 font-medium leading-relaxed">Lihat hasil karya nyata dan pilih yang paling sesuai dengan gaya projek anda.</p>
                </div>

                <div class="p-12 bg-white rounded-[3rem] border border-gray-100 shadow-sm hover:shadow-2xl transition duration-500 group text-left">
                    <div class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center mb-10 group-hover:bg-kreatifin-orange transition-colors">
                        <svg class="w-8 h-8 text-kreatifin-orange group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="font-black text-xl mb-4 text-gray-900 uppercase tracking-tight">3. Mulai Berkarya</h3>
                    <p class="text-gray-500 font-medium leading-relaxed">Hubungi via WhatsApp secara langsung dan mulai bangun projek impianmu.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Talenta Terbaik Section --}}
    <section class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-xl">
                    <h2 class="text-4xl font-black text-gray-900 tracking-tighter mb-4 uppercase">Talenta <span class="text-kreatifin-orange">Terbaik.</span></h2>
                    <p class="text-gray-500 font-semibold">Inspirasi karya dari kreator-kreator dengan portofolio terbanyak minggu ini.</p>
                </div>
                <a href="{{ route('kreator.cari') }}" class="text-xs font-black uppercase tracking-[0.2em] text-gray-900 hover:text-kreatifin-orange flex items-center gap-3 transition-all group">
                    Lihat Semua <span class="group-hover:translate-x-2 transition-transform">&rarr;</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($kreators as $kreator)
                    <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition duration-500 group relative">
                        {{-- Label Rank / Badge --}}
                        <div class="absolute top-6 left-6 z-10">
                            <span class="bg-kreatifin-orange text-white text-[10px] font-black px-4 py-2 rounded-xl shadow-lg uppercase tracking-widest">
                                Top Creator
                            </span>
                        </div>

                        {{-- 1. Gambar Karya Teratas --}}
                        <div class="h-60 bg-gray-100 relative overflow-hidden">
                            @if($kreator->portofolios && $kreator->portofolios->first())
                                <img src="{{ asset('images/' . $kreator->portofolios->first()->image) }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                            @else
                                <div class="flex flex-col items-center justify-center h-full text-gray-300 bg-gray-50">
                                    <svg class="w-12 h-12 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <span class="text-[10px] font-bold uppercase tracking-widest">Karya belum tersedia</span>
                                </div>
                            @endif
                            
                            {{-- 2. Badge Jumlah Karya --}}
                            <div class="absolute top-4 right-4">
                                <span class="bg-black/40 backdrop-blur-md text-white text-[10px] font-black px-3 py-1.5 rounded-full uppercase tracking-tighter">
                                    {{ $kreator->portofolios_count }} Karya
                                </span>
                            </div>
                        </div>
                        
                        <div class="p-8">
                            {{-- 3. Header: Avatar & Nama --}}
                            <div class="flex items-center gap-4 mb-4">
                                <div class="shrink-0 relative">
                                    @if($kreator->avatar)
                                        <img src="{{ asset('avatars/' . $kreator->avatar) }}" class="w-14 h-14 rounded-2xl object-cover shadow-lg border-2 border-white">
                                    @else
                                        <div class="w-14 h-14 bg-gradient-to-br from-orange-400 to-kreatifin-orange rounded-2xl flex items-center justify-center text-white text-xl font-black shadow-lg">
                                            {{ substr($kreator->name, 0, 1) }}
                                        </div>
                                    @endif
                                    {{-- 4. Status Tersedia --}}
                                    <div class="absolute -top-1 -right-1 w-4 h-4 rounded-full border-2 border-white {{ $kreator->status == 'Available' ? 'bg-green-500' : 'bg-red-500' }}"></div>
                                </div>
                                
                                <div>
                                    <h3 class="font-bold text-xl text-gray-900 group-hover:text-kreatifin-orange transition line-clamp-1">{{ $kreator->name }}</h3>
                                    <div class="flex items-center gap-2">
                                        <p class="text-[10px] font-black uppercase tracking-wider {{ $kreator->status == 'Available' ? 'text-green-600' : 'text-red-500' }}">
                                            {{ $kreator->status == 'Available' ? 'Available Now' : 'Currently Busy' }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- 5. Deskripsi/Bio --}}
                            <p class="text-gray-500 text-sm mb-6 line-clamp-2 italic leading-relaxed h-10">
                                {{ $kreator->bio ?? 'Kreator ini belum menulis bio singkat.' }}
                            </p>

                            {{-- 6. Tag Keahlian --}}
                            <div class="flex flex-wrap gap-2 mb-8">
                                @if($kreator->skill)
                                    <span class="px-3 py-1 bg-orange-50 rounded-lg text-[10px] font-black text-kreatifin-orange uppercase tracking-widest">{{ $kreator->skill }}</span>
                                @endif
                                <span class="px-3 py-1 bg-gray-50 rounded-lg text-[10px] font-black text-gray-400 uppercase tracking-widest">Verified</span>
                            </div>

                            {{-- 7. Footer: Konsultasi & Tombol --}}
                            <div class="flex items-center justify-between pt-6 border-t border-gray-50">
                                <div>
                                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Konsultasi</p>
                                    <p class="text-lg font-black text-gray-900">Gratis</p>
                                </div>
                                <a href="{{ route('kreator.detail', $kreator->id) }}" class="bg-gray-900 text-white px-6 py-3 rounded-2xl text-xs font-black hover:bg-kreatifin-orange hover:shadow-xl hover:shadow-orange-100 transition duration-300 uppercase tracking-widest">
                                    LIHAT PROFIL
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    @for($i = 0; $i < 3; $i++)
                        <div class="bg-gray-50 rounded-[2.5rem] border-2 border-dashed border-gray-200 h-80 flex items-center justify-center">
                            <p class="text-gray-400 font-bold uppercase text-[10px] tracking-widest">Menunggu Kreator</p>
                        </div>
                    @endfor
                @endforelse
            </div>
        </div>
    </section>
</x-app-layout>