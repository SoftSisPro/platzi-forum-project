@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex uppercase items-center px-1 pt-1 border-b-2 border-blue-600    font-medium text-sm  text-white/90 transition duration-150 ease-in-out'
            : 'inline-flex uppercase items-center px-1 pt-1 border-b-2 border-transparent font-medium text-sm  text-gray-600 hover:text-white hover:border-blue-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
