@props(['href', 'active' => false])

@php
    $classes = $active
        ? 'nav-link active text-primary-blue font-medium text-sm transition-colors duration-200 py-2 relative'
        : 'nav-link text-dark-text hover:text-primary-blue font-medium text-sm transition-colors duration-200 py-2 relative';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
