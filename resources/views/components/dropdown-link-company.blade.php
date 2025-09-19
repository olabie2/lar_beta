<div>
    <button
        type="button"
        @mouseover="desktopMenuOpen=true; desktopMenuReposition($el); desktopMenu='company'" 
        @mouseleave="desktopMenuLeave()"
        :class="{ 'bg-primary-indigo/20 text-primary-light': desktopMenuOpen && desktopMenu == 'company' }"
        class="flex items-center gap-2 px-4 py-2 rounded-md font-medium text-text-secondary hover:text-primary-light transition-colors duration-300"
    >
        <span>{{ __('messages.nav.company') }}</span>
        <svg 
            :class="{ '-rotate-180': desktopMenuOpen && desktopMenu == 'company' }" 
            class="w-4 h-4 transition-transform duration-300" 
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>
    </button>
</div>