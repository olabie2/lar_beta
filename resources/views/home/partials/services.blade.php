<!-- Services Section -->
<section class="relative py-20 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 bg-clip-text text-transparent mb-6">
                {{ __('messages.home.services.title') }}
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                {{ __('messages.home.services.tagline') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $services = [
                ['key' => 'ai_agents', 'route' => 'ai-agents'],
                ['key' => 'development', 'route' => '/services'],
                ['key' => 'consulting', 'route' => '/services'],
                ['key' => 'education', 'route' => '/services'],
                ['key' => 'events', 'route' => '/services'],
                ['key' => 'real_estate', 'route' => '/services'],
            ];
            @endphp

            @foreach($services as $index => $service)
                <div class="scroll-reveal delay-{{ $index + 1 }} group relative bg-gradient-to-br from-indigo-900/40 to-purple-900/40 backdrop-blur-sm border border-indigo-500/30 rounded-3xl p-8 hover:scale-105 hover:border-indigo-400/60 transition-all duration-500 hover:shadow-2xl hover:shadow-indigo-500/20">
                    <h3 class="text-2xl font-bold text-white mb-4 mt-4">{{ __("messages.home.services.{$service['key']}.title") }}</h3>
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        {{ __("messages.home.services.{$service['key']}.desc") }}
                    </p>
                    <ul class="space-y-2 mb-6 text-gray-300">
                        <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> {{ __("messages.home.services.{$service['key']}.feat1") }}</li>
                        <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> {{ __("messages.home.services.{$service['key']}.feat2") }}</li>
                        <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> {{ __("messages.home.services.{$service['key']}.feat3") }}</li>
                    </ul>
                    <a href="{{ $service['route'] }}" class="inline-flex items-center text-indigo-400 hover:text-indigo-300 font-semibold group-hover:gap-3 transition-all duration-300">
                        {{ __('messages.home.services.learn_more') }} <span class="ml-2">→</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
