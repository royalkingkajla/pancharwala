<x-guest-layout>
    <div class="bg-[#118ab2] px-8 py-7 text-white">
        <p class="text-sm font-bold uppercase tracking-[0.24em] text-[#ffd166]">Account Login</p>
        <h2 class="mt-2 text-3xl font-black leading-tight">Sign in to Pancharwala</h2>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-6 px-8 py-8">
        @csrf

        <x-auth-session-status class="rounded-lg bg-[#06d6a0]/15 px-4 py-3 text-sm font-semibold text-[#073b4c]" :status="session('status')" />

        <div>
            <x-input-label for="email" :value="__('Email')" class="text-[#073b4c]" />
            <x-text-input
                id="email"
                class="mt-2 block w-full rounded-xl border-2 border-[#118ab2]/30 bg-[#fff8e7] px-4 py-3 text-base shadow-none transition focus:border-[#ff6b35] focus:ring-[#ff6b35]"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                autocomplete="username"
                placeholder="you@example.com"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Password')" class="text-[#073b4c]" />

            <x-text-input
                id="password"
                class="mt-2 block w-full rounded-xl border-2 border-[#118ab2]/30 bg-[#fff8e7] px-4 py-3 text-base shadow-none transition focus:border-[#ff6b35] focus:ring-[#ff6b35]"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                placeholder="Enter your password"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex flex-wrap items-center justify-between gap-3">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-2 border-[#118ab2]/40 text-[#ff6b35] shadow-sm focus:ring-[#ff6b35]" name="remember">
                <span class="ms-2 text-sm font-semibold text-[#073b4c]">{{ __('Remember me') }}</span>
            </label>
            @if (Route::has('password.request'))
                <a class="rounded-md text-sm font-bold text-[#118ab2] underline decoration-[#ffd166] decoration-4 underline-offset-4 transition hover:text-[#ff6b35] focus:outline-none focus:ring-2 focus:ring-[#ff6b35] focus:ring-offset-2" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <x-primary-button class="w-full justify-center rounded-xl border-0 bg-[#ff6b35] px-5 py-3 text-sm font-black text-white shadow-[0_6px_0_#d94d22] transition hover:bg-[#f45f29] focus:bg-[#f45f29] focus:ring-[#ffd166] active:translate-y-1 active:bg-[#d94d22] active:shadow-[0_2px_0_#d94d22]">
            {{ __('Log in') }}
        </x-primary-button>

        <p class="text-center text-sm font-semibold text-slate-600">
            {{ __("Don't have an account?") }}
            <a href="{{ route('register') }}" class="font-black text-[#118ab2] underline decoration-[#06d6a0] decoration-4 underline-offset-4 hover:text-[#ff6b35]">
                {{ __('Create one') }}
            </a>
        </p>
    </form>
</x-guest-layout>
