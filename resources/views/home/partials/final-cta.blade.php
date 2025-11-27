<!-- Final CTA Section -->
<section class="relative py-20 px-4 sm:px-6 lg:px-8 mb-20">
    <div class="max-w-5xl mx-auto">
        <div class="scroll-reveal relative overflow-hidden rounded-3xl bg-gradient-to-br from-indigo-600/40 via-purple-600/40 to-pink-600/40 backdrop-blur-lg border border-indigo-400/50 p-12 md:p-16 text-center">
            <div class="absolute inset-0 bg-gradient-to-r from-indigo-500/10 to-purple-500/10"></div>
            <div class="relative z-10">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    {{ __('messages.home.final_cta.title') }}
                </h2>
                <p class="text-xl text-gray-200 mb-10 max-w-3xl mx-auto">
                    {{ __('messages.home.final_cta.tagline') }}
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="/request-demo" class="px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-2xl text-white bg-gradient-to-br from-white/20 to-white/10 border-2 border-white hover:bg-white/30 shadow-xl hover:shadow-indigo-500/50">
                        {{ __('messages.home.final_cta.cta_primary') }}
                    </a>
                    <a href="/contact" class="px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-2xl border-2 border-white text-white hover:bg-white/10">
                        {{ __('messages.home.final_cta.cta_secondary') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
