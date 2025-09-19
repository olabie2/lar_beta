<x-layout>
    {{-- Link to the correct stylesheet based on the application's locale --}}
    @if (app()->getLocale() == 'ar')
        <link href="{{ asset('css/rtl.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('css/ltr.css') }}" rel="stylesheet">
    @endif

    <div class="bg-gray-900 text-gray-200 min-h-screen">
        {{-- ============================================================================== --}}
        {{-- SHARED HEADER SECTION                                                          --}}
        {{-- ============================================================================== --}}
        <div class="relative">
            <!-- Banner Image -->
            {{-- <div class="h-64 md:h-96 bg-cover bg-center" style="background-image: url('{{ $event->banner_image }}');"> --}}
                <div class="h-64 md:h-96 bg-cover bg-center" style="background-image: url('{{ asset('blog1.jpg') }}');">
                <div class="absolute inset-0 bg-black/60"></div>
            </div>

            <!-- Header Content -->
            <div class="absolute inset-0 flex items-end p-4 md:p-8">
                <div class="max-w-7xl mx-auto w-full text-white">
                    @if ($event->end_time < now())
                        <span class="bg-gray-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            {{ __('event-details.status_past') }}
                        </span>
                    @else
                        <span class="bg-accent-purple text-white px-3 py-1 rounded-full text-sm font-semibold">
                            {{ __('event-details.status_upcoming') }}
                        </span>
                    @endif
                    <h1 class="text-4xl md:text-6xl font-extrabold mt-2 tracking-tight">{{ $event->title }}</h1>
                </div>
            </div>
        </div>

        {{-- ============================================================================== --}}
        {{-- MAIN CONTENT                                                                 --}}
        {{-- ============================================================================== --}}
        <div class="max-w-7xl mx-auto p-4 md:p-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                {{-- Left Column --}}
                <div class="lg:col-span-2">
                    <!-- Key Info Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-8">
                        <!-- Date & Time -->
                        <div class="bg-gray-800 p-4 rounded-lg flex items-center">
                            <svg class="w-8 h-8 text-accent-purple shrink-0 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <div>
                                <p class="text-sm text-gray-400">{{ __('event-details.date_time') }}</p>
                                <p class="font-bold">{{ $event->start_time->format('M d, Y, g:i A') }}</p>
                            </div>
                        </div>
                        <!-- Location -->
                        <div class="bg-gray-800 p-4 rounded-lg flex items-center">
                             <svg class="w-8 h-8 text-accent-purple shrink-0 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <div>
                                <p class="text-sm text-gray-400">{{ __('event-details.location') }}</p>
                                <p class="font-bold">{{ $event->location }}</p>
                            </div>
                        </div>
                        <!-- Price / Attendees -->
                        <div class="bg-gray-800 p-4 rounded-lg flex items-center">
                            @if ($event->end_time < now())
                                <svg class="w-8 h-8 text-gray-500 shrink-0 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                <div>
                                    <p class="text-sm text-gray-400">{{ __('event-details.attendees') }}</p>
                                    <p class="font-bold">{{ $event->getFilledSpotsAttribute() }} / {{ $event->capacity }}</p>
                                </div>
                            @else
                                <svg class="w-8 h-8 text-accent-purple shrink-0 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01"></path></svg>
                                <div>
                                    <p class="text-sm text-gray-400">{{ __('event-details.price') }}</p>
                                    <p class="font-bold">{{ $event->price == 0 ? __('event-details.free') : '$'. $event->price }}</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Event Description -->
                    <h2 class="text-2xl font-bold text-white mb-4">
                        {{ $event->end_time < now() ? __('event-details.recap_title') : __('event-details.about_title') }}
                    </h2>
                    <div class="prose prose-invert max-w-none text-gray-300">
                        {!! nl2br(e($event->description)) !!}
                    </div>
                </div>


                {{-- ============================================================================== --}}
                {{-- RIGHT COLUMN                                                                 --}}
                {{-- ============================================================================== --}}
                <div class="lg:col-span-1">
                    <div class="bg-gray-800 p-6 rounded-2xl shadow-lg sticky top-8">

                        {{-- ******************************************* --}}
                        {{-- * IF THE EVENT IS UPCOMING, SHOW THE FORM * --}}
                        {{-- ******************************************* --}}
                        @if ($event->end_time >= now())
                            @if(session('success'))
                                <div class="bg-green-500/20 text-green-300 p-4 rounded-lg mb-6 text-center">
                                    {{ __('event-details.registration_success') }}
                                </div>
                            @elseif($event->status && ($event->capacity - $event->getFilledSpotsAttribute()) > 0)
                                <h2 class="text-2xl font-bold text-white mb-1">{{ __('event-details.register_title') }}</h2>
                                <p class="text-gray-400 mb-6">{{ $event->capacity - $event->getFilledSpotsAttribute() }} {{ __('event-details.spots_remaining') }}</p>

                                <form action="{{ route('event.register', $event->id) }}" method="POST" class="space-y-4">
                                    @csrf
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-300">{{ __('event-details.full_name') }} <span class="text-red-500">*</span></label>
                                        <input type="text" id="name" name="name" required value="{{ old('name') }}"
                                               class="mt-1 block w-full bg-gray-700 border-gray-600 rounded-md shadow-sm text-white focus:ring-accent-purple focus:border-accent-purple @error('name') border-red-500 @enderror">
                                        @error('name')<p class="mt-1 text-sm text-red-400">{{ $message }}</p>@enderror
                                    </div>

                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-300">{{ __('event-details.email_address') }} <span class="text-red-500">*</span></label>
                                        <input type="email" id="email" name="email" required value="{{ old('email') }}"
                                               class="mt-1 block w-full bg-gray-700 border-gray-600 rounded-md shadow-sm text-white focus:ring-accent-purple focus:border-accent-purple @error('email') border-red-500 @enderror">
                                        @error('email')<p class="mt-1 text-sm text-red-400">{{ $message }}</p>@enderror
                                    </div>

                                    <button type="submit" class="w-full bg-gradient-to-r from-primary-light to-accent-purple text-white px-4 py-3 rounded-lg font-bold hover:shadow-lg transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-primary-light/50">
                                        {{ __('event-details.complete_registration') }}
                                    </button>
                                </form>
                            @elseif(!$event->status)
                                <div class="bg-gray-700 text-gray-400 p-4 rounded-lg text-center">
                                    <h3 class="font-bold text-lg">{{ __('event-details.registration_closed') }}</h3>
                                </div>
                            @else
                                <div class="bg-red-900/50 text-red-300 p-4 rounded-lg text-center">
                                    <h3 class="font-bold text-lg">{{ __('event-details.event_full') }}</h3>
                                </div>
                            @endif

                        {{-- ******************************************* --}}
                        {{-- * IF THE EVENT IS PAST, SHOW THE GALLERY  * --}}
                        {{-- ******************************************* --}}
                        @else
                            <h2 class="text-2xl font-bold text-white mb-4">{{ __('event-details.gallery_title') }}</h2>
                            <div class="grid grid-cols-2 gap-4">
                                {{-- Loop through event gallery images here --}}
                                <img src="https://source.unsplash.com/random/400x300?event,party" alt="Event photo 1" class="rounded-lg aspect-square object-cover">
                                <img src="https://source.unsplash.com/random/400x300?event,concert" alt="Event photo 2" class="rounded-lg aspect-square object-cover">
                                <img src="https://source.unsplash.com/random/400x300?event,conference" alt="Event photo 3" class="rounded-lg aspect-square object-cover">
                                <div class="rounded-lg aspect-square bg-gray-700 flex items-center justify-center">
                                    <p class="text-gray-400 text-sm">{{ __('event-details.more_photos', ['count' => 5]) }}</p>
                                </div>
                            </div>
                            <a href="#" class="mt-4 inline-block w-full text-center bg-gray-700 text-white px-4 py-2 rounded-lg font-medium hover:bg-gray-600 transition-colors">
                                {{ __('event-details.view_full_gallery') }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>