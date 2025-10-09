<x-layout>
<div class="bg-gray-900 text-white font-sans antialiased">
    <div class="relative">
        {{-- Header --}}
        <header class="py-8 text-center border-b border-white/10">
            <div class="max-w-7xl mx-auto px-4">
                <h1 class="text-3xl font-black text-white">
                    {{ __('education.logo') }}
                </h1>
            </div>
        </header>

        {{-- Hero Section --}}
        <section class="text-center py-20 px-4">
            <div class="max-w-5xl mx-auto">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold tracking-tight text-white sm:text-7xl mb-8">
                    {{ __('education.hero_title') }}
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed mb-12">
                    {{ __('education.hero_subtitle') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#programs" class="rounded-md bg-indigo-600 px-8 py-4 text-lg font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        {{ __('education.cta_explore') }}
                    </a>
                    <a href="#signup" class="px-8 py-4 border-2 border-white/20 rounded-md font-semibold text-lg transition-all duration-300 hover:bg-white/10 hover:border-white/40">
                        {{ __('education.cta_signup') }}
                    </a>
                </div>
            </div>
        </section>

        {{-- Programs Section --}}
        <section id="programs" class="py-20 px-4">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold tracking-tight text-white text-center mb-16">
                    {{ __('education.programs_title') }}
                </h2>
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    {{-- Bootcamps --}}
                    <div class="bg-gray-800/50 rounded-2xl p-8">
                        <div class="w-16 h-16 bg-indigo-600 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-white">{{ __('education.bootcamps_title') }}</h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">{{ __('education.bootcamps_desc') }}</p>
                        <ul class="space-y-3 text-gray-400">
                            <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>{{ __('education.bootcamps_item1') }}</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>{{ __('education.bootcamps_item2') }}</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>{{ __('education.bootcamps_item3') }}</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>{{ __('education.bootcamps_item4') }}</li>
                        </ul>
                    </div>

                    {{-- Workshops --}}
                    <div class="bg-gray-800/50 rounded-2xl p-8">
                        <div class="w-16 h-16 bg-indigo-600 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-white">{{ __('education.workshops_title') }}</h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">{{ __('education.workshops_desc') }}</p>
                        <ul class="space-y-3 text-gray-400">
                            <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>{{ __('education.workshops_item1') }}</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>{{ __('education.workshops_item2') }}</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>{{ __('education.workshops_item3') }}</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>{{ __('education.workshops_item4') }}</li>
                        </ul>
                    </div>

                    {{-- LMS Platform --}}
                    <div class="bg-gray-800/50 rounded-2xl p-8">
                        <div class="w-16 h-16 bg-indigo-600 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-white">{{ __('education.lms_title') }}</h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">{{ __('education.lms_desc') }}</p>
                        <ul class="space-y-3 text-gray-400">
                            <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>{{ __('education.lms_item1') }}</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>{{ __('education.lms_item2') }}</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>{{ __('education.lms_item3') }}</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>{{ __('education.lms_item4') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- Learning Paths Section --}}
        <section class="py-20 px-4 bg-gray-800/50">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold tracking-tight text-white text-center mb-16">
                    {{ __('education.paths_title') }}
                </h2>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    {{-- Student Programs --}}
                    <div class="text-center">
                        <div class="w-24 h-24 bg-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-8">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                        </div>
                        <h3 class="text-3xl font-bold mb-6 text-white">{{ __('education.student_title') }}</h3>
                        <p class="text-lg text-gray-400 mb-8 leading-relaxed">{{ __('education.student_desc') }}</p>
                        <div class="space-y-4 text-gray-400">
                            <div class="flex items-center justify-center"><span class="w-3 h-3 bg-indigo-500 rounded-full mr-4"></span><span class="text-left flex-1">{{ __('education.student_item1') }}</span></div>
                            <div class="flex items-center justify-center"><span class="w-3 h-3 bg-indigo-500 rounded-full mr-4"></span><span class="text-left flex-1">{{ __('education.student_item2') }}</span></div>
                            <div class="flex items-center justify-center"><span class="w-3 h-3 bg-indigo-500 rounded-full mr-4"></span><span class="text-left flex-1">{{ __('education.student_item3') }}</span></div>
                            <div class="flex items-center justify-center"><span class="w-3 h-3 bg-indigo-500 rounded-full mr-4"></span><span class="text-left flex-1">{{ __('education.student_item4') }}</span></div>
                        </div>
                    </div>

                    {{-- Corporate Programs --}}
                    <div class="text-center">
                        <div class="w-24 h-24 bg-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-8">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <h3 class="text-3xl font-bold mb-6 text-white">{{ __('education.corporate_title') }}</h3>
                        <p class="text-lg text-gray-400 mb-8 leading-relaxed">{{ __('education.corporate_desc') }}</p>
                        <div class="space-y-4 text-gray-400">
                            <div class="flex items-center justify-center"><span class="w-3 h-3 bg-indigo-500 rounded-full mr-4"></span><span class="text-left flex-1">{{ __('education.corporate_item1') }}</span></div>
                            <div class="flex items-center justify-center"><span class="w-3 h-3 bg-indigo-500 rounded-full mr-4"></span><span class="text-left flex-1">{{ __('education.corporate_item2') }}</span></div>
                            <div class="flex items-center justify-center"><span class="w-3 h-3 bg-indigo-500 rounded-full mr-4"></span><span class="text-left flex-1">{{ __('education.corporate_item3') }}</span></div>
                            <div class="flex items-center justify-center"><span class="w-3 h-3 bg-indigo-500 rounded-full mr-4"></span><span class="text-left flex-1">{{ __('education.corporate_item4') }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Sign-up Form Section --}}
        <section id="signup" class="py-20 px-4">
            <div class="max-w-3xl mx-auto" x-data="signupForm()">
                <div class="bg-gray-800/50 rounded-3xl p-8 md:p-12">
                    <h2 class="text-4xl md:text-5xl font-bold tracking-tight text-white text-center mb-6">
                        {{ __('education.form_title') }}
                    </h2>
                    <p class="text-xl text-gray-400 text-center mb-12">{{ __('education.form_subtitle') }}</p>
                    
                    <form @submit.prevent="submitForm" x-ref="signupForm">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-300 mb-2">{{ __('education.form_label_firstname') }}</label>
                                <input type="text" name="firstName" required class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500" placeholder="{{ __('education.form_placeholder_firstname') }}">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-300 mb-2">{{ __('education.form_label_lastname') }}</label>
                                <input type="text" name="lastName" required class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500" placeholder="{{ __('education.form_placeholder_lastname') }}">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-gray-300 mb-2">{{ __('education.form_label_email') }}</label>
                            <input type="email" name="email" required class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500" placeholder="{{ __('education.form_placeholder_email') }}">
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-gray-300 mb-2">{{ __('education.form_label_program') }}</label>
                            <select name="program" required class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <option value="" class="bg-gray-900">{{ __('education.form_select_program') }}</option>
                                <option value="bootcamp" class="bg-gray-900">{{ __('education.form_option_bootcamp') }}</option>
                                <option value="workshops" class="bg-gray-900">{{ __('education.form_option_workshops') }}</option>
                                <option value="lms" class="bg-gray-900">{{ __('education.form_option_lms') }}</option>
                                <option value="corporate" class="bg-gray-900">{{ __('education.form_option_corporate') }}</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-gray-300 mb-2">{{ __('education.form_label_experience') }}</label>
                            <select name="experience" required class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <option value="" class="bg-gray-900">{{ __('education.form_select_experience') }}</option>
                                <option value="beginner" class="bg-gray-900">{{ __('education.form_option_beginner') }}</option>
                                <option value="some" class="bg-gray-900">{{ __('education.form_option_some') }}</option>
                                <option value="intermediate" class="bg-gray-900">{{ __('education.form_option_intermediate') }}</option>
                                <option value="advanced" class="bg-gray-900">{{ __('education.form_option_advanced') }}</option>
                            </select>
                        </div>
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-gray-300 mb-2">{{ __('education.form_label_goals') }}</label>
                            <textarea name="goals" rows="4" class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500" placeholder="{{ __('education.form_placeholder_goals') }}"></textarea>
                        </div>
                        <button type="submit" :disabled="isSubmitting" class="w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:opacity-50">
                            <span x-show="!isSubmitting">{{ __('education.form_button_submit') }}</span>
                            <span x-show="isSubmitting" class="flex items-center justify-center">
                                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                                {{ __('education.form_button_submitting') }}
                            </span>
                        </button>
                        <p class="text-sm text-gray-500 text-center mt-6">{{ __('education.form_terms') }}</p>
                    </form>
                </div>
            </div>
        </section>

        {{-- Footer --}}
        <footer class="py-12 px-4 border-t border-white/10">
            <div class="max-w-7xl mx-auto text-center">
                <p class="text-gray-400">{{ __('education.footer_copyright') }}</p>
            </div>
        </footer>
    </div>
</div>

<script>
function signupForm() {
    return {
        isSubmitting: false,
        submitForm() {
            this.isSubmitting = true;
            setTimeout(() => {
                alert("{{ __('education.js_alert_success') }}");
                this.$refs.signupForm.reset();
                this.isSubmitting = false;
            }, 2000);
        }
    }
}
</script>
</x-layout>