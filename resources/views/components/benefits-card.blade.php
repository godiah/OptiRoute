@props(['reverse' => false])

@php
    // If reverse is true, use flex-row-reverse for small screens and flex-row for md and above.
    // If not, default to flex-row across all screens.
    $layoutClass = $reverse ? 'flex-row-reverse md:flex-row' : 'flex-row';
@endphp

<div
    class="flex bg-light-gray rounded-2xl overflow-hidden border-2 border-gray-300 mx-auto p-1 md:p-4 {{ $layoutClass }}">
    {{ $slot }}
</div>
