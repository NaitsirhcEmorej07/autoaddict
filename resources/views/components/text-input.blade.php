@props(['disabled' => false])

<input
    @disabled($disabled)
    {{ $attributes->merge([
        'class' => 'border-gray-300 dark:border-gray-600
                    bg-white dark:bg-gray-700
                    text-gray-900 dark:text-gray-100
                    placeholder-gray-400 dark:placeholder-gray-500

                    rounded-md shadow-sm

                    focus:border-indigo-500 dark:focus:border-indigo-400
                    focus:ring-indigo-500 dark:focus:ring-indigo-400

                    disabled:bg-gray-100 dark:disabled:bg-gray-800
                    disabled:text-gray-500 dark:disabled:text-gray-400

                    transition duration-150 ease-in-out'
    ]) }}
>