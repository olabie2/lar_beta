<x-layout>
    <div class="relative flex items-center justify-center min-h-[calc(100vh-80px)] p-4 sm:p-6 lg:p-8">
        <div class="max-w-4xl text-center">
            
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight animate-glow bg-gradient-to-r from-primary-light via-accent-purple to-accent-pink bg-clip-text text-transparent">
                {{ __('messages.home.hero.title') }}
            </h1>
            
            <p class="mt-6 text-xl sm:text-2xl text-text-secondary animate-[fade-in-up_1s_ease-out_0.3s_both]">
                {{ __('messages.home.hero.tagline') }}
            </p>

            <p class="mt-4 max-w-2xl mx-auto text-lg text-text-secondary/80 animate-[fade-in-up_1s_ease-out_0.6s_both]">
                {{ __('messages.home.hero.description') }}
            </p>

            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4 animate-[fade-in-up_1s_ease-out_0.9s_both]">
                <a href="{{route('ai-agents')}}" class="cta-btn primary bg-[#ffffff1a]">
                    {{ __('messages.home.hero.cta_primary') }}
                </a>
                <a href="/request-demo" class="cta-btn secondary text-white bg-gradient-to-br from-indigo-600 to-purple-600">
                    {{ __('messages.home.hero.cta_secondary') }}
                </a>
            </div>

        </div>
    </div>
</x-layout>