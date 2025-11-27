@props(['href' => '#', 'type' => 'link'])

@if($type === 'button')
    <button {{ $attributes->merge(['class' => 'cta-btn secondary text-white bg-gradient-to-br from-indigo-600 to-purple-600']) }}>
        {{ $slot }}
    </button>
@else
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'cta-btn secondary text-white bg-gradient-to-br from-indigo-600 to-purple-600']) }}>
        {{ $slot }}
    </a>
@endif
