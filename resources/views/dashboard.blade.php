<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <h2 class="font-bold text-2xl text-gray-800 leading-tight">
                {{ __('Dashboard Kreator') }}
            </h2>
            <div class="flex items-center gap-3">
                <a href="{{ route('profile.edit') }}" class="bg-white text-gray-700 px-6 py-2.5 rounded-full font-bold hover:bg-gray-50 transition border border-gray-200 text-sm flex items-center gap-2 shadow-sm">
                    <svg class="w-4 h-4 text-kreatifin-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Pengaturan Profil
                </a>
                <a href="{{ route('portofolio.create') }}" class="bg-kreatifin-orange text-white px-6 py-2.5 rounded-full font-bold hover:bg-orange-600 transition shadow-lg shadow-orange-100 text-sm flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Tambah Portofolio
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success') || session('status') === 'profile-updated')
            <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-2xl flex items-center justify-between shadow-sm animate-pulse">
                <div class="flex items-center gap-3 font-bold text-sm">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    {{ session('success') ?? 'Profil berhasil diperbarui!' }}
                </div>
            </div>
            @endif
            
            <div class="bg-white overflow-hidden shadow-sm rounded-[2.5rem] border border-gray-100 mb-8">
                <div class="p-8 flex flex-col md:flex-row items-center gap-8">
                    <div class="shrink-0 relative">
                        @if(Auth::user()->avatar)
                            <img src="{{ asset('avatars/' . Auth::user()->avatar) }}" class="w-24 h-24 rounded-3xl object-cover border-4 border-orange-50 shadow-md">
                        @else
                            <div class="w-24 h-24 rounded-3xl bg-gradient-to-br from-orange-400 to-kreatifin-orange flex items-center justify-center text-white text-3xl font-black shadow-lg">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                        @endif
                        <div class="absolute -bottom-1 -right-1 w-6 h-6 rounded-full border-4 border-white shadow-sm {{ Auth::user()->status == 'Available' ? 'bg-green-500' : 'bg-red-500' }}"></div>
                    </div>

                    <div class="text-center md:text-left flex-1">
                        <div class="flex flex-col md:flex-row md:items-center gap-2 mb-2">
                            <h3 class="text-3xl font-black text-gray-900">Halo, {{ explode(' ', Auth::user()->name)[0] }}! 👋</h3>
                            <span class="inline-block px-3 py-1 bg-orange-50 text-kreatifin-orange text-[10px] font-black uppercase rounded-lg tracking-widest w-fit mx-auto md:mx-0">
                                {{ Auth::user()->skill ?? 'Kreator Baru' }}
                            </span>
                        </div>
                        <p class="text-gray-500 italic text-sm">"{{ Auth::user()->bio ?? 'Lengkapi bio kamu untuk menarik perhatian klien.' }}"</p>
                    </div>

                    <div class="shrink-0 flex gap-2">
                        <div class="text-right">
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Status Anda</p>
                            <p class="font-black {{ Auth::user()->status == 'Available' ? 'text-green-600' : 'text-red-600' }}">
                                {{ Auth::user()->status == 'Available' ? 'Tersedia' : 'Sedang Sibuk' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100 transition hover:shadow-md">
                    <p class="text-gray-400 font-bold mb-1 uppercase tracking-widest text-[10px]">Total Portofolio</p>
                    <h4 class="text-4xl font-extrabold text-kreatifin-orange">{{ Auth::user()->portofolios->count() }}</h4>
                </div>
                <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100 transition hover:shadow-md">
                    <p class="text-gray-400 font-bold mb-1 uppercase tracking-widest text-[10px]">Kontak WhatsApp</p>
                    <div class="flex items-center gap-2 mt-2">
                        <div class="p-1.5 bg-green-50 rounded-lg">
                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900">{{ Auth::user()->phone ?? 'Belum diatur' }}</h4>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100 transition hover:shadow-md">
                    <p class="text-gray-400 font-bold mb-1 uppercase tracking-widest text-[10px]">Status Akun</p>
                    <div class="flex items-center gap-2 mt-2">
                        <span class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></span>
                        <h4 class="text-xl font-bold text-gray-900 italic">Verified Kreator</h4>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-gray-900">Koleksi Karya Saya</h3>
                <a href="{{ route('kreator.detail', Auth::id()) }}" class="text-sm font-semibold text-kreatifin-orange hover:underline flex items-center gap-1 transition-all">
                    Lihat tampilan profil publik 
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                @forelse(Auth::user()->portofolios as $p)
                <div class="group relative bg-white rounded-[2rem] overflow-hidden shadow-sm border border-gray-100 h-64">
                    <img src="{{ asset('images/' . $p->image) }}" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-3">
                        <form action="{{ route('portofolio.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus karya ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-5 py-2 rounded-xl text-xs font-bold hover:bg-red-600 transition shadow-lg">
                                Hapus Karya
                            </button>
                        </form>
                    </div>

                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/90 to-transparent">
                        <p class="text-white font-bold truncate text-sm">{{ $p->title }}</p>
                    </div>
                </div>
                @empty
                <div class="col-span-full bg-white border-2 border-dashed border-gray-200 rounded-[3rem] py-20 text-center">
                    <div class="text-5xl mb-4 text-gray-200">📷</div>
                    <p class="text-gray-500 font-bold">Belum ada karya yang diunggah.</p>
                    <p class="text-sm text-gray-400 mt-1">Mulai pamerkan bakatmu sekarang.</p>
                </div>
                @endforelse
            </div>

        </div>
    </div>
</x-app-layout>