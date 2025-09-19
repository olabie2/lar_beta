<x-layout>

<div class="bg-[--color-bg-dark] text-[--color-text-primary] font-sans antialiased">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">

        <!-- Page Header -->
        <div class="text-center mb-16" style="animation: var(--animation-fade-in-up);">
            <h2 class="text-base font-semibold text-[--color-accent-purple] uppercase tracking-wider">
                {{ __('contact-us.header_subtitle') }}
            </h2>
            <p class="mt-2 text-4xl sm:text-5xl font-extrabold tracking-tight">
                {{ __('contact-us.header_title') }}
            </p>
            <p class="mt-4 max-w-2xl mx-auto text-lg text-[--color-text-secondary]">
                {{ __('contact-us.header_description') }}
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

            <!-- Left Column: Contact Form -->
            <div class="w-full bg-[--color-glass-bg] border border-[--color-glass-border] rounded-2xl p-8 backdrop-blur-lg" style="animation: var(--animation-fade-in-up); animation-delay: 0.2s;">
                <h3 class="text-2xl font-bold mb-6">{{ __('contact-us.form_title') }}</h3>
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <!-- Full Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-[--color-text-secondary]">{{ __('contact-us.form_name_label') }}</label>
                        <input type="text" name="name" id="name" autocomplete="name" placeholder="{{ __('contact-us.form_name_placeholder') }}"
                               class="mt-1 block w-full bg-white/5 border border-[--color-glass-border] rounded-md shadow-sm py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-[--color-primary-indigo]">
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-[--color-text-secondary]">{{ __('contact-us.form_email_label') }}</label>
                        <input type="email" name="email" id="email" autocomplete="email" placeholder="{{ __('contact-us.form_email_placeholder') }}"
                               class="mt-1 block w-full bg-white/5 border border-[--color-glass-border] rounded-md shadow-sm py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-[--color-primary-indigo]">
                    </div>

                    <!-- Subject -->
                    <div>
                        <label for="subject" class="block text-sm font-medium text-[--color-text-secondary]">{{ __('contact-us.form_subject_label') }}</label>
                        <input type="text" name="subject" id="subject" placeholder="{{ __('contact-us.form_subject_placeholder') }}"
                               class="mt-1 block w-full bg-white/5 border border-[--color-glass-border] rounded-md shadow-sm py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-[--color-primary-indigo]">
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-[--color-text-secondary]">{{ __('contact-us.form_message_label') }}</label>
                        <textarea id="message" name="message" rows="4" placeholder="{{ __('contact-us.form_message_placeholder') }}"
                                  class="mt-1 block w-full bg-white/5 border border-[--color-glass-border] rounded-md shadow-sm py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-[--color-primary-indigo]"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="cta-btn primary w-full justify-center">
                            {{ __('contact-us.form_submit_button') }}
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right Column: Contact Details -->
            <div class="space-y-8" style="animation: var(--animation-fade-in-up); animation-delay: 0.4s;">
                <div class="bg-[--color-glass-bg] border border-[--color-glass-border] rounded-2xl p-8 backdrop-blur-lg">
                    <h3 class="text-2xl font-bold mb-4">{{ __('contact-us.info_title') }}</h3>
                    <p class="text-[--color-text-secondary] mb-6">
                        {{ __('contact-us.info_description') }}
                    </p>
                    
                    <div class="space-y-4">
                        <!-- Office Location -->
                        <div class="flex items-start">
                            <svg class="flex-shrink-0 h-6 w-6 text-[--color-primary-light]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            <div class="ml-4">
                                <p class="font-semibold">{{ __('contact-us.office_title') }}</p>
                                <p class="text-[--color-text-secondary]">{{ __('contact-us.office_address') }}</p>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="flex items-start">
                            <svg class="flex-shrink-0 h-6 w-6 text-[--color-primary-light]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            <div class="ml-4">
                                <p class="font-semibold">{{ __('contact-us.email_title') }}</p>
                                <a href="mailto:{{ __('contact-us.email_address') }}" class="text-[--color-text-secondary] hover:text-[--color-primary-light] transition-colors">{{ __('contact-us.email_address') }}</a>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start">
                           <svg class="flex-shrink-0 h-6 w-6 text-[--color-primary-light]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <div class="ml-4">
                                <p class="font-semibold">{{ __('contact-us.phone_title') }}</p>
                                <a href="tel:{{ __('contact-us.phone_number_raw') }}" class="text-[--color-text-secondary] hover:text-[--color-primary-light] transition-colors">{{ __('contact-us.phone_number_display') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- You can add a map embed here if you like -->
                 <div class="aspect-w-16 aspect-h-9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2643.082042145329!2d10.72899631560969!3d48.05830097921768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479b970a2411c56b%3A0x6b8be83e4070a751!2sWeichter%20Str.%201%2C%2086807%20Buchloe%2C%20Germany!5e0!3m2!1sen!2sus!4v1663441897561!5m2!1sen!2sus" 
                    class="w-full h-full rounded-2xl border border-[--color-glass-border]" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

</x-layout>