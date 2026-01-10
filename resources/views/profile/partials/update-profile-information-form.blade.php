<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Informasi Profil Kreator') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Perbarui foto profil, keahlian, dan status ketersediaan kamu agar klien mudah menemukanmu.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="flex items-center gap-6">
            <div class="shrink-0">
                @if($user->avatar)
                    <img class="h-20 w-20 object-cover rounded-2xl shadow-sm border-2 border-orange-100" src="{{ asset('avatars/' . $user->avatar) }}" alt="{{ $user->name }}">
                @else
                    <div class="h-20 w-20 rounded-2xl bg-orange-100 flex items-center justify-center text-kreatifin-orange font-bold text-2xl border-2 border-orange-50">
                        {{ substr($user->name, 0, 1) }}
                    </div>
                @endif
            </div>
            <div class="flex-1">
                <x-input-label for="avatar" :value="__('Ganti Foto Profil')" />
                <input id="avatar" name="avatar" type="file" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-bold file:bg-orange-50 file:text-kreatifin-orange hover:file:bg-orange-100 transition" />
                <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <x-input-label for="name" :value="__('Nama Lengkap')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <x-input-label for="phone" :value="__('Nomor WhatsApp')" />
                <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $user->phone)" placeholder="628123xxx" />
                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
            </div>

            <div>
                <x-input-label for="skill" :value="__('Keahlian Utama')" />
                <select id="skill" name="skill" class="mt-1 block w-full border-gray-300 focus:border-kreatifin-orange focus:ring-kreatifin-orange rounded-2xl shadow-sm text-sm">
                    <option value="" disabled {{ !$user->skill ? 'selected' : '' }}>Pilih Keahlian</option>
                    <option value="Videographer" {{ old('skill', $user->skill) == 'Videographer' ? 'selected' : '' }}>Videographer</option>
                    <option value="Editor" {{ old('skill', $user->skill) == 'Editor' ? 'selected' : '' }}>Video Editor</option>
                    <option value="Photographer" {{ old('skill', $user->skill) == 'Photographer' ? 'selected' : '' }}>Photographer</option>
                    <option value="Animator" {{ old('skill', $user->skill) == 'Animator' ? 'selected' : '' }}>Animator</option>
                    <option value="Pilot Drone" {{ old('skill', $user->skill) == 'Pilot Drone' ? 'selected' : '' }}>Pilot Drone</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('skill')" />
            </div>

            <div>
                <x-input-label for="status" :value="__('Status Ketersediaan')" />
                <select id="status" name="status" class="mt-1 block w-full border-gray-300 focus:border-kreatifin-orange focus:ring-kreatifin-orange rounded-2xl shadow-sm text-sm">
                    <option value="Available" {{ old('status', $user->status) == 'Available' ? 'selected' : '' }}>✅ Tersedia</option>
                    <option value="Busy" {{ old('status', $user->status) == 'Busy' ? 'selected' : '' }}>❌ Sedang Sibuk</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('status')" />
            </div>
        </div>

        <div>
            <x-input-label for="bio" :value="__('Bio Singkat')" />
            <textarea id="bio" name="bio" rows="4" class="mt-1 block w-full border-gray-300 focus:border-orange-500 focus:ring-orange-500 rounded-2xl shadow-sm text-sm" placeholder="Ceritakan siapa kamu...">{{ old('bio', $user->bio) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('bio')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-gray-900 hover:bg-kreatifin-orange transition px-8 py-3 rounded-xl font-bold text-xs uppercase tracking-widest">
                {{ __('Simpan Profil') }}
            </x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-green-600 font-bold">
                    {{ __('Profil berhasil diperbarui! ✨') }}
                </p>
            @endif
        </div>
    </form>
</section>