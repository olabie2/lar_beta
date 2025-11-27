<!-- Testimonials Section -->
<section class="relative py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-transparent via-indigo-950/20 to-transparent">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent mb-6">
                {{ __('messages.home.testimonials.title') }}
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                {{ __('messages.home.testimonials.tagline') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach(['client1', 'client2', 'client3'] as $index => $client)
                <div class="scroll-reveal delay-{{ $index + 1 }} p-8 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 transition-all duration-300 hover:scale-105">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6 leading-relaxed italic">
                        "{{ __("messages.home.testimonials.{$client}.quote") }}"
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            {{ substr(__("messages.home.testimonials.{$client}.name"), 0, 2) }}
                        </div>
                        <div>
                            <p class="text-white font-semibold">{{ __("messages.home.testimonials.{$client}.name") }}</p>
                            <p class="text-gray-400 text-sm">{{ __("messages.home.testimonials.{$client}.title") }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
