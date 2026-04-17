<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="darkModeHandler()" x-init="init()">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- 🔥 Prevent flicker (IMPORTANT) -->
    <script>
        (function() {
            const stored = localStorage.getItem('darkMode');
            const isDark = stored !== null ?
                stored === 'true' :
                window.matchMedia('(prefers-color-scheme: dark)').matches;

            if (isDark) {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Prime Icons --}}
    <link rel="stylesheet" href="https://unpkg.com/primeicons/primeicons.css">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body
    class="font-sans antialiased
             bg-gray-100 dark:bg-gray-900
             text-gray-900 dark:text-gray-100
             transition-colors duration-300">

    {{-- Loader --}}
    <x-loader-rotate />

    <div
        class="min-h-screen
                bg-gray-100 dark:bg-gray-900
                transition-colors duration-300">

        @include('layouts.navigation')

        <!-- Page Heading -->
        {{-- @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow transition-colors duration-300">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset --}}

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <!-- 🌙 DARK MODE TOGGLE -->
    <div class="fixed bottom-3 right-3 z-50">
        <button @click="toggle()"
            class="px-2 py-1 rounded-md border
                   bg-white/90 backdrop-blur
                   text-gray-700 border-gray-300
                   dark:bg-gray-800/90 dark:text-gray-200 dark:border-gray-600
                   shadow-sm hover:shadow-md
                   hover:bg-gray-50 dark:hover:bg-gray-700
                   hover:scale-105 active:scale-95
                   transition-all duration-200">

            <i x-show="!darkMode" x-cloak class="pi pi-moon text-sm"></i>
            <i x-show="darkMode" x-cloak class="pi pi-sun text-sm"></i>
        </button>
    </div>

    <!-- 🌙 DARK MODE SCRIPT -->
    <script>
        function darkModeHandler() {
            return {
                darkMode: false,

                init() {
                    const stored = localStorage.getItem('darkMode');

                    this.darkMode = stored !== null ?
                        stored === 'true' :
                        window.matchMedia('(prefers-color-scheme: dark)').matches;

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
