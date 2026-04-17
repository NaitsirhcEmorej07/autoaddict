@props([
    'align' => 'right',
    'width' => '48',
    'contentClasses' => '',
])

@php
    $alignmentClasses = match ($align) {
        'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
        'top' => 'origin-top',
        default => 'ltr:origin-top-right rtl:origin-top-left end-0',
    };

    $width = match ($width) {
        '48' => 'w-48',
        default => $width,
    };
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">

    <!-- Trigger -->
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <!-- Dropdown -->
    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
        class="absolute z-50 mt-2 {{ $width }} {{ $alignmentClasses }}" style="display: none;"
        @click="open = false">

        <div
            class="rounded-lg
                    bg-white dark:bg-gray-800
                    border border-gray-200 dark:border-gray-700
                    shadow-lg
                    overflow-hidden
                    transition-colors duration-200">

            {{ $content }}

        </div>
    </div>
</div>
