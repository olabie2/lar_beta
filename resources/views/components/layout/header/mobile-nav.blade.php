<template x-teleport="body">
    <div x-show="mobileMenuOpen" @keydown.window.escape="mobileMenuOpen=false" class="relative z-[99]" x-cloak>
        <!-- Overlay -->
        <div x-show="mobileMenuOpen" x-transition.opacity.duration.300ms @click="mobileMenuOpen = false" class="fixed inset-0 bg-black/50 backdrop-blur-sm"></div>
        <!-- Panel -->
        <div class="fixed inset-0 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="fixed inset-y-0 right-0 flex max-w-full pl-10">
                    <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false"
                        x-transition:enter="transform transition ease-in-out duration-300 sm:duration-500" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition ease-in-out duration-300 sm:duration-500" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                        class="w-screen w-4/5 max-w-[400px]">
                        <div class="flex h-full flex-col overflow-y-scroll bg-[#100f0fd9] border-l border-glass-border shadow-2xl">
                            <!-- Header -->
                            <div class="p-4 sm:px-6 border-b border-glass-border">
                                <div class="flex items-center justify-between">
                                    <h2 class="text-lg font-bold text-primary-light" id="slide-over-title">Menu</h2>
                                    <button @click="mobileMenuOpen=false" class="p-2 -mr-2 rounded-md text-text-secondary hover:bg-white/10 hover:text-white transition-colors">
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
                                    </button>
                                </div>
                            </div>
                            <!-- Content -->
                            <div class="relative flex-1 px-4 sm:px-6 py-6 flex flex-col gap-y-2 text-lg">
                                <a href="{{ route('ai-agents') }}" class="block px-4 py-3 rounded-md text-text-secondary hover:bg-white/10 hover:text-white transition-colors">{{ __('messages.nav.ai_agents') }}</a>
                                <!-- Services Accordion -->
                                <div>
                                    <button @click="mobileSubMenuOpen = mobileSubMenuOpen === 'services' ? null : 'services'" class="w-full flex justify-between items-center px-4 py-3 rounded-md text-text-secondary hover:bg-white/10 hover:text-white transition-colors">
                                        <span>{{ __('messages.nav.services') }}</span><svg :class="{'rotate-180': mobileSubMenuOpen === 'services'}" class="w-5 h-5 transition-transform" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" /></svg>
                                    </button>
                                    <div x-show="mobileSubMenuOpen === 'services'" x-collapse.duration.300ms class="pl-8 pt-2 flex flex-col gap-y-1 text-base border-l border-glass-border ml-6">
                                         <a href="{{route('services.index')}}" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.ai_automation') }}</a>
                                         <a href="{{route('services.index')}}" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.saas_solutions') }}</a>
                                         <a href="{{route('services.index')}}" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.it_services') }}</a>
                                         <a href="{{route('services.index')}}" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.business_consulting') }}</a>
                                         <a href="{{route('services.index')}}" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.lms_elearning') }}</a>
                                         <a href="{{route('services.index')}}" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.event_management') }}</a>
                                         <a href="{{route('services.index')}}" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.sport_tech') }}</a>
                                         <a href="{{route('services.index')}}" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.smart_solutions') }}</a>
                                         <a href="{{route('services.index')}}" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.tech_trading') }}</a>
                                    </div>
                                </div>
                                <!-- Company Accordion -->
                                <div>
                                    <button @click="mobileSubMenuOpen = mobileSubMenuOpen === 'company' ? null : 'company'" class="w-full flex justify-between items-center px-4 py-3 rounded-md text-text-secondary hover:bg-white/10 hover:text-white transition-colors">
                                        <span>{{ __('messages.nav.company') }}</span><svg :class="{'rotate-180': mobileSubMenuOpen === 'company'}" class="w-5 h-5 transition-transform" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" /></svg>
                                    </button>
                                    <div x-show="mobileSubMenuOpen === 'company'" x-collapse.duration.300ms class="pl-8 pt-2 flex flex-col gap-y-1 text-base border-l border-glass-border ml-6">
                                         {{-- <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.company_dropdown.our_story') }}</a> --}}
                                         {{-- <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.company_dropdown.our_team') }}</a> --}}
                                         {{-- <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.company_dropdown.projects') }}</a> --}}
                                          <a href="{{route('about')}}" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.company_dropdown.about') }}</a>
                                         <a href="{{route('blog.index')}}" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.company_dropdown.blog') }}</a>
                                         <a href="{{route("company-events.index")}}" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.company_dropdown.events') }}</a>
                                         {{-- <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.company_dropdown.partners') }}</a> --}}
                                         <a href="{{route('careers.index')}}" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.company_dropdown.careers') }}</a>
                                    </div>
                                </div>
                                <a href="{{ route('education') }}" class="block px-4 py-3 rounded-md text-text-secondary hover:bg-white/10 hover:text-white transition-colors">{{ __('messages.nav.education') }}</a>
                                <a href="{{ route('contact') }}" class="block px-4 py-3 rounded-md text-text-secondary hover:bg-white/10 hover:text-white transition-colors">{{ __('messages.nav.contact') }}</a>
                                <a href="{{ route('impressum') }}" class="block px-4 py-3 rounded-md text-text-secondary hover:bg-white/10 hover:text-white transition-colors">Impressum</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>