<x-layout>
    <style>
        @keyframes glow {
            0%, 100% { text-shadow: 0 0 20px rgba(99, 102, 241, 0.5), 0 0 40px rgba(99, 102, 241, 0.3); }
            50% { text-shadow: 0 0 30px rgba(99, 102, 241, 0.8), 0 0 60px rgba(99, 102, 241, 0.5); }
        }
        
        .animate-glow {
            animation: glow 3s ease-in-out infinite;
        }
        
        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }
        
        .cta-btn {
            @apply px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-2xl;
        }
        
        .cta-btn.primary {
            @apply border-2 border-indigo-500 text-white hover:bg-indigo-600/20;
        }
        
        .cta-btn.secondary {
            @apply shadow-xl hover:shadow-indigo-500/50;
        }
        
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        /* Scroll reveal animations */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        
        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Staggered animation delays */
        .delay-1 { transition-delay: 0.1s; }
        .delay-2 { transition-delay: 0.2s; }
        .delay-3 { transition-delay: 0.3s; }
        .delay-4 { transition-delay: 0.4s; }
        .delay-5 { transition-delay: 0.5s; }
        .delay-6 { transition-delay: 0.6s; }
    </style>

    <div class="relative bg-gradient-to-br from-slate-900 via-indigo-950 to-slate-900 text-white">
        
        <!-- Hero Section - Original (UNCHANGED) -->
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

        <!-- Stats Section -->
        <section class="relative py-20 px-4 sm:px-6 lg:px-8 overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="scroll-reveal delay-1 text-center p-6 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-500/50 transition-all duration-300 hover:scale-105">
                        <div class="text-5xl font-black bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">500+</div>
                        <p class="mt-2 text-gray-400 font-medium">Projects Delivered</p>
                    </div>
                    <div class="scroll-reveal delay-2 text-center p-6 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-500/50 transition-all duration-300 hover:scale-105">
                        <div class="text-5xl font-black bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">200+</div>
                        <p class="mt-2 text-gray-400 font-medium">Happy Clients</p>
                    </div>
                    <div class="scroll-reveal delay-3 text-center p-6 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-500/50 transition-all duration-300 hover:scale-105">
                        <div class="text-5xl font-black bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">50+</div>
                        <p class="mt-2 text-gray-400 font-medium">AI Agents Deployed</p>
                    </div>
                    <div class="scroll-reveal delay-4 text-center p-6 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-500/50 transition-all duration-300 hover:scale-105">
                        <div class="text-5xl font-black bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">24/7</div>
                        <p class="mt-2 text-gray-400 font-medium">Support Available</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Services Section -->
        <section class="relative py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16 scroll-reveal">
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 bg-clip-text text-transparent mb-6">
                        Our Core Services
                    </h2>
                    <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                        Comprehensive solutions for your business transformation
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <!-- Service Card 1: AI Agents -->
                    <div class="scroll-reveal delay-1 group relative bg-gradient-to-br from-indigo-900/40 to-purple-900/40 backdrop-blur-sm border border-indigo-500/30 rounded-3xl p-8 hover:scale-105 hover:border-indigo-400/60 transition-all duration-500 hover:shadow-2xl hover:shadow-indigo-500/20">
                        <div class="absolute top-4 right-4 w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center text-3xl floating">
                            🤖
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4 mt-4">AI Agents & Automation</h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                            Intelligent automation solutions that work 24/7 to streamline your business operations and boost productivity.
                        </p>
                        <ul class="space-y-2 mb-6 text-gray-300">
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> Email Management</li>
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> Calendar Scheduling</li>
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> Task Automation</li>
                        </ul>
                        <a href="{{route('ai-agents')}}" class="inline-flex items-center text-indigo-400 hover:text-indigo-300 font-semibold group-hover:gap-3 transition-all duration-300">
                            Learn More <span class="ml-2">→</span>
                        </a>
                    </div>

                    <!-- Service Card 2: IT Development -->
                    <div class="scroll-reveal delay-2 group relative bg-gradient-to-br from-indigo-900/40 to-purple-900/40 backdrop-blur-sm border border-indigo-500/30 rounded-3xl p-8 hover:scale-105 hover:border-indigo-400/60 transition-all duration-500 hover:shadow-2xl hover:shadow-indigo-500/20">
                        <div class="absolute top-4 right-4 w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center text-3xl floating" style="animation-delay: 0.5s;">
                            💻
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4 mt-4">IT Development</h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                            Custom software solutions built with cutting-edge technologies to meet your unique business needs.
                        </p>
                        <ul class="space-y-2 mb-6 text-gray-300">
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> Web Applications</li>
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> Mobile Apps</li>
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> Cloud Solutions</li>
                        </ul>
                        <a href="/services" class="inline-flex items-center text-indigo-400 hover:text-indigo-300 font-semibold group-hover:gap-3 transition-all duration-300">
                            Learn More <span class="ml-2">→</span>
                        </a>
                    </div>

                    <!-- Service Card 3: Business Consulting -->
                    <div class="scroll-reveal delay-3 group relative bg-gradient-to-br from-indigo-900/40 to-purple-900/40 backdrop-blur-sm border border-indigo-500/30 rounded-3xl p-8 hover:scale-105 hover:border-indigo-400/60 transition-all duration-500 hover:shadow-2xl hover:shadow-indigo-500/20">
                        <div class="absolute top-4 right-4 w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center text-3xl floating" style="animation-delay: 1s;">
                            📊
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4 mt-4">Business Consulting</h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                            Strategic guidance to transform your business and achieve sustainable growth in the digital age.
                        </p>
                        <ul class="space-y-2 mb-6 text-gray-300">
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> Digital Strategy</li>
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> Process Optimization</li>
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> Change Management</li>
                        </ul>
                        <a href="/services" class="inline-flex items-center text-indigo-400 hover:text-indigo-300 font-semibold group-hover:gap-3 transition-all duration-300">
                            Learn More <span class="ml-2">→</span>
                        </a>
                    </div>

                    <!-- Service Card 4: Education & Training -->
                    <div class="scroll-reveal delay-4 group relative bg-gradient-to-br from-indigo-900/40 to-purple-900/40 backdrop-blur-sm border border-indigo-500/30 rounded-3xl p-8 hover:scale-105 hover:border-indigo-400/60 transition-all duration-500 hover:shadow-2xl hover:shadow-indigo-500/20">
                        <div class="absolute top-4 right-4 w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center text-3xl floating" style="animation-delay: 1.5s;">
                            🎓
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4 mt-4">Education & Training</h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                            Comprehensive learning programs and LMS solutions to empower your team with future-ready skills.
                        </p>
                        <ul class="space-y-2 mb-6 text-gray-300">
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> Corporate Training</li>
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> Bootcamps</li>
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> LMS Platforms</li>
                        </ul>
                        <a href="/services" class="inline-flex items-center text-indigo-400 hover:text-indigo-300 font-semibold group-hover:gap-3 transition-all duration-300">
                            Learn More <span class="ml-2">→</span>
                        </a>
                    </div>

                    <!-- Service Card 5: Event Management -->
                    <div class="scroll-reveal delay-5 group relative bg-gradient-to-br from-indigo-900/40 to-purple-900/40 backdrop-blur-sm border border-indigo-500/30 rounded-3xl p-8 hover:scale-105 hover:border-indigo-400/60 transition-all duration-500 hover:shadow-2xl hover:shadow-indigo-500/20">
                        <div class="absolute top-4 right-4 w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center text-3xl floating" style="animation-delay: 2s;">
                            🎪
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4 mt-4">Event Management</h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                            End-to-end event solutions from planning to execution, creating memorable experiences for your audience.
                        </p>
                        <ul class="space-y-2 mb-6 text-gray-300">
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> Hybrid Events</li>
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> Ticketing Systems</li>
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> Virtual Platforms</li>
                        </ul>
                        <a href="/services" class="inline-flex items-center text-indigo-400 hover:text-indigo-300 font-semibold group-hover:gap-3 transition-all duration-300">
                            Learn More <span class="ml-2">→</span>
                        </a>
                    </div>

                    <!-- Service Card 6: Smart Real Estate -->
                    <div class="scroll-reveal delay-6 group relative bg-gradient-to-br from-indigo-900/40 to-purple-900/40 backdrop-blur-sm border border-indigo-500/30 rounded-3xl p-8 hover:scale-105 hover:border-indigo-400/60 transition-all duration-500 hover:shadow-2xl hover:shadow-indigo-500/20">
                        <div class="absolute top-4 right-4 w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center text-3xl floating" style="animation-delay: 2.5s;">
                            🏢
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4 mt-4">Smart Real Estate</h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                            Innovative technology solutions for modern real estate management and sustainable property development.
                        </p>
                        <ul class="space-y-2 mb-6 text-gray-300">
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> Property Management</li>
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> IoT Integration</li>
                            <li class="flex items-center"><span class="mr-2 text-indigo-400">✓</span> Sustainability</li>
                        </ul>
                        <a href="/services" class="inline-flex items-center text-indigo-400 hover:text-indigo-300 font-semibold group-hover:gap-3 transition-all duration-300">
                            Learn More <span class="ml-2">→</span>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="relative py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-transparent via-indigo-950/30 to-transparent">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16 scroll-reveal">
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent mb-6">
                        Why Choose HOPn?
                    </h2>
                    <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                        Innovation-driven solutions backed by expertise and dedication
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    <div class="scroll-reveal delay-1 flex gap-6 p-8 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 transition-all duration-300">
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center text-3xl">
                            ⚡
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-3">Fast Delivery</h3>
                            <p class="text-gray-400 leading-relaxed">
                                Agile methodologies ensure rapid deployment without compromising quality or security standards.
                            </p>
                        </div>
                    </div>

                    <div class="scroll-reveal delay-2 flex gap-6 p-8 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 transition-all duration-300">
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center text-3xl">
                            🎯
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-3">Tailored Solutions</h3>
                            <p class="text-gray-400 leading-relaxed">
                                Custom-built solutions designed specifically for your business needs and industry requirements.
                            </p>
                        </div>
                    </div>

                    <div class="scroll-reveal delay-3 flex gap-6 p-8 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 transition-all duration-300">
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center text-3xl">
                            🛡️
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-3">Enterprise Security</h3>
                            <p class="text-gray-400 leading-relaxed">
                                Bank-level security protocols and GDPR compliance to protect your valuable business data.
                            </p>
                        </div>
                    </div>

                    <div class="scroll-reveal delay-4 flex gap-6 p-8 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 transition-all duration-300">
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center text-3xl">
                            🤝
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-3">24/7 Support</h3>
                            <p class="text-gray-400 leading-relaxed">
                                Dedicated support team available round the clock to ensure your operations run smoothly.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Featured Projects Preview -->
        <section class="relative py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16 scroll-reveal">
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 bg-clip-text text-transparent mb-6">
                        Featured Projects
                    </h2>
                    <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                        Innovation in action - see what we've built for our clients
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <div class="scroll-reveal delay-1 group relative overflow-hidden rounded-3xl bg-gradient-to-br from-indigo-900/60 to-purple-900/60 backdrop-blur-sm border border-indigo-500/30 hover:border-indigo-400/60 transition-all duration-500 hover:scale-105">
                        <div class="p-8">
                            <div class="text-5xl mb-4">🧾</div>
                            <h3 class="text-2xl font-bold text-white mb-3">Invoice AI</h3>
                            <p class="text-gray-400 mb-4">
                                Intelligent invoice processing with AI-powered data extraction and automated workflows.
                            </p>
                            <a href="/projects" class="inline-flex items-center text-indigo-400 hover:text-indigo-300 font-semibold">
                                View Project <span class="ml-2">→</span>
                            </a>
                        </div>
                    </div>

                    <div class="scroll-reveal delay-2 group relative overflow-hidden rounded-3xl bg-gradient-to-br from-indigo-900/60 to-purple-900/60 backdrop-blur-sm border border-indigo-500/30 hover:border-indigo-400/60 transition-all duration-500 hover:scale-105">
                        <div class="p-8">
                            <div class="text-5xl mb-4">🎫</div>
                            <h3 class="text-2xl font-bold text-white mb-3">Ticketology</h3>
                            <p class="text-gray-400 mb-4">
                                Next-generation ticketing platform for events with seamless booking and management.
                            </p>
                            <a href="/projects" class="inline-flex items-center text-indigo-400 hover:text-indigo-300 font-semibold">
                                View Project <span class="ml-2">→</span>
                            </a>
                        </div>
                    </div>

                    <div class="scroll-reveal delay-3 group relative overflow-hidden rounded-3xl bg-gradient-to-br from-indigo-900/60 to-purple-900/60 backdrop-blur-sm border border-indigo-500/30 hover:border-indigo-400/60 transition-all duration-500 hover:scale-105">
                        <div class="p-8">
                            <div class="text-5xl mb-4">🎓</div>
                            <h3 class="text-2xl font-bold text-white mb-3">EduBridge</h3>
                            <p class="text-gray-400 mb-4">
                                Comprehensive LMS platform connecting educators and learners worldwide.
                            </p>
                            <a href="/projects" class="inline-flex items-center text-indigo-400 hover:text-indigo-300 font-semibold">
                                View Project <span class="ml-2">→</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="relative py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-transparent via-indigo-950/20 to-transparent">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16 scroll-reveal">
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent mb-6">
                        What Our Clients Say
                    </h2>
                    <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                        Trusted by businesses across industries
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <div class="scroll-reveal delay-1 p-8 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 transition-all duration-300 hover:scale-105">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                ⭐⭐⭐⭐⭐
                            </div>
                        </div>
                        <p class="text-gray-300 mb-6 leading-relaxed italic">
                            "HOPn transformed our business operations with their AI automation. We've seen a 60% increase in efficiency and our team can now focus on strategic work."
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                                MK
                            </div>
                            <div>
                                <p class="text-white font-semibold">Michael Klein</p>
                                <p class="text-gray-400 text-sm">CEO, TechVenture GmbH</p>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-reveal delay-2 p-8 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 transition-all duration-300 hover:scale-105">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                ⭐⭐⭐⭐⭐
                            </div>
                        </div>
                        <p class="text-gray-300 mb-6 leading-relaxed italic">
                            "The LMS platform they built for us is exceptional. Our training programs reach thousands of employees seamlessly. Outstanding work!"
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                                SM
                            </div>
                            <div>
                                <p class="text-white font-semibold">Sarah Mueller</p>
                                <p class="text-gray-400 text-sm">HR Director, Global Innovations</p>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-reveal delay-3 p-8 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 transition-all duration-300 hover:scale-105">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                ⭐⭐⭐⭐⭐
                            </div>
                        </div>
                        <p class="text-gray-300 mb-6 leading-relaxed italic">
                            "Professional, innovative, and reliable. HOPn delivered our event management platform ahead of schedule. Highly recommended!"
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                                DW
                            </div>
                            <div>
                                <p class="text-white font-semibold">David Wagner</p>
                                <p class="text-gray-400 text-sm">Founder, EventPro Solutions</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Technology Stack Section -->
        <section class="relative py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16 scroll-reveal">
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 bg-clip-text text-transparent mb-6">
                        Powered by Modern Technology
                    </h2>
                    <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                        We leverage cutting-edge tools and frameworks to deliver excellence
                    </p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                    
                    <div class="scroll-reveal delay-1 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 hover:scale-110 transition-all duration-300">
                        <div class="text-4xl mb-3">⚛️</div>
                        <p class="text-gray-300 font-semibold">React</p>
                    </div>

                    <div class="scroll-reveal delay-2 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 hover:scale-110 transition-all duration-300">
                        <div class="text-4xl mb-3">🔺</div>
                        <p class="text-gray-300 font-semibold">Laravel</p>
                    </div>

                    <div class="scroll-reveal delay-3 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 hover:scale-110 transition-all duration-300">
                        <div class="text-4xl mb-3">🐍</div>
                        <p class="text-gray-300 font-semibold">Python</p>
                    </div>

                    <div class="scroll-reveal delay-4 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 hover:scale-110 transition-all duration-300">
                        <div class="text-4xl mb-3">🤖</div>
                        <p class="text-gray-300 font-semibold">AI/ML</p>
                    </div>

                    <div class="scroll-reveal delay-5 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 hover:scale-110 transition-all duration-300">
                        <div class="text-4xl mb-3">☁️</div>
                        <p class="text-gray-300 font-semibold">Cloud</p>
                    </div>

                    <div class="scroll-reveal delay-6 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 hover:scale-110 transition-all duration-300">
                        <div class="text-4xl mb-3">🔒</div>
                        <p class="text-gray-300 font-semibold">Security</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="relative py-20 px-4 sm:px-6 lg:px-8 mb-20">
            <div class="max-w-5xl mx-auto">
                <div class="scroll-reveal relative overflow-hidden rounded-3xl bg-gradient-to-br from-indigo-600/40 via-purple-600/40 to-pink-600/40 backdrop-blur-lg border border-indigo-400/50 p-12 md:p-16 text-center">
                    <div class="absolute inset-0 bg-gradient-to-r from-indigo-500/10 to-purple-500/10"></div>
                    <div class="relative z-10">
                        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                            Ready to Transform Your Business?
                        </h2>
                        <p class="text-xl text-gray-200 mb-10 max-w-3xl mx-auto">
                            Let's discuss how our innovative solutions can help you achieve your goals and stay ahead of the competition.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                            <a href="/request-demo" class="cta-btn secondary text-white bg-gradient-to-br from-white/20 to-white/10 border-2 border-white hover:bg-white/30">
                                Schedule a Demo
                            </a>
                            <a href="/contact" class="cta-btn primary border-2 border-white text-white hover:bg-white/10">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- Scroll Reveal JavaScript (Pure JS - No dependencies needed!) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Intersection Observer for scroll animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                        observer.unobserve(entry.target); // Only animate once
                    }
                });
            }, observerOptions);

            // Observe all elements with scroll-reveal class
            const scrollElements = document.querySelectorAll('.scroll-reveal');
            scrollElements.forEach(el => observer.observe(el));

            // Create floating particles in background
            const container = document.querySelector('.relative.bg-gradient-to-br');
            if (container) {
                for (let i = 0; i < 30; i++) {
                    const particle = document.createElement('div');
                    particle.className = 'fixed w-1 h-1 bg-indigo-400/20 rounded-full pointer-events-none';
                    particle.style.left = Math.random() * 100 + '%';
                    particle.style.top = '100vh';
                    particle.style.zIndex = '0';
                    
                    const duration = 15 + Math.random() * 15;
                    const delay = Math.random() * 10;
                    
                    particle.animate([
                        { 
                            transform: 'translateY(0) translateX(0) rotate(0deg)', 
                            opacity: 0 
                        },
                        { 
                            transform: `translateY(-100vh) translateX(${Math.random() * 200 - 100}px) rotate(360deg)`, 
                            opacity: 1,
                            offset: 0.1
                        },
                        { 
                            transform: `translateY(-200vh) translateX(${Math.random() * 200 - 100}px) rotate(720deg)`, 
                            opacity: 0 
                        }
                    ], {
                        duration: duration * 1000,
                        delay: delay * 1000,
                        iterations: Infinity,
                        easing: 'linear'
                    });
                    
                    container.appendChild(particle);
                }
            }
        });
    </script>
</x-layout>