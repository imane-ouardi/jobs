@php
    $classes = 'p-4 bg-white/5 rounded-2xl border border-gray-400 hover:border-orange-800 group transition-colors duration-300';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
