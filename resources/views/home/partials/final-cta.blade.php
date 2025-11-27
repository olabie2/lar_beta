<!-- Final CTA Section -->
<section class="relative py-20 px-4 sm:px-6 lg:px-8 mb-20">
    <div class="max-w-5xl mx-auto">
        <div class="scroll-reveal relative overflow-hidden rounded-3xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 p-12 md:p-16 text-center">
            <!-- Subtle gradient overlay -->
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/10 to-purple-500/10"></div>
            
            <div class="relative z-10">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4 sm:mb-6">
                    {{ __('messages.home.final_cta.title') }}
                </h2>
                <p class="text-lg sm:text-xl text-gray-300 mb-8 sm:mb-10 max-w-3xl mx-auto">
                    {{ __('messages.home.final_cta.tagline') }}
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4">
                    <x-button-secondary href="/request-demo" class="w-full sm:w-auto">
                        {{ __('messages.home.final_cta.cta_primary') }}
                    </x-button-secondary>
                    <x-button-primary href="/contact" class="w-full sm:w-auto">
                        {{ __('messages.home.final_cta.cta_secondary') }}
                    </x-button-primary>
                </div>
            </div>
        </div>
    </div>
</section>
