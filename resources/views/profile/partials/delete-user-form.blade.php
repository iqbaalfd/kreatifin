<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-red-600 font-bold">
            {{ __('Zona Bahaya: Hapus Akun') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600">
            {{ __('Setelah akun dihapus, semua data portofolio dan profil kamu akan hilang secara permanen. Mohon pertimbangkan kembali.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="rounded-xl px-6 py-3 font-bold text-xs uppercase tracking-widest"
    >{{ __('Hapus Akun Saya') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-8">
            @csrf
            @method('delete')

            <h2 class="text-xl font-bold text-gray-900">
                {{ __('Apakah kamu yakin ingin menghapus akun?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 italic">
                {{ __('Silakan masukkan password kamu untuk mengonfirmasi bahwa ini benar-benar kamu.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                <x-text-input id="password" name="password" type="password" class="mt-1 block w-3/4" placeholder="{{ __('Masukkan Password Kamu') }}" />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <x-secondary-button x-on:click="$dispatch('close')" class="rounded-xl px-6">
                    {{ __('Batal') }}
                </x-secondary-button>

                <x-danger-button class="rounded-xl px-6">
                    {{ __('Ya, Hapus Permanen') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>