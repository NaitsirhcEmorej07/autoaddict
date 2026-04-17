<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' => 'inline-flex items-center px-4 py-2 rounded-md
                    text-xs font-semibold uppercase tracking-widest
                    text-white
                    bg-gray-900 dark:bg-gray-100
                    dark:text-gray-900
    
                    hover:bg-gray-800 dark:hover:bg-white
                    active:bg-gray-700 dark:active:bg-gray-200
    
                    focus:outline-none focus:ring-2 focus:ring-offset-2
                    focus:ring-gray-900 dark:focus:ring-gray-300
    
                    transition ease-in-out duration-150',
    ]) }}>
    {{ $slot }}
</button>
