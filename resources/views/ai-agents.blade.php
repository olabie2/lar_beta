<x-layout>
<style>
/* Only essential custom styles that Tailwind can't handle */
.text-gradient {
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.particle {
    position: absolute;
    width: 4px;
    height: 4px;
    /* Changed from indigo to a purple that matches the new theme */
    background: rgba(168, 85, 247, 0.6); /* purple-500 with 60% opacity */
    border-radius: 50%;
    animation: float 20s infinite linear;
}

@keyframes float {
    0% { transform: translateY(100vh) translateX(0px); opacity: 0; }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% { transform: translateY(-100vh) translateX(100px); opacity: 0; }
}

.shimmer-effect::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
    transition: left 0.5s ease;
}

.shimmer-effect:hover::before {
    left: 100%;
}
</style>

{{-- Changed background to solid dark gray --}}
<div class="min-h-screen bg-gray-900 text-gray-200">
    {{-- Particle Background --}}
    <div x-data="particleSystem" class="fixed inset-0 pointer-events-none z-0"></div>

    {{-- Main Content --}}
    <div class="relative z-10">
        {{-- Header --}}
        <header class="py-8 text-center">
            <div class="max-w-7xl mx-auto px-4">
                {{-- Updated logo text gradient --}}
                <h1 class="text-4xl font-black py-5 text-primary-indigo ">
                    {{ __('ai-agents.logo') }}
                </h1>
            </div>
        </header>

        {{-- Hero Section --}}
        <section class="text-center py-16 px-4">
            <div class="max-w-4xl mx-auto">
                {{-- Updated hero title gradient --}}
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black mb-6 bg-gradient-to-b from-white to-gray-300 text-gradient animate-fade-in">
                    {{ __('ai-agents.hero_title') }}
                </h1>
                {{-- Matched paragraph text color --}}
                <p class="text-xl text-gray-400 max-w-2xl mx-auto leading-relaxed opacity-0 animate-fade-in-delay">
                    {{ __('ai-agents.hero_subtitle') }}
                </p>
            </div>
        </section>

        {{-- Purpose Section --}}
        <section class="py-16 px-4 mb-16">
            <div class="max-w-6xl mx-auto">
                {{-- Updated card style to be solid, matching the reference --}}
                <div class="bg-gray-800 border border-gray-700 rounded-3xl p-8 md:p-16 shadow-2xl text-primary-indigo ">
                    {{-- Updated text gradient --}}
                    <h2 class="text-4xl md:text-5xl font-black text-center mb-12 bg-gradient-to-r ">
                        {{ __('ai-agents.purpose_title') }}
                    </h2>
                    <div class="text-lg text-gray-300 max-w-4xl mx-auto text-center space-y-6 leading-relaxed">
                        <p>{{ __('ai-agents.purpose_content_1') }}</p>
                        <p>{{ __('ai-agents.purpose_content_2') }}</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Use Cases Section --}}
        <section class="py-16 px-4 mb-16">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-black text-center mb-16 text-white">
                    {{ __('ai-agents.use_cases_title') }}
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    {{-- Updated card styles for all three use cases --}}
                    <div x-data="cardAnimation" class="shimmer-effect relative overflow-hidden bg-gray-800 border border-gray-700 rounded-2xl p-8 opacity-0 translate-y-8 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-purple-500/20 hover:scale-105">
                        <div class="text-5xl mb-4">📧</div>
                        <h3 class="text-2xl font-bold mb-4 text-white">{{ __('ai-agents.use_case_1_title') }}</h3>
                        <p class="text-gray-400 leading-relaxed">{{ __('ai-agents.use_case_1_content') }}</p>
                    </div>

                    <div x-data="cardAnimation" class="shimmer-effect relative overflow-hidden bg-gray-800 border border-gray-700 rounded-2xl p-8 opacity-0 translate-y-8 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-purple-500/20 hover:scale-105">
                        <div class="text-5xl mb-4">📅</div>
                        <h3 class="text-2xl font-bold mb-4 text-white">{{ __('ai-agents.use_case_2_title') }}</h3>
                        <p class="text-gray-400 leading-relaxed">{{ __('ai-agents.use_case_2_content') }}</p>
                    </div>

                    <div x-data="cardAnimation" class="shimmer-effect relative overflow-hidden bg-gray-800 border border-gray-700 rounded-2xl p-8 opacity-0 translate-y-8 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-purple-500/20 hover:scale-105">
                        <div class="text-5xl mb-4">⚡</div>
                        <h3 class="text-2xl font-bold mb-4 text-white">{{ __('ai-agents.use_case_3_title') }}</h3>
                        <p class="text-gray-400 leading-relaxed">{{ __('ai-agents.use_case_3_content') }}</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Pricing Section --}}
        <section class="py-16 px-4 mb-16">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-black text-center mb-16 text-white">
                    {{ __('ai-agents.pricing_title') }}
                </h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-5xl mx-auto">
                    {{-- SMB Pricing Card --}}
                    <div x-data="cardAnimation" class="relative bg-gray-800 border border-gray-700 rounded-3xl p-8 text-center opacity-0 translate-y-8 transition-all duration-700 hover:scale-105 hover:shadow-2xl hover:shadow-purple-500/20">
                        {{-- Updated top bar gradient --}}
                        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-500 to-pink-500 rounded-t-3xl"></div>
                        <h3 class="text-3xl font-black mb-2 text-white">{{ __('ai-agents.pricing_smb_title') }}</h3>
                        {{-- Updated price text gradient --}}
                        <div class="text-6xl font-black my-6 bg-gradient-to-r from-purple-400 to-pink-500 text-gradient">€19.99</div>
                        <div class="text-gray-400 mb-8 text-lg">{{ __('ai-agents.pricing_smb_period') }}</div>
                        <ul class="text-gray-300 space-y-4 text-left">
                            {{-- Changed icon color to purple --}}
                            <li class="flex items-center"><span class="mr-3 text-purple-400">✨</span>{{ __('ai-agents.pricing_smb_feature_1') }}</li>
                            <li class="flex items-center"><span class="mr-3 text-purple-400">✨</span>{{ __('ai-agents.pricing_smb_feature_2') }}</li>
                            <li class="flex items-center"><span class="mr-3 text-purple-400">✨</span>{{ __('ai-agents.pricing_smb_feature_3') }}</li>
                            <li class="flex items-center"><span class="mr-3 text-purple-400">✨</span>{{ __('ai-agents.pricing_smb_feature_4') }}</li>
                            <li class="flex items-center"><span class="mr-3 text-purple-400">✨</span>{{ __('ai-agents.pricing_smb_feature_5') }}</li>
                            <li class="flex items-center"><span class="mr-3 text-purple-400">✨</span>{{ __('ai-agents.pricing_smb_feature_6') }}</li>
                        </ul>
                    </div>

                    {{-- Enterprise Pricing Card --}}
                    <div x-data="cardAnimation" class="relative bg-gray-800/50 backdrop-blur-sm border-2 border-purple-500/50 rounded-3xl p-8 text-center opacity-0 translate-y-8 transition-all duration-700 hover:scale-105 hover:shadow-2xl hover:shadow-purple-500/40">
                        {{-- Updated top bar gradient --}}
                        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 rounded-t-3xl"></div>
                        {{-- Updated 'POPULAR' tag gradient --}}
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-purple-500 to-pink-500 text-white px-6 py-2 rounded-full text-sm font-bold">
                            POPULAR
                        </div>
                        <h3 class="text-3xl font-black mb-2 text-white mt-4">{{ __('ai-agents.pricing_enterprise_title') }}</h3>
                        {{-- Updated price text gradient --}}
                        <div class="text-5xl font-black my-6 bg-gradient-to-r from-purple-400 to-pink-500 text-gradient">€500-€1000</div>
                        <div class="text-gray-400 mb-8 text-lg">{{ __('ai-agents.pricing_enterprise_period') }}</div>
                        <ul class="text-gray-300 space-y-4 text-left">
                            <li class="flex items-center"><span class="mr-3 text-purple-400">✨</span>{{ __('ai-agents.pricing_enterprise_feature_1') }}</li>
                            <li class="flex items-center"><span class="mr-3 text-purple-400">✨</span>{{ __('ai-agents.pricing_enterprise_feature_2') }}</li>
                            <li class="flex items-center"><span class="mr-3 text-purple-400">✨</span>{{ __('ai-agents.pricing_enterprise_feature_3') }}</li>
                            <li class="flex items-center"><span class="mr-3 text-purple-400">✨</span>{{ __('ai-agents.pricing_enterprise_feature_4') }}</li>
                            <li class="flex items-center"><span class="mr-3 text-purple-400">✨</span>{{ __('ai-agents.pricing_enterprise_feature_5') }}</li>
                            <li class="flex items-center"><span class="mr-3 text-purple-400">✨</span>{{ __('ai-agents.pricing_enterprise_feature_6') }}</li>
                            <li class="flex items-center"><span class="mr-3 text-purple-400">✨</span>{{ __('ai-agents.pricing_enterprise_feature_7') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- Contact Form Section --}}
        <section class="py-16 px-4">
            <div class="max-w-4xl mx-auto" x-data="contactForm()">
                {{-- Updated container style to solid dark theme --}}
                <div class="bg-gray-800 border border-gray-700 rounded-3xl p-8 md:p-12 shadow-2xl">
                    {{-- Updated text gradient --}}
                    <h2 class="text-4xl md:text-5xl font-black text-center mb-12 text-gray-400">
                        {{ __('ai-agents.form_title') }}
                    </h2>
                    <form @submit.prevent="submitForm" x-ref="contactForm">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            {{-- Updated input field styles --}}
                            <input type="text" name="firstName" placeholder="{{ __('ai-agents.form_placeholder_firstname') }}" required class="w-full p-4 bg-gray-700/50 border border-gray-600 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 hover:bg-gray-700">
                            <input type="text" name="lastName" placeholder="{{ __('ai-agents.form_placeholder_lastname') }}" required class="w-full p-4 bg-gray-700/50 border border-gray-600 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 hover:bg-gray-700">
                            <input type="email" name="email" placeholder="{{ __('ai-agents.form_placeholder_email') }}" required class="w-full p-4 bg-gray-700/50 border border-gray-600 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 hover:bg-gray-700">
                            <input type="text" name="company" placeholder="{{ __('ai-agents.form_placeholder_company') }}" required class="w-full p-4 bg-gray-700/50 border border-gray-600 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 hover:bg-gray-700">
                            <select name="companySize" required class="w-full p-4 bg-gray-700/50 border border-gray-600 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 hover:bg-gray-700">
                                <option value="" class="bg-gray-900">{{ __('ai-agents.form_select_company_size') }}</option>
                                <option value="1-10" class="bg-gray-900">{{ __('ai-agents.form_option_size_1') }}</option>
                                <option value="11-50" class="bg-gray-900">{{ __('ai-agents.form_option_size_2') }}</option>
                                <option value="51-200" class="bg-gray-900">{{ __('ai-agents.form_option_size_3') }}</option>
                                <option value="201-1000" class="bg-gray-900">{{ __('ai-agents.form_option_size_4') }}</option>
                                <option value="1000+" class="bg-gray-900">{{ __('ai-agents.form_option_size_5') }}</option>
                            </select>
                            <select name="budget" required class="w-full p-4 bg-gray-700/50 border border-gray-600 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 hover:bg-gray-700">
                                <option value="" class="bg-gray-900">{{ __('ai-agents.form_select_budget') }}</option>
                                <option value="under-100" class="bg-gray-900">{{ __('ai-agents.form_option_budget_1') }}</option>
                                <option value="100-500" class="bg-gray-900">{{ __('ai-agents.form_option_budget_2') }}</option>
                                <option value="500-2000" class="bg-gray-900">{{ __('ai-agents.form_option_budget_3') }}</option>
                                <option value="2000-5000" class="bg-gray-900">{{ __('ai-agents.form_option_budget_4') }}</option>
                                <option value="5000+" class="bg-gray-900">{{ __('ai-agents.form_option_budget_5') }}</option>
                            </select>
                        </div>
                        <textarea name="requirements" rows="5" placeholder="{{ __('ai-agents.form_placeholder_requirements') }}" required class="w-full p-4 bg-gray-700/50 border border-gray-600 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 hover:bg-gray-700 mb-8"></textarea>
                        
                        {{-- Updated submit button gradient and shadow --}}
                        <button type="submit" :disabled="isSubmitting" class="cta-btn secondary text-white bg-gradient-to-br  from-indigo-600 to-purple-600">
                            <span x-show="!isSubmitting">{{ __('ai-agents.form_submit_button') }}</span>
                            <span x-show="isSubmitting" class="flex items-center justify-center">
                                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                {{ __('ai-agents.js_sending') }}
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
document.addEventListener('alpine:init', () => {
    // Particle System
    Alpine.data('particleSystem', () => ({
        init() {
            this.createParticles();
        },
        createParticles() {
            const particleCount = 50;
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 20 + 's';
                particle.style.animationDuration = (Math.random() * 10 + 15) + 's';
                this.$el.appendChild(particle);
            }
        }
    }));

    // Card Animation Observer
    Alpine.data('cardAnimation', () => ({
        init() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.$el.classList.remove('opacity-0', 'translate-y-8');
                        observer.unobserve(this.$el);
                    }
                });
            }, { threshold: 0.1 });
            observer.observe(this.$el);
        }
    }));
});

// Contact Form Function
function contactForm() {
    return {
        isSubmitting: false,
        submitForm() {
            this.isSubmitting = true;
            
            // Simulate form submission
            setTimeout(() => {
                alert("{{ __('ai-agents.js_alert_success') }}");
                this.$refs.contactForm.reset();
                this.isSubmitting = false;
            }, 2000);
        }
    }
}
</script>
</x-layout>