<div class="flex items-start gap-x-12">
    <div class="flex flex-col gap-y-1">
        <h4 class="font-bold text-text-primary mb-3 px-3">{{ __('messages.nav.services_dropdown.core_title') }}</h4>
        <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.ai_automation') }}</a>
        <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.saas_solutions') }}</a>
        <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.it_services') }}</a>
        <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.business_consulting') }}</a>
    </div>
    <div class="flex flex-col gap-y-1">
        <h4 class="font-bold text-text-primary mb-3 px-3">{{ __('messages.nav.services_dropdown.specialized_title') }}</h4>
         <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.lms_elearning') }}</a>
         <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.event_management') }}</a>
         <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.sport_tech') }}</a>
         <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.smart_solutions') }}</a>
         <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.services_dropdown.tech_trading') }}</a>
    </div>
</div>