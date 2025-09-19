<x-layout>
<div class="bg-gray-900 text-white font-sans antialiased">
    
    <!-- Hero Section -->
    <div class="relative isolate overflow-hidden py-24 sm:py-32">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-4xl">
                <!-- Back Link -->
                <div class="mb-8">
                    <a href="{{ route('careers.index') }}" class="inline-flex items-center gap-x-2 text-sm font-semibold text-gray-300 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                          <path fill-rule="evenodd" d="M17 10a.75.75 0 01-.75.75H5.612l4.158 3.96a.75.75 0 11-1.04 1.08l-5.5-5.25a.75.75 0 010-1.08l5.5-5.25a.75.75 0 111.04 1.08L5.612 9.25H16.25A.75.75 0 0117 10z" clip-rule="evenodd" />
                        </svg>
                        {{ __('career.back_link') }}
                    </a>
                </div>

                <!-- Job Header -->
                <div class="md:flex md:items-center md:justify-between">
                    <div class="min-w-0 flex-1">
                        <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">{{ $job->title }}</h1>
                        <div class="mt-2 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6">
                            <p class="mt-2 flex items-center text-sm text-gray-400">
                                @svg('fas-location-dot' ,'size-4 mr-1.5 text-gray-500')
                                {{ $job->location }}
                            </p>
                            <p class="mt-2 flex items-center text-sm text-gray-400">
                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd"></path></svg>
                                {{ __('career.posted_on') }} {{ $job->created_at->translatedFormat('F d, Y') }}
                            </p>
                        </div>
                    </div>
                    <div class="mt-4 flex md:ml-4 md:mt-0">
                        <a href="#application-form" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            {{ __('career.apply_now') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Job Description Content -->
    <div class="mx-auto max-w-7xl px-6 pb-16 sm:pb-24 lg:px-8">
        <div class="mx-auto max-w-4xl">
            <div class="prose prose-invert prose-lg max-w-none">
                {!! nl2br(e($job->description)) !!}
            </div>
        </div>
    </div>

    <!-- Application Form Section -->
    <div id="application-form" class="bg-gray-800/50 py-16 sm:py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-4xl">
                <h2 class="text-3xl font-bold tracking-tight text-white">{{ __('career.form_title') }}</h2>
                <p class="mt-2 text-lg text-gray-400">{{ __('career.form_subtitle') }}</p>

                @if (session('success'))
                    <div class="mt-6 rounded-md bg-green-500/10 p-4 text-sm font-medium text-green-400 ring-1 ring-inset ring-green-500/20">
                        {{ session('success') }}
                    </div>
                @endif
                
                @unless (session('success'))
                <form action="{{ route('careers.apply', $job->id) }}" method="POST" enctype="multipart/form-data" class="mt-10 space-y-8">
                    @csrf
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <div>
                            <label for="first_name" class="block text-sm font-semibold leading-6 text-gray-300">{{ __('career.label_first_name') }}</label>
                            <div class="mt-2.5">
                                <input value="{{ old('first_name') }}" type="text" name="first_name" id="first_name" required class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            </div>
                            @error('first_name')<span class="mt-1 text-sm text-red-400">{{ $message }}</span>@enderror
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-semibold leading-6 text-gray-300">{{ __('career.label_last_name') }}</label>
                            <div class="mt-2.5">
                                <input value="{{ old('last_name') }}" type="text" name="last_name" id="last_name" required class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            </div>
                            @error('last_name')<span class="mt-1 text-sm text-red-400">{{ $message }}</span>@enderror
                        </div>
                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm font-semibold leading-6 text-gray-300">{{ __('career.label_email') }}</label>
                            <div class="mt-2.5">
                                <input value="{{ old('email') }}" type="email" name="email" id="email" required class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            </div>
                            @error('email')<span class="mt-1 text-sm text-red-400">{{ $message }}</span>@enderror
                        </div>
                        <div class="sm:col-span-2">
                            <label for="phone" class="block text-sm font-semibold leading-6 text-gray-300">{{ __('career.label_phone') }} <span class="text-gray-500">({{ __('career.label_optional') }})</span></label>
                            <div class="mt-2.5">
                                <input value="{{ old('phone') }}" type="tel" name="phone" id="phone" class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            </div>
                            @error('phone')<span class="mt-1 text-sm text-red-400">{{ $message }}</span>@enderror
                        </div>
                        <div class="sm:col-span-2">
                            <label for="resume" class="block text-sm font-semibold leading-6 text-gray-300">{{ __('career.label_resume') }}</label>
                            <div class="mt-2.5">
                                <input type="file" name="resume" id="resume" required class="block w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-600/10 file:text-indigo-400 hover:file:bg-indigo-600/20">
                                <p class="text-xs text-gray-500 mt-1">{{ __('career.resume_requirements') }}</p>
                            </div>
                            @error('resume')<span class="mt-1 text-sm text-red-400">{{ $message }}</span>@enderror
                        </div>
                        <div class="sm:col-span-2">
                            <label for="cover_letter" class="block text-sm font-semibold leading-6 text-gray-300">{{ __('career.label_cover_letter') }} <span class="text-gray-500">({{ __('career.label_optional') }})</span></label>
                            <div class="mt-2.5">
                                <textarea name="cover_letter" id="cover_letter" rows="4" class="block w-full rounded-md border-0 bg-white/5 py-2 px-3.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500">{{ old('cover_letter') }}</textarea>
                            </div>
                            @error('cover_letter')<span class="mt-1 text-sm text-red-400">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="mt-10">
                        <button type="submit" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            {{ __('career.submit_button') }}
                        </button>
                    </div>
                </form>
                @endunless
            </div>
        </div>
    </div>
</div>
</x-layout>