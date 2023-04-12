@props(['active'])

@php
    
    $classes = $active ?? false ? 'inline-flex items-center w-full  px-2 py-1 text-sm font-semibold text-gray-800 transition-colors duration-150 rounded-md bg-gray-100 hover:text-gray-800 dark:bg-gray-800 dark:hover:text-gray-200 dark:text-gray-100' : 'inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200';
    
@endphp

<li class="flex">
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>

{{-- <li class="flex">
    <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
        href="#">
        <span>Messages</span>
        <span
            class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
            13
        </span>
    </a>
</li> --}}
