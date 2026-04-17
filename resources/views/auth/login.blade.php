<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 text-gray-700 dark:text-gray-300" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-gray-700 dark:text-gray-300" />

            <x-text-input id="email"
                class="block mt-1 w-full 
                       bg-white dark:bg-gray-700 
                       text-gray-900 dark:text-gray-100 
                       border-gray-300 dark:border-gray-600 
                       focus:border-indigo-500 dark:focus:border-indigo-400 
                       focus:ring-indigo-500 dark:focus:ring-indigo-400"
                type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />

            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 dark:text-red-400" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-gray-700 dark:text-gray-300" />

            <x-text-input id="password"
                class="block mt-1 w-full 
                       bg-white dark:bg-gray-700 
                       text-gray-900 dark:text-gray-100 
                       border-gray-300 dark:border-gray-600 
                       focus:border-indigo-500 dark:focus:border-indigo-400 
                       focus:ring-indigo-500 dark:focus:ring-indigo-400"
                type="password" name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 dark:text-red-400" />
        </div>

        <!-- Row 1: Remember + Forgot -->
        <div class="flex items-center justify-between mt-4">

            <!-- Remember Me -->
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 dark:border-gray-600 
                   text-indigo-600 shadow-sm 
                   focus:ring-indigo-500 dark:focus:ring-indigo-400 
                   bg-white dark:bg-gray-700"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Remember me') }}
                </span>
            </label>

            <!-- Forgot Password -->
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 dark:text-gray-400 
                  hover:text-gray-900 dark:hover:text-gray-200 
                  underline"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

        </div>

        <!-- Row 2: Login Button Full Width -->
        <div class="mt-4">
            <x-primary-button
                class="w-full justify-center
               bg-black text-white hover:bg-gray-800
               dark:bg-white dark:text-black dark:hover:bg-gray-200
               transition duration-200">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <!-- Register Link -->
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600 dark:text-gray-400">
                Don't have an account?
                <a href="{{ route('register') }}"
                    class="font-medium text-indigo-600 dark:text-indigo-400 
                  hover:text-indigo-700 dark:hover:text-indigo-300 
                  underline transition">
                    Register
                </a>
            </p>
        </div>


    </form>
</x-guest-layout>
