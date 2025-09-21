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
                {{ __('request-a-demo.header_subtitle') }}
            </h2>
            <p class="mt-2 text-4xl sm:text-5xl font-bold tracking-tight">
                {{ __('request-a-demo.header_title') }}
            </p>
            <p class="mt-4 max-w-3xl mx-auto text-lg text-gray-400">
                {{ __('request-a-demo.header_description') }}
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

            <!-- Left Column: Request Form -->
            <div class="w-full bg-gray-800/50 rounded-2xl p-8">
                <h3 class="text-3xl font-bold tracking-tight text-white mb-6">{{ __('request-a-demo.form_title') }}</h3>
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    
                    <!-- Full Name -->
                    <div>
                        <label for="name" class="block text-sm font-semibold leading-6 text-gray-300">
                            {{ __('request-a-demo.form_name_label') }} <span class="text-red-400">*</span>
                        </label>
                        <div class="mt-2.5">
                            <input type="text" name="name" id="name" autocomplete="name" placeholder="{{ __('request-a-demo.form_name_placeholder') }}" required
                                   class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        </div>
                    </div>

                    <!-- Work Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold leading-6 text-gray-300">
                            {{ __('request-a-demo.form_email_label') }} <span class="text-red-400">*</span>
                        </label>
                        <div class="mt-2.5">
                            <input type="email" name="email" id="email" autocomplete="email" placeholder="{{ __('request-a-demo.form_email_placeholder') }}" required
                                   class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        </div>
                    </div>
                    
                    <!-- Company Website -->
                    <div>
                        <label for="company_website" class="block text-sm font-semibold leading-6 text-gray-300">{{ __('request-a-demo.form_website_label') }}</label>
                        <div class="mt-2.5">
                            <input type="url" name="company_website" id="company_website" placeholder="{{ __('request-a-demo.form_website_placeholder') }}"
                                   class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        </div>
                    </div>

                    <!-- Company Name -->
                    <div>
                        <label for="company" class="block text-sm font-semibold leading-6 text-gray-300">{{ __('request-a-demo.form_company_label') }}</label>
                        <div class="mt-2.5">
                            <input type="text" name="company" id="company" autocomplete="organization" placeholder="{{ __('request-a-demo.form_company_placeholder') }}"
                                   class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        </div>
                    </div>

                    <!-- Company Size -->
                    <div>
                        <label for="company_size" class="block text-sm font-semibold leading-6 text-gray-300">{{ __('request-a-demo.form_company_size_label') }}</label>
                        <div class="mt-2.5">
                             <select id="company_size" name="company_size" class="block w-full rounded-md border-0 bg-white/5 py-2.5 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <option>{{ __('request-a-demo.form_company_size_option_1') }}</option>
                                <option>{{ __('request-a-demo.form_company_size_option_2') }}</option>
                                <option>{{ __('request-a-demo.form_company_size_option_3') }}</option>
                                <option>{{ __('request-a-demo.form_company_size_option_4') }}</option>
                                <option>{{ __('request-a-demo.form_company_size_option_5') }}</option>
                            </select>
                        </div>
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-semibold leading-6 text-gray-300">{{ __('request-a-demo.form_message_label') }}</label>
                        <div class="mt-2.5">
                            <textarea id="message" name="message" rows="4" placeholder="{{ __('request-a-demo.form_message_placeholder') }}"
                                      class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500"></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit" class="w-full sm:w-auto rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            {{ __('request-a-demo.form_submit_button') }}
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right Column: Demo Benefits -->
            <div class="space-y-8">
                <div class="bg-gray-800/50 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-6">{{ __('request-a-demo.benefits_title') }}</h3>
                    <ul class="space-y-6">
                        <li class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-indigo-400" xmlns="http://www.w.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold text-gray-300">{{ __('request-a-demo.benefit_1_title') }}</p>
                                <p class="text-gray-400">{{ __('request-a-demo.benefit_1_description') }}</p>
                            </div>
                        </li>
                         <li class="flex items-start">
                            <div class="flex-shrink-0">
                               <svg class="h-6 w-6 text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M12 6V4m0 16v-2M12 12l-2-2m2 2l2-2m2 2l2 2M12 12l-2 2m2-2l2 2m-2-2l2-2m-2 2l-2-2"></path></svg>
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold text-gray-300">{{ __('request-a-demo.benefit_2_title') }}</p>
                                <p class="text-gray-400">{{ __('request-a-demo.benefit_2_description') }}</p>
                            </div>
                        </li>
                         <li class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold text-gray-300">{{ __('request-a-demo.benefit_3_title') }}</p>
                                <p class="text-gray-400">{{ __('request-a-demo.benefit_3_description') }}</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

</x-layout>