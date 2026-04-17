<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="darkModeHandler()" x-init="init()">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Auto Addict</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://unpkg.com/primeicons/primeicons.css">

    <style>
        @keyframes scroll {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        .scroll {
            animation: scroll 20s linear infinite;
            width: fit-content;
        }
    </style>

</head>

<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition">

    {{-- Loader --}}
    {{-- <x-loader /> --}}
    {{-- <x-loader-glow /> --}}
    <x-loader-rotate />


    <!-- DARK MODE TOGGLE -->
    <div class="fixed bottom-3 right-3 z-50">
        <button @click="toggle()"
            class="px-2 py-1
               rounded-md border
               bg-white/90 backdrop-blur
               text-gray-700 border-gray-300
               dark:bg-gray-800/90 dark:text-gray-200 dark:border-gray-600

               shadow-sm hover:shadow-md
               hover:bg-gray-50 dark:hover:bg-gray-700
               hover:scale-105 active:scale-95

               transition-all duration-200 ease-in-out">

            <i x-show="!darkMode" x-cloak class="pi pi-moon text-sm"></i>
            <i x-show="darkMode" x-cloak class="pi pi-sun text-sm"></i>

        </button>
    </div>



    <!-- NAVBAR -->
    <div class="flex justify-between items-center px-6 py-4 max-w-7xl mx-auto">
        <div class="flex items-center gap-2">
            <img src="{{ asset('images/logo_250.png') }}" class="h-10">
            {{-- <span class="font-semibold tracking-wide">Auto Addict</span> --}}
        </div>

        <div class="flex items-center gap-3">
            <a href="{{ route('login') }}" class="text-sm hover:underline">Login</a>
            <a href="{{ route('register') }}" class="text-sm font-medium underline">Register</a>
        </div>
    </div>

    <!-- HERO -->
    <section class="text-center px-6 py-16">

        <div class="text-center">
            <p class="text-xl sm:text-2xl font-semibold tracking-[0.25em] text-yellow-500 uppercase mb-2">
                Auto Addict
            </p>

            <h1 class="text-3xl sm:text-5xl font-semibold tracking-tight text-gray-900 dark:text-white">
                Your Online <span class="text-yellow-500 font-bold tracking-tight">Garage</span>
            </h1>
        </div>

        <p class="mt-3 text-gray-600 dark:text-gray-400 max-w-xl mx-auto">
            Showcase, list, and sell your cars — whether you're an individual or a business owner.
        </p>

        <div class="mt-6 flex justify-center gap-3">
            <a href="{{ route('register') }}"
                class="px-6 py-2 bg-black text-white rounded-md hover:bg-gray-800
                      dark:bg-white dark:text-black dark:hover:bg-gray-200 transition">
                Browse Auto
            </a>

            <a href=""
                class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                About
            </a>
        </div>
    </section>

    <!-- BRANDS -->
    <section class="py-5">
        <div class="max-w-6xl mx-auto px-6">

            <!-- CLIP AREA (same width as FEATURES) -->
            <div class="overflow-hidden">

                <div class="scroll flex gap-12 whitespace-nowrap">

                    <!-- LEFT SPACER -->
                    <div class="w-6 sm:hidden"></div>

                    <div class="flex gap-12">
                        <span class="text-gray-400">Toyota</span>
                        <span class="text-gray-400">Honda</span>
                        <span class="text-gray-400">BMW</span>
                        <span class="text-gray-400">Mercedes</span>
                    </div>

                    <div class="flex gap-12">
                        <span class="text-gray-400">Toyota</span>
                        <span class="text-gray-400">Honda</span>
                        <span class="text-gray-400">BMW</span>
                        <span class="text-gray-400">Mercedes</span>
                    </div>

                    <!-- RIGHT SPACER -->
                    <div class="w-6 sm:hidden"></div>

                </div>

            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="max-w-6xl mx-auto px-6 py-12 grid sm:grid-cols-3 gap-6">

        <div
            class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow text-center 
            transition hover:-translate-y-1 hover:shadow-lg">
            <i class="pi pi-image text-2xl mb-3"></i>
            <h3 class="font-semibold">Showcase</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                Display your cars with clean, premium listings.
            </p>
        </div>

        <div
            class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow text-center 
            transition hover:-translate-y-1 hover:shadow-lg">
            <i class="pi pi-tags text-2xl mb-3"></i>
            <h3 class="font-semibold">List & Sell</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                Easily post cars for sale and connect with buyers.
            </p>
        </div>

        <div
            class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow text-center 
            transition hover:-translate-y-1 hover:shadow-lg">
            <i class="pi pi-users text-2xl mb-3"></i>
            <h3 class="font-semibold">For Everyone</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                Built for individuals and businesses alike.
            </p>
        </div>

    </section>

    <!-- CTA -->
    <section class="text-center py-16">
        <h2 class="text-md font-semibold">
            Start building your garage today.
        </h2>

        <a href="{{ route('register') }}"
            class="mt-4 inline-block px-6 py-2 bg-black text-white rounded-md hover:bg-gray-800
                  dark:bg-white dark:text-black dark:hover:bg-gray-200 transition">
            Create Account
        </a>
    </section>

    <!-- FOOTER -->
    <footer class="text-center py-6 text-xs text-gray-500 dark:text-gray-400">
        © {{ date('Y') }} Auto Addict. All rights reserved.
    </footer>

    <!-- DARK MODE -->
    <script>
        function darkModeHandler() {
            return {
                darkMode: false,
                init() {
                    const stored = localStorage.getItem('darkMode');
                    this.darkMode = stored !== null ? stored === 'true' : window.matchMedia('(prefers-color-scheme: dark)')
                        .matches;
                    this.apply();
                },
                toggle() {
                    this.darkMode = !this.darkMode;
                    localStorage.setItem('darkMode', this.darkMode);
                    this.apply();
                },
                apply() {
                    document.documentElement.classList.toggle('dark', this.darkMode);
                }
            }
        }
    </script>

</body>

</html>
