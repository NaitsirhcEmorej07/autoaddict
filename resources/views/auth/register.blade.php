<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="text-gray-700 dark:text-gray-300" />

            <x-text-input id="name"
                class="block mt-1 w-full 
                       bg-white dark:bg-gray-700 
                       text-gray-900 dark:text-gray-100 
                       border-gray-300 dark:border-gray-600 
                       focus:border-indigo-500 dark:focus:border-indigo-400 
                       focus:ring-indigo-500 dark:focus:ring-indigo-400"
                type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />

            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500 dark:text-red-400" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="text-gray-700 dark:text-gray-300" />

            <x-text-input id="email"
                class="block mt-1 w-full 
                       bg-white dark:bg-gray-700 
                       text-gray-900 dark:text-gray-100 
                       border-gray-300 dark:border-gray-600 
                       focus:border-indigo-500 dark:focus:border-indigo-400 
                       focus:ring-indigo-500 dark:focus:ring-indigo-400"
                type="email" name="email" :value="old('email')" required autocomplete="username" />

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
                type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 dark:text-red-400" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-700 dark:text-gray-300" />

            <x-text-input id="password_confirmation"
                class="block mt-1 w-full 
                       bg-white dark:bg-gray-700 
                       text-gray-900 dark:text-gray-100 
                       border-gray-300 dark:border-gray-600 
                       focus:border-indigo-500 dark:focus:border-indigo-400 
                       focus:ring-indigo-500 dark:focus:ring-indigo-400"
                type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500 dark:text-red-400" />
        </div>

        <!-- Actions -->
        <div class="flex items-center justify-between mt-4">

            <a class="text-sm text-gray-600 dark:text-gray-400 
                       hover:text-gray-900 dark:hover:text-gray-200 
                       underline"
                href="{{ route('login') }}">
                {{ __('Back to login') }}
            </a>

            <x-primary-button
                class="ms-4 
           bg-black text-white hover:bg-gray-800
           dark:bg-white dark:text-black dark:hover:bg-gray-200
           transition duration-200">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
