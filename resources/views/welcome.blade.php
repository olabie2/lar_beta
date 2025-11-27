<x-layout>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/home-animations.css') }}">
    @endpush

    <div class="relative bg-gradient-to-br from-slate-900 via-indigo-950 to-slate-900 text-white">
        
        @include('home.partials.hero')
        
        @include('home.partials.stats')
        
        @include('home.partials.services')
        
        @include('home.partials.why-choose-us')
        
        @include('home.partials.featured-projects')
        
        @include('home.partials.testimonials')
        
        @include('home.partials.tech-stack')
        
        @include('home.partials.final-cta')

    </div>
    
    @push('scripts')
        <!-- Three.js for FloatingLines animation -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
        <script src="{{ asset('js/floating-lines.js') }}"></script>
        
        @include('home.partials.scripts')
    @endpush
</x-layout>