<x-guest-layout>
    <div class="mb-8 text-center">
        <h1 class="text-3xl font-black text-gray-900">Gabung <span class="text-kreatifin-orange">Kreatifin</span></h1>
        <p class="text-gray-500 mt-2">Mulai pamerkan karyamu ke seluruh dunia.</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Nama Lengkap')" class="font-bold text-gray-700" />
            <x-text-input id="name" class="block mt-1 w-full rounded-2xl border-gray-200 focus:ring-kreatifin-orange focus:border-kreatifin-orange" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Masukkan nama lengkapmu" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="font-bold text-gray-700" />
            <x-text-input id="email" class="block mt-1 w-full rounded-2xl border-gray-200 focus:ring-kreatifin-orange focus:border-kreatifin-orange" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="nama@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="role" :value="__('Daftar Sebagai')" class="font-bold text-gray-700" />
            <select name="role" id="role" class="block mt-1 w-full rounded-2xl border-gray-200 focus:ring-kreatifin-orange focus:border-kreatifin-orange text-gray-600 bg-white py-3 px-4 shadow-sm" required>
                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>Pengunjung (Cari Jasa)</option>
                <option value="kreator" {{ old('role') == 'kreator' ? 'selected' : '' }}>Kreator (Buka Jasa)</option>
            </select>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
            <p class="text-[10px] text-gray-400 mt-2 italic">*Pilih 'Kreator' jika kamu ingin memamerkan portofolio.</p>
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="font-bold text-gray-700" />
            <x-text-input id="password" class="block mt-1 w-full rounded-2xl border-gray-200 focus:ring-kreatifin-orange focus:border-kreatifin-orange" type="password" name="password" required autocomplete="new-password" placeholder="Min. 8 karakter" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Ulangi Password')" class="font-bold text-gray-700" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full rounded-2xl border-gray-200 focus:ring-kreatifin-orange focus:border-kreatifin-orange" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Ketik ulang password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-8">
            <x-primary-button class="w-full justify-center bg-gray-900 hover:bg-kreatifin-orange text-white py-4 rounded-2xl font-black text-sm transition-all duration-300 shadow-lg shadow-orange-100 uppercase tracking-widest">
                {{ __('Daftar Sekarang') }}
            </x-primary-button>
        </div>

        <div class="mt-8 text-center border-t border-gray-100 pt-6">
            <p class="text-sm text-gray-600">
                Sudah punya akun? 
                <a href="{{ route('login') }}" class="text-kreatifin-orange font-black hover:underline italic">Masuk di sini</a>
            </p>
        </div>
    </form>
</x-guest-layout>