@props(['href' => '#', 'type' => 'link'])

@if($type === 'button')
    <button {{ $attributes->merge(['class' => 'cta-btn primary bg-[#ffffff1a]']) }}>
        {{ $slot }}
    </button>
@else
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'cta-btn primary bg-[#ffffff1a]']) }}>
        {{ $slot }}
    </a>
@endif
