@props(['active' => false])

@php
$classes = 'relative text-base font-medium transition-colors duration-300 after:absolute after:bottom-[-4px] after:start-0 after:w-0 after:h-0.5 after:bg-gradient-to-r after:from-primary-indigo after:to-accent-purple after:transition-all after:duration-300 hover:text-primary-light hover:after:w-full';

$classes .= $active ? ' text-primary-light' : ' text-text-secondary';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>