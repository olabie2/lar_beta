<div class="flex items-start gap-x-12">
    <div class="flex flex-col gap-y-1">
        <h4 class="font-bold text-text-primary mb-3 px-3">{{ __('messages.nav.company_dropdown.about_us') }}</h4>
        <a href="{{route('about')}}" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.company_dropdown.about') }}</a>
        {{-- <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.company_dropdown.our_story') }}</a> --}}
        {{-- <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.company_dropdown.our_team') }}</a> --}}
        {{-- <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.company_dropdown.projects') }}</a> --}}
    </div>
    <div class="flex flex-col gap-y-1">
        <h4 class="font-bold text-text-primary mb-3 px-3">{{ __('messages.nav.company_dropdown.engagement') }}</h4>
        <a href="{{route('blog.index')}}" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.company_dropdown.blog') }}</a>
        <a href="{{route("company-events.index")}}" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.company_dropdown.events') }}</a>
        {{-- <a href="#" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.company_dropdown.partners') }}</a> --}}
    </div>
    <div class="flex flex-col gap-y-1">
        <h4 class="font-bold text-text-primary mb-3 px-3">{{ __('messages.nav.company_dropdown.join_us') }}</h4>
        <a href="{{route('careers.index')}}" @click="desktopMenuClose()" class="block text-text-secondary hover:text-primary-light hover:bg-white/10 rounded-md px-3 py-2 transition-colors">{{ __('messages.nav.company_dropdown.careers') }}</a>
    </div>
</div>