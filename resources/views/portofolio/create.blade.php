<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Karya Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm rounded-4xl p-8 border border-gray-100">
                <form action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label class="block font-bold mb-2">Judul Karya</label>
                        <input type="text" name="title" class="w-full border-gray-200 rounded-xl focus:ring-kreatifin-orange focus:border-kreatifin-orange" placeholder="Contoh: Logo Design Minimalist" required>
                    </div>

                    <div class="mb-6">
                        <label class="block font-bold mb-2">Deskripsi</label>
                        <textarea name="description" rows="4" class="w-full border-gray-200 rounded-xl focus:ring-kreatifin-orange focus:border-kreatifin-orange" placeholder="Ceritakan sedikit tentang karya ini..." required></textarea>
                    </div>

                    <div class="mb-8">
                        <label class="block font-bold mb-2">Unggah Gambar (JPG/PNG)</label>
                        <input type="file" name="image" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-kreatifin-orange hover:file:bg-orange-100" required>
                    </div>

                    <div class="flex gap-4">
                        <button type="submit" class="bg-kreatifin-orange text-white px-8 py-3 rounded-xl font-bold hover:bg-orange-600 transition shadow-lg shadow-orange-100">
                            Simpan Karya
                        </button>
                        <a href="{{ route('dashboard') }}" class="bg-gray-100 text-gray-600 px-8 py-3 rounded-xl font-bold hover:bg-gray-200 transition">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>