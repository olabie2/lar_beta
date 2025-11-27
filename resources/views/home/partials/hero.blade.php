<!-- Hero Section -->
<div class="relative flex items-center justify-center min-h-[calc(100vh-80px)] p-4 sm:p-6 lg:p-8">
    <!-- Floating Lines Background -->
    <div id="floating-lines-bg" class="absolute inset-0 w-full h-full opacity-30"></div>
    
    <!-- Hero Content -->
    <div class="max-w-4xl text-center relative z-10">
        <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight animate-glow bg-gradient-to-r from-primary-light via-accent-purple to-accent-pink bg-clip-text text-transparent">
            {{ __('messages.home.hero.title') }}
        </h1>
        
        <p class="mt-4 sm:mt-6 text-lg sm:text-xl md:text-2xl text-text-secondary animate-[fade-in-up_1s_ease-out_0.3s_both]">
            {{ __('messages.home.hero.tagline') }}
        </p>

        <p class="mt-3 sm:mt-4 max-w-2xl mx-auto text-base sm:text-lg text-text-secondary/80 animate-[fade-in-up_1s_ease-out_0.6s_both]">
            {{ __('messages.home.hero.description') }}
        </p>

        <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 animate-[fade-in-up_1s_ease-out_0.9s_both]">
            <x-button-primary :href="route('ai-agents')" class="w-full sm:w-auto">
                {{ __('messages.home.hero.cta_primary') }}
            </x-button-primary>
            <x-button-secondary href="/request-demo" class="w-full sm:w-auto">
                {{ __('messages.home.hero.cta_secondary') }}
            </x-button-secondary>
        </div>
    </div>
</div>
