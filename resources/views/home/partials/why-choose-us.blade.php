<!-- Why Choose Us Section -->
<section class="relative py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-transparent via-indigo-950/30 to-transparent">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent mb-6">
                {{ __('messages.home.why_choose_us.title') }}
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                {{ __('messages.home.why_choose_us.tagline') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @php
            $features = [
                ['icon' => '⚡', 'key' => 'fast_delivery'],
                ['icon' => '🎯', 'key' => 'tailored_solutions'],
                ['icon' => '🛡️', 'key' => 'security'],
                ['icon' => '🤝', 'key' => 'support'],
            ];
            @endphp

            @foreach($features as $index => $feature)
                <div class="scroll-reveal delay-{{ $index + 1 }} flex gap-6 p-8 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 transition-all duration-300">
                    <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center text-3xl">
                        {{ $feature['icon'] }}
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-3">{{ __("messages.home.why_choose_us.{$feature['key']}.title") }}</h3>
                        <p class="text-gray-400 leading-relaxed">
                            {{ __("messages.home.why_choose_us.{$feature['key']}.desc") }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
