<footer class="bg-bg-dark border-t border-glass-border">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            
            <!-- Logo and Branding -->
            <div class="col-span-2 md:col-span-1">
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-2 text-xl font-bold text-primary-light mb-4">
                    <span>HOPn</span>
                </a>
                <p class="text-text-secondary text-sm">
                    {{ __('footer.description') }}
                </p>
            </div>

            <!-- Navigation Links -->
            <div>
                <h3 class="font-bold text-primary-light tracking-wider uppercase mb-4">{{ __('footer.navigate') }}</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-text-secondary hover:text-primary-light transition-colors">{{ __('footer.home') }}</a></li>
                    {{-- <li><a href="#" class="text-text-secondary hover:text-primary-light transition-colors">{{ __('footer.features') }}</a></li> --}}
                    <li><a href="{{route('ai-agents')}}" class="text-text-secondary hover:text-primary-light transition-colors">{{ __('footer.pricing') }}</a></li>
                    <li><a href="{{route('about')}}" class="text-text-secondary hover:text-primary-light transition-colors">{{ __('footer.about_us') }}</a></li>
                </ul>
            </div>

            <!-- Resources Links -->
            <div>
                <h3 class="font-bold text-primary-light tracking-wider uppercase mb-4">{{ __('footer.resources') }}</h3>
                <ul class="space-y-3">
                    <li><a href="{{route('blog.index')}}" class="text-text-secondary hover:text-primary-light transition-colors">{{ __('footer.blog') }}</a></li>
                    <li><a href="#" class="text-text-secondary hover:text-primary-light transition-colors">{{ __('footer.documentation') }}</a></li>
                    <li><a href="#" class="text-text-secondary hover:text-primary-light transition-colors">{{ __('footer.help_center') }}</a></li>
                    <li><a href="{{route('contact')}}" class="text-text-secondary hover:text-primary-light transition-colors">{{ __('footer.contact_us') }}</a></li>
                </ul>
            </div>

            <!-- Legal Links -->
            <div>
                <h3 class="font-bold text-primary-light tracking-wider uppercase mb-4">{{ __('footer.legal') }}</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-text-secondary hover:text-primary-light transition-colors">{{ __('footer.cookie_policy') }}</a></li>
                    <li><a href="/privacy-policy" class="text-text-secondary hover:text-primary-light transition-colors">{{ __('footer.privacy_policy') }}</a></li>
                    <li><a href="#" class="text-text-secondary hover:text-primary-light transition-colors">{{ __('footer.terms_of_service') }}</a></li>
                </ul>
            </div>

        </div>

        <!-- Bottom Bar: Copyright and Socials -->
       <div class="mt-12 pt-8 border-t border-glass-border flex flex-col sm:flex-row items-center justify-between">
            <p class="text-text-secondary text-sm">
                &copy; {{ date('Y') }} HOPn. {{ __('footer.copyright') }}
            </p>
            <div class="flex items-center space-x-4 mt-4 sm:mt-0">
             
                <a href="https://www.facebook.com/share/17YbqhqEu3/?mibextid=wwXIfr" class="text-text-secondary hover:text-primary-light transition-colors">
                    <span class="sr-only">Facebook</span>
                    <!-- Facebook Icon -->
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                    </svg>
                </a>
              
                <a href="https://www.linkedin.com/company/hopn-ug" class="text-text-secondary hover:text-primary-light transition-colors">
                    <span class="sr-only">{{ __('footer.linkedin') }}</span>
                    <!-- Heroicon: LinkedIn -->
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>