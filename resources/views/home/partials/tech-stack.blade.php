<!-- Technology Stack Section -->
<section class="relative py-20 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 bg-clip-text text-transparent mb-6">
                {{ __('messages.home.tech_stack.title') }}
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                {{ __('messages.home.tech_stack.tagline') }}
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
            @php
            $techs = [
                ['icon' => '⚛️', 'name' => 'React'],
                ['icon' => '🔺', 'name' => 'Laravel'],
                ['icon' => '🐍', 'name' => 'Python'],
                ['icon' => '🤖', 'name' => 'AI/ML'],
                ['icon' => '☁️', 'name' => 'Cloud'],
                ['icon' => '🔒', 'name' => 'Security'],
            ];
            @endphp

            @foreach($techs as $index => $tech)
                <div class="scroll-reveal delay-{{ $index + 1 }} flex flex-col items-center justify-center p-6 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 hover:scale-110 transition-all duration-300">
                    <div class="text-4xl mb-3">{{ $tech['icon'] }}</div>
                    <p class="text-gray-300 font-semibold">{{ $tech['name'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
