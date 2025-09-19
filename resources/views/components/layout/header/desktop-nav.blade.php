<div class="hidden lg:flex items-center justify-center flex-1">
    <ul class="flex items-center gap-6">
        <li><x-nav-link :href="route('ai-agents')" :active="request()->routeIs('ai-agents')">{{ __('messages.nav.ai_agents') }}</x-nav-link></li>
        <li><x-dropdown-link-services /></li>
        <li><x-dropdown-link-company /></li>
        <li><x-nav-link :href="route('education')" :active="request()->routeIs('education')">{{ __('messages.nav.education') }}</x-nav-link></li>
        <li><x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">{{ __('messages.nav.contact') }}</x-nav-link></li>
    </ul>

    <!-- SHARED DESKTOP DROPDOWN PANEL -->
    <div x-ref="navigationDropdown" x-show="desktopMenuOpen" @mouseover="desktopMenuClearCloseTimeout()" @mouseleave="desktopMenuLeave()"
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
        class="absolute top-full pt-2 -translate-x-1/2" x-cloak>
        <div class="overflow-hidden bg-[#100f0fd9] backdrop-blur-2xl border border-glass-border rounded-xl shadow-2xl">
            <!-- Services Content -->
            <div x-show="desktopMenu == 'services'" class="p-8">
                <x-layout.header.dropdowns.services-content />
            </div>
            <!-- Company Content -->
            <div x-show="desktopMenu == 'company'" class="p-8">
                <x-layout.header.dropdowns.company-content />
            </div>
        </div>
    </div>
</div>