<x-layout>
    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-blue-900 text-white overflow-hidden">
        <!-- Floating Elements Background -->
        <div class="fixed inset-0 pointer-events-none z-0" x-data="{ particles: [] }" x-init="
            for(let i = 0; i < 20; i++) {
                particles.push({
                    id: i,
                    x: Math.random() * 100,
                    delay: Math.random() * 20,
                    duration: 18 + Math.random() * 12
                });
            }
        ">
            <template x-for="particle in particles" :key="particle.id">
                <div class="absolute w-1 h-1 bg-blue-400/30 rounded-full animate-pulse"
                     :style="`left: ${particle.x}%; animation-delay: ${particle.delay}s; animation-duration: ${particle.duration}s;`"
                     x-init="
                        $el.animate([
                            { transform: 'translateY(100vh) rotate(0deg)', opacity: 0 },
                            { transform: 'translateY(10vh) rotate(0deg)', opacity: 1, offset: 0.1 },
                            { transform: 'translateY(-10vh) rotate(360deg)', opacity: 1, offset: 0.9 },
                            { transform: 'translateY(-100px) rotate(360deg)', opacity: 0 }
                        ], {
                            duration: particle.duration * 1000,
                            iterations: Infinity,
                            easing: 'linear'
                        });
                     "></div>
            </template>
        </div>

        <!-- Hero Section -->
        <section class="relative text-center py-20 px-5" x-data x-init="
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                $el.style.transform = `translateY(${scrolled * 0.3}px)`;
            });
        ">
            <div class="absolute inset-0 bg-gradient-radial from-blue-500/10 via-transparent to-transparent"></div>
            <div class="relative z-10">
                <h1 class="text-4xl md:text-6xl font-bold bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 bg-clip-text text-transparent mb-5">
                    {{ __('services.hero_title') }}
                </h1>
                <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed">
                    {{ __('services.hero_subtitle') }}
                </p>
            </div>
        </section>

        <!-- Services Section -->
        <div class="max-w-7xl mx-auto px-5 py-20">
            <div class="space-y-32">
                
                <!-- Service 1: IT Services -->
                <div class="flex flex-col lg:flex-row items-center gap-16">
                    <div class="flex-1 max-w-2xl">
                        <h2 class="text-4xl font-bold text-white mb-6 bg-gradient-to-r from-white to-slate-300 bg-clip-text text-transparent">
                            {{ __('services.it_services_title') }}
                        </h2>
                        <p class="text-lg text-slate-300 leading-relaxed mb-8">
                            {{ __('services.it_services_desc') }}
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.it_services_item1') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.it_services_item2') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.it_services_item3') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.it_services_item4') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.it_services_item5') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.it_services_item6') }}</li>
                        </ul>
                        <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-full font-semibold group">
                            <span class="relative z-10">{{ __('services.it_services_cta') }}</span>
                        </a>
                    </div>
                    <div class="flex-1 flex justify-center">
                        <div class="relative bg-white/5 backdrop-blur-lg border border-white/10 rounded-3xl p-12 max-w-md w-full group">
                            <div class="absolute -top-5 -right-5 w-15 h-15 bg-gradient-to-br from-orange-400 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">01</div>
                            <div class="w-24 h-24 bg-gradient-to-br from-blue-400 to-purple-500 rounded-2xl flex items-center justify-center text-5xl mb-8">💻</div>
                        </div>
                    </div>
                </div>

                <!-- Service 2: AI Automation -->
                <div class="flex flex-col lg:flex-row-reverse items-center gap-16">
                    <div class="flex-1 max-w-2xl">
                        <h2 class="text-4xl font-bold text-white mb-6 bg-gradient-to-r from-white to-slate-300 bg-clip-text text-transparent">
                            {{ __('services.ai_automation_title') }}
                        </h2>
                        <p class="text-lg text-slate-300 leading-relaxed mb-8">
                            {{ __('services.ai_automation_desc') }}
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.ai_automation_item1') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.ai_automation_item2') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.ai_automation_item3') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.ai_automation_item4') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.ai_automation_item5') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.ai_automation_item6') }}</li>
                        </ul>
                        <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-full font-semibold group">
                            <span class="relative z-10">{{ __('services.ai_automation_cta') }}</span>
                        </a>
                    </div>
                    <div class="flex-1 flex justify-center">
                        <div class="relative bg-white/5 backdrop-blur-lg border border-white/10 rounded-3xl p-12 max-w-md w-full group">
                            <div class="absolute -top-5 -right-5 w-15 h-15 bg-gradient-to-br from-orange-400 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">02</div>
                            <div class="w-24 h-24 bg-gradient-to-br from-blue-400 to-purple-500 rounded-2xl flex items-center justify-center text-5xl mb-8">🤖</div>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Business Consulting -->
                <div class="flex flex-col lg:flex-row items-center gap-16">
                    <div class="flex-1 max-w-2xl">
                        <h2 class="text-4xl font-bold text-white mb-6 bg-gradient-to-r from-white to-slate-300 bg-clip-text text-transparent">
                            {{ __('services.consulting_title') }}
                        </h2>
                        <p class="text-lg text-slate-300 leading-relaxed mb-8">
                           {{ __('services.consulting_desc') }}
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.consulting_item1') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.consulting_item2') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.consulting_item3') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.consulting_item4') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.consulting_item5') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.consulting_item6') }}</li>
                        </ul>
                        <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-full font-semibold group">
                            <span class="relative z-10">{{ __('services.consulting_cta') }}</span>
                        </a>
                    </div>
                     <div class="flex-1 flex justify-center">
                        <div class="relative bg-white/5 backdrop-blur-lg border border-white/10 rounded-3xl p-12 max-w-md w-full group">
                            <div class="absolute -top-5 -right-5 w-15 h-15 bg-gradient-to-br from-orange-400 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">03</div>
                            <div class="w-24 h-24 bg-gradient-to-br from-blue-400 to-purple-500 rounded-2xl flex items-center justify-center text-5xl mb-8">📊</div>
                        </div>
                    </div>
                </div>

                <!-- Service 4: LMS & E-Learning -->
                <div class="flex flex-col lg:flex-row-reverse items-center gap-16">
                    <div class="flex-1 max-w-2xl">
                        <h2 class="text-4xl font-bold text-white mb-6 bg-gradient-to-r from-white to-slate-300 bg-clip-text text-transparent">
                           {{ __('services.lms_title') }}
                        </h2>
                        <p class="text-lg text-slate-300 leading-relaxed mb-8">
                            {{ __('services.lms_desc') }}
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.lms_item1') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.lms_item2') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.lms_item3') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.lms_item4') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.lms_item5') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.lms_item6') }}</li>
                        </ul>
                        <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-full font-semibold group">
                            <span class="relative z-10">{{ __('services.lms_cta') }}</span>
                        </a>
                    </div>
                     <div class="flex-1 flex justify-center">
                        <div class="relative bg-white/5 backdrop-blur-lg border border-white/10 rounded-3xl p-12 max-w-md w-full group">
                            <div class="absolute -top-5 -right-5 w-15 h-15 bg-gradient-to-br from-orange-400 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">04</div>
                            <div class="w-24 h-24 bg-gradient-to-br from-blue-400 to-purple-500 rounded-2xl flex items-center justify-center text-5xl mb-8">🎓</div>
                        </div>
                    </div>
                </div>

                <!-- Service 5: Event Management -->
                <div class="flex flex-col lg:flex-row items-center gap-16">
                    <div class="flex-1 max-w-2xl">
                        <h2 class="text-4xl font-bold text-white mb-6 bg-gradient-to-r from-white to-slate-300 bg-clip-text text-transparent">
                            {{ __('services.event_management_title') }}
                        </h2>
                        <p class="text-lg text-slate-300 leading-relaxed mb-8">
                            {{ __('services.event_management_desc') }}
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.event_management_item1') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.event_management_item2') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.event_management_item3') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.event_management_item4') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.event_management_item5') }}</li>
                            <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.event_management_item6') }}</li>
                        </ul>
                        <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-full font-semibold group">
                            <span class="relative z-10">{{ __('services.event_management_cta') }}</span>
                        </a>
                    </div>
                     <div class="flex-1 flex justify-center">
                        <div class="relative bg-white/5 backdrop-blur-lg border border-white/10 rounded-3xl p-12 max-w-md w-full group">
                            <div class="absolute -top-5 -right-5 w-15 h-15 bg-gradient-to-br from-orange-400 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">05</div>
                            <div class="w-24 h-24 bg-gradient-to-br from-blue-400 to-purple-500 rounded-2xl flex items-center justify-center text-5xl mb-8">🎪</div>
                        </div>
                    </div>
                </div>

                <!-- Service 6: Smart Real Estate -->
                <div class="flex flex-col lg:flex-row-reverse items-center gap-16">
                    <div class="flex-1 max-w-2xl">
                        <h2 class="text-4xl font-bold text-white mb-6 bg-gradient-to-r from-white to-slate-300 bg-clip-text text-transparent">
                            {{ __('services.real_estate_title') }}
                        </h2>
                        <p class="text-lg text-slate-300 leading-relaxed mb-8">
                            {{ __('services.real_estate_desc') }}
                        </p>
                        <ul class="space-y-3 mb-8">
                           <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.real_estate_item1') }}</li>
                           <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.real_estate_item2') }}</li>
                           <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.real_estate_item3') }}</li>
                           <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.real_estate_item4') }}</li>
                           <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.real_estate_item5') }}</li>
                           <li class="text-slate-400 pl-6 relative"><span class="absolute left-0 text-blue-400 font-bold">✦</span>{{ __('services.real_estate_item6') }}</li>
                        </ul>
                        <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-full font-semibold group">
                            <span class="relative z-10">{{ __('services.real_estate_cta') }}</span>
                        </a>
                    </div>
                    <div class="flex-1 flex justify-center">
                        <div class="relative bg-white/5 backdrop-blur-lg border border-white/10 rounded-3xl p-12 max-w-md w-full group">
                            <div class="absolute -top-5 -right-5 w-15 h-15 bg-gradient-to-br from-orange-400 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">06</div>
                            <div class="w-24 h-24 bg-gradient-to-br from-blue-400 to-purple-500 rounded-2xl flex items-center justify-center text-5xl mb-8">🏢</div>
                        </div>
                    </div>
                </div>

                <!-- Final CTA Section -->
                <div class="bg-gradient-to-br from-blue-500/15 via-purple-500/15 to-pink-500/15 backdrop-blur-lg border border-white/15 rounded-3xl p-20 text-center mt-32">
                    <h2 class="text-5xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent mb-6">
                        {{ __('services.final_cta_title') }}
                    </h2>
                    <p class="text-xl text-slate-300 max-w-3xl mx-auto mb-10 leading-relaxed">
                        {{ __('services.final_cta_subtitle') }}
                    </p>
                    <a href="#contact" class="inline-block px-12 py-5 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-full text-lg font-bold group">
                        <span class="relative z-10">{{ __('services.final_cta_button') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>