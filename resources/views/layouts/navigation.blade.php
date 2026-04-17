<nav x-data="{ open: false }"
    class="bg-white dark:bg-gray-900
            border-b border-gray-200 dark:border-gray-700
            transition-colors duration-300">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- LEFT -->
            <div class="flex">

                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}"
                        class="text-gray-800 dark:text-gray-100 font-semibold tracking-wide">
                        AUTO ADDICT
                    </a>
                </div>

                <!-- Nav Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        Dashboard
                    </x-nav-link>
                </div>


            </div>

            <!-- RIGHT -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 gap-3">

                <!-- Dropdown -->
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center gap-2 px-3 py-2 text-sm font-medium rounded-md
                       text-gray-700 dark:text-gray-200
                       bg-white dark:bg-gray-800
                       border border-gray-200 dark:border-gray-700
                       hover:bg-gray-50 dark:hover:bg-gray-700
                       hover:text-gray-900 dark:hover:text-white
                       shadow-sm hover:shadow
                       transition duration-200">

                            <div>{{ Auth::user()->name }}</div>

                            <svg class="fill-current h-4 w-4 opacity-70" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>

                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div
                            class="bg-white dark:bg-gray-800
                        border border-gray-200 dark:border-gray-700
                        rounded-md shadow-lg
                        transition-colors duration-300">

                            <x-dropdown-link :href="route('profile.edit')">
                                Profile
                            </x-dropdown-link>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Log Out
                                </x-dropdown-link>
                            </form>

                        </div>
                    </x-slot>
                </x-dropdown>

            </div>

            <!-- Mobile Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="p-2 rounded-md
                           text-gray-400 dark:text-gray-300
                           hover:bg-gray-100 dark:hover:bg-gray-800
                           transition">

                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke="currentColor" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />

                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke="currentColor"
                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <!-- Floating Mobile Menu -->
    <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute right-4 top-16 w-56
            bg-white dark:bg-gray-800
            border border-gray-200 dark:border-gray-700
            rounded-lg shadow-lg
            z-50 sm:hidden
            overflow-hidden">

        <div class="py-2">

            <!-- User Info -->
            <div class="px-4 py-2">
                <div class="text-gray-800 dark:text-gray-100 font-medium text-sm">
                    {{ Auth::user()->name }}
                </div>
                <div class="text-gray-500 dark:text-gray-400 text-xs">
                    {{ Auth::user()->email }}
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-gray-200 dark:border-gray-700 my-2"></div>

            <!-- Menu -->
            <x-responsive-nav-link :href="route('dashboard')">
                Dashboard
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('profile.edit')">
                Profile
            </x-responsive-nav-link>

            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    Log Out
                </x-responsive-nav-link>
            </form>

        </div>
    </div>
</nav>
