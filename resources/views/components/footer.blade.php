<footer class="bg-bg-dark border-t border-glass-border">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            
            <!-- Logo and Branding -->
            <div class="col-span-2 md:col-span-1">
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-2 text-xl font-bold text-primary-light mb-4">
                    <span>HOPn</span>
                </a>
                <p class="text-text-secondary text-sm">
                    A short and catchy description of your company or what you do.
                </p>
            </div>

            <!-- Navigation Links -->
            <div>
                <h3 class="font-bold text-primary-light tracking-wider uppercase mb-4">Navigate</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-text-secondary hover:text-primary-light transition-colors">Home</a></li>
                    {{-- <li><a href="#" class="text-text-secondary hover:text-primary-light transition-colors">Features</a></li> --}}
                    <li><a href="{{route('ai-agents')}}" class="text-text-secondary hover:text-primary-light transition-colors">Pricing</a></li>
                    <li><a href="{{route('about')}}" class="text-text-secondary hover:text-primary-light transition-colors">About Us</a></li>
                </ul>
            </div>

            <!-- Resources Links -->
            <div>
                <h3 class="font-bold text-primary-light tracking-wider uppercase mb-4">Resources</h3>
                <ul class="space-y-3">
                    <li><a href="{{route('blog.index')}}" class="text-text-secondary hover:text-primary-light transition-colors">Blog</a></li>
                    <li><a href="#" class="text-text-secondary hover:text-primary-light transition-colors">Documentation</a></li>
                    <li><a href="#" class="text-text-secondary hover:text-primary-light transition-colors">Help Center</a></li>
                    <li><a href="{{route('contact')}}" class="text-text-secondary hover:text-primary-light transition-colors">Contact Us</a></li>
                </ul>
            </div>

            <!-- Legal Links -->
            <div>
                <h3 class="font-bold text-primary-light tracking-wider uppercase mb-4">Legal</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-text-secondary hover:text-primary-light transition-colors">Cookie Policy</a></li>
                    <li><a href="/privacy-policy" class="text-text-secondary hover:text-primary-light transition-colors">Privacy Policy</a></li>
                    <li><a href="#" class="text-text-secondary hover:text-primary-light transition-colors">Terms of Service</a></li>
                </ul>
            </div>

        </div>

        <!-- Bottom Bar: Copyright and Socials -->
        <div class="mt-12 pt-8 border-t border-glass-border flex flex-col sm:flex-row items-center justify-between">
            <p class="text-text-secondary text-sm">
                &copy; {{ date('Y') }} HOPn. All rights reserved.
            </p>
            <div class="flex items-center space-x-4 mt-4 sm:mt-0">
                <!-- Replace # with your actual social media links -->
                <a href="#" class="text-text-secondary hover:text-primary-light transition-colors">
                    <span class="sr-only">Twitter</span>
                    <!-- Heroicon: X (Twitter) -->
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231L18.244 2.25zM16.949 19.5h1.57l-6.556-8.72L5.43 4.5H3.86l6.24 8.25L16.949 19.5z"/>
                    </svg>
                </a>
                <a href="#" class="text-text-secondary hover:text-primary-light transition-colors">
                    <span class="sr-only">GitHub</span>
                     <!-- Heroicon: GitHub -->
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.165 6.839 9.49.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.031-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.338 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.001 10.001 0 0022 12c0-5.523-4.477-10-10-10z" clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="#" class="text-text-secondary hover:text-primary-light transition-colors">
                    <span class="sr-only">LinkedIn</span>
                    <!-- Heroicon: LinkedIn -->
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>