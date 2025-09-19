<x-layout>


<div class="bg-[--color-bg-dark] text-[--color-text-primary] font-sans antialiased">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">

        <!-- Page Header -->
        <div class="text-center mb-16" style="animation: var(--animation-fade-in-up);">
            <h2 class="text-base font-semibold text-[--color-accent-purple] uppercase tracking-wider">
                {{ __('request-a-demo.header_subtitle') }}
            </h2>
            <p class="mt-2 text-4xl sm:text-5xl font-extrabold tracking-tight">
                {{ __('request-a-demo.header_title') }}
            </p>
            <p class="mt-4 max-w-3xl mx-auto text-lg text-[--color-text-secondary]">
                {{ __('request-a-demo.header_description') }}
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

            <!-- Left Column: Request Form -->
            <div class="w-full bg-[--color-glass-bg] border border-[--color-glass-border] rounded-2xl p-8 backdrop-blur-lg" style="animation: var(--animation-fade-in-up); animation-delay: 0.2s;">
                <h3 class="text-2xl font-bold mb-6">{{ __('request-a-demo.form_title') }}</h3>
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <!-- Full Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-[--color-text-secondary]">
                            {{ __('request-a-demo.form_name_label') }} <span class="text-[--color-accent-pink]">*</span>
                        </label>
                        <input type="text" name="name" id="name" autocomplete="name" placeholder="{{ __('request-a-demo.form_name_placeholder') }}" required
                               class="mt-1 block w-full bg-white/5 border border-[--color-glass-border] rounded-md shadow-sm py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-[--color-primary-indigo]">
                    </div>

                    <!-- Work Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-[--color-text-secondary]">
                            {{ __('request-a-demo.form_email_label') }} <span class="text-[--color-accent-pink]">*</span>
                        </label>
                        <input type="email" name="email" id="email" autocomplete="email" placeholder="{{ __('request-a-demo.form_email_placeholder') }}" required
                               class="mt-1 block w-full bg-white/5 border border-[--color-glass-border] rounded-md shadow-sm py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-[--color-primary-indigo]">
                    </div>
                    
                    <!-- Company Website -->
                    <div>
                        <label for="company_website" class="block text-sm font-medium text-[--color-text-secondary]">{{ __('request-a-demo.form_website_label') }}</label>
                        <input type="url" name="company_website" id="company_website" placeholder="{{ __('request-a-demo.form_website_placeholder') }}"
                               class="mt-1 block w-full bg-white/5 border border-[--color-glass-border] rounded-md shadow-sm py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-[--color-primary-indigo]">
                    </div>

                    <!-- Company Name -->
                    <div>
                        <label for="company" class="block text-sm font-medium text-[--color-text-secondary]">{{ __('request-a-demo.form_company_label') }}</label>
                        <input type="text" name="company" id="company" autocomplete="organization" placeholder="{{ __('request-a-demo.form_company_placeholder') }}"
                               class="mt-1 block w-full bg-white/5 border border-[--color-glass-border] rounded-md shadow-sm py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-[--color-primary-indigo]">
                    </div>

                    <!-- Company Size -->
                    <div>
                        <label for="company_size" class="block text-sm font-medium text-[--color-text-secondary]">{{ __('request-a-demo.form_company_size_label') }}</label>
                         <select id="company_size" name="company_size" class="mt-1 block w-full bg-white/5 border border-[--color-glass-border] rounded-md shadow-sm py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-[--color-primary-indigo]">
                            <option class="text-black">{{ __('request-a-demo.form_company_size_option_1') }}</option>
                            <option class="text-black">{{ __('request-a-demo.form_company_size_option_2') }}</option>
                            <option class="text-black">{{ __('request-a-demo.form_company_size_option_3') }}</option>
                            <option class="text-black">{{ __('request-a-demo.form_company_size_option_4') }}</option>
                            <option class="text-black">{{ __('request-a-demo.form_company_size_option_5') }}</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-[--color-text-secondary]">{{ __('request-a-demo.form_message_label') }}</label>
                        <textarea id="message" name="message" rows="4" placeholder="{{ __('request-a-demo.form_message_placeholder') }}"
                                  class="mt-1 block w-full bg-white/5 border border-[--color-glass-border] rounded-md shadow-sm py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-[--color-primary-indigo]"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="cta-btn primary w-full justify-center">
                            {{ __('request-a-demo.form_submit_button') }}
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right Column: Demo Benefits -->
            <div class="space-y-8" style="animation: var(--animation-fade-in-up); animation-delay: 0.4s;">
                <div class="bg-[--color-glass-bg] border border-[--color-glass-border] rounded-2xl p-8 backdrop-blur-lg">
                    <h3 class="text-2xl font-bold mb-6">{{ __('request-a-demo.benefits_title') }}</h3>
                    <ul class="space-y-6">
                        <li class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-[--color-primary-light]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold">{{ __('request-a-demo.benefit_1_title') }}</p>
                                <p class="text-[--color-text-secondary]">{{ __('request-a-demo.benefit_1_description') }}</p>
                            </div>
                        </li>
                         <li class="flex items-start">
                            <div class="flex-shrink-0">
                               <svg class="h-6 w-6 text-[--color-primary-light]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M12 6V4m0 16v-2M12 12l-2-2m2 2l2-2m2 2l2 2M12 12l-2 2m2-2l2 2m-2-2l2-2m-2 2l-2-2"></path></svg>
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold">{{ __('request-a-demo.benefit_2_title') }}</p>
                                <p class="text-[--color-text-secondary]">{{ __('request-a-demo.benefit_2_description') }}</p>
                            </div>
                        </li>
                         <li class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-[--color-primary-light]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold">{{ __('request-a-demo.benefit_3_title') }}</p>
                                <p class="text-[--color-text-secondary]">{{ __('request-a-demo.benefit_3_description') }}</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


</x-layout>