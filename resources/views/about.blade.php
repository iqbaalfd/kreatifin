<x-app-layout>
    <div class="py-20 bg-white min-h-screen">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- 1. HEADER & STORY --}}
            <div class="text-center mb-24">
                <span class="px-4 py-1.5 bg-orange-50 text-kreatifin-orange text-[10px] font-black uppercase rounded-full tracking-widest border border-orange-100">
                    The Story of Kreatifin
                </span>
                <h1 class="mt-8 text-5xl md:text-6xl font-black text-gray-900 tracking-tighter leading-[1.1]">
                    Wujudkan Ide, <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-orange-600">Jalin Kolaborasi.</span>
                </h1>
                <p class="mt-8 text-lg text-gray-500 max-w-2xl mx-auto leading-relaxed font-medium italic">
                    "Kreatifin lahir dari keresahan mahasiswa yang ingin memamerkan karya dan menemukan klien dengan cara yang lebih mudah dan profesional."
                </p>
            </div>

            {{-- 2. VISI & MISI --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-32">
                <div class="p-10 rounded-[3rem] bg-gray-50 border border-gray-100 transition-all hover:shadow-2xl hover:shadow-orange-100/50 group">
                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-sm mb-8 group-hover:bg-kreatifin-orange transition-all transform group-hover:rotate-6">
                        <svg class="w-8 h-8 text-kreatifin-orange group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4 uppercase tracking-tight">Visi Kami</h3>
                    <p class="text-gray-500 leading-relaxed font-semibold">
                        Menjadi platform marketplace kreatif nomor satu bagi mahasiswa untuk memulai karir freelance mereka dengan aman dan profesional.
                    </p>
                </div>

                <div class="p-10 rounded-[3rem] bg-gray-50 border border-gray-100 transition-all hover:shadow-2xl hover:shadow-orange-100/50 group">
                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-sm mb-8 group-hover:bg-kreatifin-orange transition-all transform group-hover:-rotate-6">
                        <svg class="w-8 h-8 text-kreatifin-orange group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4 uppercase tracking-tight">Misi Kami</h3>
                    <p class="text-gray-500 leading-relaxed font-semibold">
                        Menyediakan ruang pamer portofolio yang estetik dan memfasilitasi komunikasi langsung antara klien dan kreator secara instan.
                    </p>
                </div>
            </div>

            <hr class="border-gray-100 mb-20">

            {{-- 3. THE TEAM GRID --}}
            <div class="text-center mb-16">
                <h3 class="text-xs font-black text-gray-400 uppercase tracking-[0.5em] mb-4">Behind The Code</h3>
                <h2 class="text-4xl font-black text-gray-900 tracking-tighter uppercase">Tim Pengembang</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-32">
                
      {{-- IQBAL (GRAYSCALE TO COLOR ON HOVER) --}}
<div class="md:col-span-1 bg-gray-900 rounded-[3rem] p-8 border border-gray-800 shadow-[0_20px_50px_rgba(249,115,22,0.1)] relative overflow-hidden group transition-all duration-500 hover:border-orange-500/30">
    
    <div class="absolute -top-10 -right-10 w-40 h-40 bg-orange-500 opacity-20 blur-[80px] group-hover:opacity-40 transition-opacity"></div>

    <div class="relative z-10 text-center">
        <div class="relative inline-block mb-6">
            <div class="absolute inset-0 bg-orange-500 blur-2xl opacity-10 group-hover:opacity-40 transition-opacity rounded-full"></div>
            
            <div class="w-32 h-32 relative mx-auto rounded-3xl overflow-hidden border-2 border-orange-500 shadow-2xl shadow-orange-500/20 rotate-2 group-hover:rotate-0 transition-all duration-500 transform group-hover:scale-105 grayscale group-hover:grayscale-0">
                <img src="{{ asset('images/team/iqbal.jpg') }}" class="w-full h-full object-cover">
            </div>
        </div>

        <h4 class="font-black text-white text-xl tracking-tighter">Iqbal Fadillah</h4>
        
        <div class="inline-block mt-2 px-3 py-1 bg-orange-500/10 border border-orange-500/20 rounded-full">
            <p class="text-orange-500 font-black text-[9px] uppercase tracking-[0.2em]" style="color: #f97316 !important;">
                Lead Fullstack Developer
            </p>
        </div>

        <div class="mt-6 pt-6 border-t border-white/10">
            <p class="text-gray-400 text-[10px] font-black tracking-[0.3em] leading-relaxed uppercase">230660121035</p>
        </div>
    </div>
</div>

                {{-- HARFIN --}}
                <div class="bg-gray-50 rounded-[3rem] p-8 border border-gray-100 text-center hover:bg-white hover:shadow-xl transition-all group">
                    <div class="w-32 h-32 mx-auto rounded-3xl overflow-hidden mb-6 grayscale group-hover:grayscale-0 transition-all">
                        <img src="{{ asset('images/team/harfin.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-black text-gray-900 text-xl tracking-tighter">Harfin Akmal Safari</h4>
                    <p class="text-gray-500 font-black text-[9px] uppercase tracking-widest mt-1">Project Manager</p>
                    <p class="text-gray-400 text-[9px] font-bold mt-2 tracking-widest">230660121061</p>
                </div>

                {{-- GINGIN --}}
                <div class="bg-gray-50 rounded-[3rem] p-8 border border-gray-100 text-center hover:bg-white hover:shadow-xl transition-all group">
                    <div class="w-32 h-32 mx-auto rounded-3xl overflow-hidden mb-6 grayscale group-hover:grayscale-0 transition-all">
                        <img src="{{ asset('images/team/gingin.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-black text-gray-900 text-xl tracking-tighter">Gingin Ginanjar</h4>
                    <p class="text-gray-500 font-black text-[9px] uppercase tracking-widest mt-1">UI/UX Designer</p>
                    <p class="text-gray-400 text-[9px] font-bold mt-2 tracking-widest">230660121148</p>
                </div>

                {{-- ANDRE --}}
                <div class="bg-gray-50 rounded-[3rem] p-8 border border-gray-100 text-center hover:bg-white hover:shadow-xl transition-all group">
                    <div class="w-32 h-32 mx-auto rounded-3xl overflow-hidden mb-6 grayscale group-hover:grayscale-0 transition-all">
                        <img src="{{ asset('images/team/andre.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-black text-gray-900 text-xl tracking-tighter">Andre Raka Fadhillah</h4>
                    <p class="text-gray-500 font-black text-[9px] uppercase tracking-widest mt-1">Marketing & Research</p>
                    <p class="text-gray-400 text-[9px] font-bold mt-2 tracking-widest">230660121070</p>
                </div>

                {{-- FAJRIL --}}
                <div class="bg-gray-50 rounded-[3rem] p-8 border border-gray-100 text-center hover:bg-white hover:shadow-xl transition-all group">
                    <div class="w-32 h-32 mx-auto rounded-3xl overflow-hidden mb-6 grayscale group-hover:grayscale-0 transition-all">
                        <img src="{{ asset('images/team/fajril.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-black text-gray-900 text-xl tracking-tighter">Fajril Fauzan Baihaqi</h4>
                    <p class="text-gray-500 font-black text-[9px] uppercase tracking-widest mt-1">Content & Communication</p>
                    <p class="text-gray-400 text-[9px] font-bold mt-2 tracking-widest">230660121152</p>
                </div>

            </div>

            <div class="pt-20 border-t border-gray-100">
    <div class="flex flex-col items-center">
        <div class="inline-flex items-center gap-3 px-5 py-2 bg-gray-900 rounded-2xl mb-6 shadow-xl shadow-gray-200">
            <div class="w-2 h-2 bg-orange-500 rounded-full animate-pulse"></div>
            <span class="text-[10px] font-black text-white uppercase tracking-[0.2em]">
                Universitas Sebelas April
            </span>
        </div>
        
        <div class="text-center space-y-2">
            <p class="text-[11px] text-gray-900 font-black uppercase tracking-[0.3em]">
                Kreatifin <span class="text-gray-300 mx-2">—</span> Proyek UAS Pemrograman Web
            </p>
            <p class="text-[9px] text-gray-400 font-bold uppercase tracking-[0.2em] leading-relaxed">
                Program Studi Informatika <span class="text-orange-500">•</span> Fakultas Teknologi Informasi
            </p>
        </div>

        <div class="mt-8 flex items-center gap-4 w-full max-w-xs">
            <div class="h-[1px] flex-grow bg-gradient-to-r from-transparent to-gray-200"></div>
            <div class="text-gray-300">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L1 21h22L12 2zm0 3.45l8.27 14.3H3.73L12 5.45z"/></svg>
            </div>
            <div class="h-[1px] flex-grow bg-gradient-to-l from-transparent to-gray-200"></div>
        </div>
    </div>
</div>
        </div>
    </div>
</x-app-layout>