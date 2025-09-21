<x-layout>

<div class="bg-gray-900 text-white font-sans antialiased">
    <!-- Decorative background blur -->
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
        <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">

        <!-- Page Header -->
        <div class="text-center mb-16">
            <h2 class="text-base font-semibold text-indigo-400 uppercase tracking-wider">
                {{ __('contact-us.header_subtitle') }}
            </h2>
            <p class="mt-2 text-4xl sm:text-5xl font-bold tracking-tight">
                {{ __('contact-us.header_title') }}
            </p>
            <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-400">
                {{ __('contact-us.header_description') }}
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

            <!-- Left Column: Contact Form -->
            <div class="w-full bg-gray-800/50 rounded-2xl p-8">
                <h2 class="text-3xl font-bold tracking-tight text-white">{{ __('contact-us.form_title') }}</h2>
                <p class="mt-2 text-lg text-gray-400">{{ __('contact-us.info_description') }}</p>
                
                <form action="#" method="POST" class="mt-10 space-y-8">
                    @csrf
                    
                    <!-- Form fields structured like the career page -->
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <!-- Full Name -->
                        <div class="sm:col-span-2">
                            <label for="name" class="block text-sm font-semibold leading-6 text-gray-300">{{ __('contact-us.form_name_label') }}</label>
                            <div class="mt-2.5">
                                <input type="text" name="name" id="name" autocomplete="name" placeholder="{{ __('contact-us.form_name_placeholder') }}"
                                       class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm font-semibold leading-6 text-gray-300">{{ __('contact-us.form_email_label') }}</label>
                            <div class="mt-2.5">
                                <input type="email" name="email" id="email" autocomplete="email" placeholder="{{ __('contact-us.form_email_placeholder') }}"
                                       class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            </div>
                        </div>

                        <!-- Subject -->
                        <div class="sm:col-span-2">
                            <label for="subject" class="block text-sm font-semibold leading-6 text-gray-300">{{ __('contact-us.form_subject_label') }}</label>
                            <div class="mt-2.5">
                                <input type="text" name="subject" id="subject" placeholder="{{ __('contact-us.form_subject_placeholder') }}"
                                       class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="sm:col-span-2">
                            <label for="message" class="block text-sm font-semibold leading-6 text-gray-300">{{ __('contact-us.form_message_label') }}</label>
                            <div class="mt-2.5">
                                <textarea id="message" name="message" rows="4" placeholder="{{ __('contact-us.form_message_placeholder') }}"
                                          class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-10">
                        <button type="submit" class="w-full sm:w-auto rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            {{ __('contact-us.form_submit_button') }}
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right Column: Contact Details -->
            <div class="space-y-8">
                <div class="bg-gray-800/50 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-6">{{ __('contact-us.info_title') }}</h3>
                    
                    <div class="space-y-6">
                        <!-- Office Location -->
                        <div class="flex items-start">
                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            <div class="ml-4">
                                <p class="font-semibold text-gray-300">{{ __('contact-us.office_title') }}</p>
                                <p class="text-gray-400">{{ __('contact-us.office_address') }}</p>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="flex items-start">
                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            <div class="ml-4">
                                <p class="font-semibold text-gray-300">{{ __('contact-us.email_title') }}</p>
                                <a href="mailto:{{ __('contact-us.email_address') }}" class="text-gray-400 hover:text-indigo-400 transition-colors">{{ __('contact-us.email_address') }}</a>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start">
                           <svg class="flex-shrink-0 h-6 w-6 text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <div class="ml-4">
                                <p class="font-semibold text-gray-300">{{ __('contact-us.phone_title') }}</p>
                                <a href="tel:{{ __('contact-us.phone_number_raw') }}" class="text-gray-400 hover:text-indigo-400 transition-colors">{{ __('contact-us.phone_number_display') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                 <div class="aspect-w-16 aspect-h-9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2643.082042145329!2d10.72899631560969!3d48.05830097921768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479b970a2411c56b%3A0x6b8be83e4070a751!2sWeichter%20Str.%201%2C%2086807%20Buchloe%2C%20Germany!5e0!3m2!1sen!2sus!4v1663441897561!5m2!1sen!2sus" 
                    class="w-full h-full rounded-2xl" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

</x-layout>