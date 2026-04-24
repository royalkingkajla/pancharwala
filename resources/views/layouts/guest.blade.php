<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-slate-900 antialiased">
        <div class="min-h-screen bg-[#fff8e7] lg:grid lg:grid-cols-[1.05fr_0.95fr]">
            <section class="relative hidden overflow-hidden bg-[#ff6b35] px-12 py-10 lg:flex lg:flex-col lg:justify-between">
                <div class="absolute inset-x-0 top-0 h-20 bg-[#ffd166]"></div>
                <div class="absolute bottom-0 left-0 h-32 w-full bg-[#06d6a0]"></div>
                <div class="absolute right-10 top-32 grid grid-cols-4 gap-3 opacity-90">
                    @for ($i = 0; $i < 16; $i++)
                        <span class="h-8 w-8 rounded-sm bg-white/80"></span>
                    @endfor
                </div>

                <a href="/" class="relative z-10 inline-flex items-center gap-3 text-white">
                    <span class="grid h-14 w-14 place-items-center rounded-lg bg-white text-2xl font-black text-[#ff6b35] shadow-lg">P</span>
                    <span class="text-2xl font-black">Pancharwala</span>
                </a>

                <div class="relative z-10 max-w-xl">
                    <p class="text-sm font-bold uppercase tracking-[0.28em] text-[#073b4c]">Fresh. Fast. Local.</p>
                    <h1 class="mt-4 text-6xl font-black leading-none text-white">
                        Welcome back to your shop.
                    </h1>
                    <p class="mt-6 max-w-md text-lg font-medium leading-8 text-white/90">
                        Manage products, customers, and orders from one bright workspace built for daily business.
                    </p>
                </div>

                <div class="relative z-10 flex gap-3">
                    <span class="h-3 w-20 rounded-full bg-white"></span>
                    <span class="h-3 w-12 rounded-full bg-[#118ab2]"></span>
                    <span class="h-3 w-16 rounded-full bg-[#073b4c]"></span>
                </div>
            </section>

            <main class="flex min-h-screen items-center justify-center px-5 py-10 sm:px-8">
                <div class="w-full max-w-md">
                    <div class="mb-8 flex items-center justify-center gap-3 lg:hidden">
                        <span class="grid h-12 w-12 place-items-center rounded-lg bg-[#ff6b35] text-xl font-black text-white shadow-md">P</span>
                        <span class="text-2xl font-black text-[#073b4c]">Pancharwala</span>
                    </div>

                    <div class="overflow-hidden rounded-2xl border-4 border-[#073b4c] bg-white shadow-[12px_12px_0_#ffd166]">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
