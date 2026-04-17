@props(['active' => false])

@php
    $base =
        'block w-full ps-3 pe-4 py-2 border-l-4 text-start text-base font-medium transition duration-150 ease-in-out';

    $activeClasses = 'border-yellow-500
                  text-gray-900 dark:text-yellow-400
                  bg-gray-100 dark:bg-gray-700';

    $inactiveClasses = 'border-transparent
                    text-gray-600 dark:text-gray-300
                    hover:text-gray-900 dark:hover:text-white
                    hover:bg-gray-50 dark:hover:bg-gray-700
                    hover:border-gray-300 dark:hover:border-gray-600';

    $classes = $base . ' ' . ($active ? $activeClasses : $inactiveClasses);
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
