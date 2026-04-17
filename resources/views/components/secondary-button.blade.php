<button {{ $attributes->merge([
    'type' => 'button',
    'class' => 'inline-flex items-center px-4 py-2 rounded-md
                font-semibold text-xs uppercase tracking-widest

                bg-gray-100 dark:bg-gray-700
                text-gray-800 dark:text-gray-200

                border border-gray-300 dark:border-gray-600

                hover:bg-gray-200 dark:hover:bg-gray-600
                active:bg-gray-300 dark:active:bg-gray-500

                focus:outline-none focus:ring-2 focus:ring-offset-2
                focus:ring-gray-400 dark:focus:ring-gray-500

                disabled:opacity-25

                transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</button>