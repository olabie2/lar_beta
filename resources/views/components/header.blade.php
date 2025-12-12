<header x-data="{
        // --- State for Desktop hover menus ---
        desktopMenuOpen: false,
        desktopMenu: '',
        desktopMenuCloseDelay: 200,
        desktopMenuCloseTimeout: null,
        desktopMenuLeave() {
            this.desktopMenuCloseTimeout = setTimeout(() => this.desktopMenuClose(), this.desktopMenuCloseDelay);
        },
        desktopMenuReposition(navElement) {
            this.desktopMenuClearCloseTimeout();
            if (this.$refs.navigationDropdown) {
                this.$refs.navigationDropdown.style.left = navElement.offsetLeft + 'px';
                this.$refs.navigationDropdown.style.marginLeft = (navElement.offsetWidth / 2) + 'px';
            }
        },
        desktopMenuClearCloseTimeout() { clearTimeout(this.desktopMenuCloseTimeout); },
        desktopMenuClose() { this.desktopMenuOpen = false; this.desktopMenu = ''; },

        // --- State for Mobile slide-over drawer ---
        mobileMenuOpen: false,
        mobileSubMenuOpen: null // Stores which accordion is open: 'services' or 'company'
    }"
    @keydown.escape.window="mobileMenuOpen = false; desktopMenuClose()"
    class="sticky top-0 inset-x-0 z-50 bg-bg-dark/80 backdrop-blur-lg border-b border-glass-border"
>
    <nav class="relative flex items-center justify-between max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-2 text-xl font-bold text-primary-light">
            <div class="w-10 h-10 bg-gradient-to-br from-primary-indigo to-accent-purple rounded-full flex items-center justify-center animate-pulse">⚡</div>
            <span>HOPn</span>
        </a>

        <!-- ============================ -->
        <!-- ==  DESKTOP NAVIGATION  == -->
        <!-- ============================ -->
        <div class="hidden lg:flex items-center justify-center flex-1">
            <ul class="flex items-center gap-6">
                <li><x-nav-link :href="route('ai-agents')" :active="request()->routeIs('ai-agents')">{{ __('messages.nav.ai_agents') }}</x-nav-link></li>
                <li><x-dropdown-link-services /></li>
                <li><x-dropdown-link-company /></li>
                <li><x-nav-link :href="route('education')" :active="request()->routeIs('education')">{{ __('messages.nav.education') }}</x-nav-link></li>
                <li><x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">{{ __('messages.nav.contact') }}</x-nav-link></li>
                <li><x-nav-link :href="route('impressum')" :active="request()->routeIs('impressum')">Impressum</x-nav-link></li>
            </ul>

            <!-- SHARED DESKTOP DROPDOWN PANEL -->
            <div x-ref="navigationDropdown" x-show="desktopMenuOpen" @mouseover="desktopMenuClearCloseTimeout()" @mouseleave="desktopMenuLeave()"
                x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                class="absolute top-full pt-2 -translate-x-1/2" x-cloak>
                <div class="overflow-hidden bg-[#100f0fd9] backdrop-blur-2xl border border-glass-border rounded-xl shadow-2xl">
                    <!-- Services Content -->
                    <div x-show="desktopMenu == 'services'" class="p-8">
                        <div class="flex items-start gap-x-12">
                            <div class="flex flex-col gap-y-1"><h4 class="font-bold text-text-primary mb-3 px-3">{{ __('messages.nav.services_dropdown.core_title') }}</h4>
                                <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.ai_automation') }}</a>
                                <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.saas_solutions') }}</a>
                                <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.it_services') }}</a>
                                <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.business_consulting') }}</a>
                            </div>
                            <div class="flex flex-col gap-y-1"><h4 class="font-bold text-text-primary mb-3 px-3">{{ __('messages.nav.services_dropdown.specialized_title') }}</h4>
                                 <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.lms_elearning') }}</a>
                                 <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.event_management') }}</a>
                                 <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.sport_tech') }}</a>
                                 <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.smart_solutions') }}</a>
                                 <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.tech_trading') }}</a>
                            </div>
                        </div>  
                    </div>
                    <!-- Company Content -->
                    <div x-show="desktopMenu == 'company'" class="p-8">
                        <div class="flex items-start gap-x-12">
                            <div class="flex flex-col gap-y-1"><h4 class="font-bold text-text-primary mb-3 px-3">{{ __('messages.nav.company_dropdown.about_us') }}</h4>
                                <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.company_dropdown.our_story') }}</a>
                                <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.company_dropdown.our_team') }}</a>
                                <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.company_dropdown.projects') }}</a>
                            </div>
                            <div class="flex flex-col gap-y-1"><h4 class="font-bold text-text-primary mb-3 px-3">{{ __('messages.nav.company_dropdown.engagement') }}</h4>
                                <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.company_dropdown.blog') }}</a>
                                <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.company_dropdown.events') }}</a>
                                <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.company_dropdown.partners') }}</a>
                            </div>
                            <div class="flex flex-col gap-y-1"><h4 class="font-bold text-text-primary mb-3 px-3">{{ __('messages.nav.company_dropdown.join_us') }}</h4>
                                <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.company_dropdown.careers') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right Aligned Items -->
        <div class="flex items-center gap-4 flex-shrink-0">
            <x-langSwitcherButton />
            <!-- Mobile Menu Toggle -->
            <div class="lg:hidden">
                <button @click="mobileMenuOpen = true" type="button" class="p-2 inline-flex justify-center items-center rounded-lg border border-glass-border bg-glass-bg text-text-secondary shadow-sm hover:bg-primary-indigo hover:text-white">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                </button>
            </div>
        </div>
    </nav>
    
    <!-- ============================================= -->
    <!-- ==  PINES UI MOBILE SLIDE OVER DRAWER      == -->
    <!-- ============================================= -->
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
                                             <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.ai_automation') }}</a>
                                             <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.saas_solutions') }}</a>
                                             <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.it_services') }}</a>
                                             <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.business_consulting') }}</a>
                                             <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.lms_elearning') }}</a>
                                             <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.event_management') }}</a>
                                             <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.sport_tech') }}</a>
                                             <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.smart_solutions') }}</a>
                                             <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.services_dropdown.tech_trading') }}</a>
                                        </div>
                                    </div>
                                    <!-- Company Accordion -->
                                    <div>
                                        <button @click="mobileSubMenuOpen = mobileSubMenuOpen === 'company' ? null : 'company'" class="w-full flex justify-between items-center px-4 py-3 rounded-md text-text-secondary hover:bg-white/10 hover:text-white transition-colors">
                                            <span>{{ __('messages.nav.company') }}</span><svg :class="{'rotate-180': mobileSubMenuOpen === 'company'}" class="w-5 h-5 transition-transform" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" /></svg>
                                        </button>
                                        <div x-show="mobileSubMenuOpen === 'company'" x-collapse.duration.300ms class="pl-8 pt-2 flex flex-col gap-y-1 text-base border-l border-glass-border ml-6">
                                             <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.company_dropdown.our_story') }}</a>
                                             <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.company_dropdown.our_team') }}</a>
                                             <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.company_dropdown.projects') }}</a>
                                             <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.company_dropdown.blog') }}</a>
                                             <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.company_dropdown.events') }}</a>
                                             <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.company_dropdown.partners') }}</a>
                                             <a href="#" class="block py-2 text-text-secondary hover:text-primary-light transition-colors">{{ __('messages.nav.company_dropdown.careers') }}</a>
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
</header>