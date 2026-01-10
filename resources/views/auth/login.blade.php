<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="mb-8 text-center">
        <h1 class="text-3xl font-black text-gray-900">Selamat Datang <span class="text-kreatifin-orange">Kembali!</span></h1>
        <p class="text-gray-500 mt-2">Masuk untuk mengelola portofolio terbaikmu.</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" class="font-bold text-gray-700" />
            <x-text-input id="email" class="block mt-1 w-full rounded-2xl border-gray-200 focus:ring-kreatifin-orange focus:border-kreatifin-orange" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="nama@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="font-bold text-gray-700" />
            <x-text-input id="password" class="block mt-1 w-full rounded-2xl border-gray-200 focus:ring-kreatifin-orange focus:border-kreatifin-orange" type="password" name="password" required autocomplete="current-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4 flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded-md border-gray-300 text-kreatifin-orange shadow-sm focus:ring-kreatifin-orange" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Ingat saya') }}</span>
            </label>
            @if (Route::has('password.request'))
                <a class="text-sm text-kreatifin-orange font-bold hover:underline" href="{{ route('password.request') }}">
                    {{ __('Lupa password?') }}
                </a>
            @endif
        </div>

        <div class="mt-8">
            <x-primary-button class="w-full justify-center bg-gray-900 hover:bg-kreatifin-orange text-white py-4 rounded-2xl font-black text-sm transition-all duration-300 shadow-lg shadow-orange-100 uppercase tracking-widest">
                {{ __('Masuk Sekarang') }}
            </x-primary-button>
        </div>

        <div class="mt-8 text-center border-t border-gray-100 pt-6">
            <p class="text-sm text-gray-600">
                Belum punya akun? 
                <a href="{{ route('register') }}" class="text-kreatifin-orange font-black hover:underline italic">Daftar Jadi Kreator</a>
            </p>
        </div>
    </form>
</x-guest-layout>