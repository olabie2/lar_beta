<x-layout>
    {{-- Link to the correct stylesheet based on the application's locale --}}
    @if (app()->getLocale() == 'ar')
        <link href="{{ asset('css/rtl.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('css/ltr.css') }}" rel="stylesheet">
    @endif

    {{-- Main container with a dark background --}}
    <div class="relative min-h-[calc(100vh-80px)] bg-gray-900 text-gray-200">
        
        <!-- Hero Section -->
        <div class="flex items-center justify-center min-h-[50vh] p-4 sm:p-6 lg:p-8">
            <div class="max-w-4xl text-center">
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight animate-glow bg-gradient-to-r from-primary-light via-accent-purple to-accent-pink bg-clip-text text-transparent">
                    {{ __('company-event.hero_title') }}
                </h1>
                
                <p class="mt-6 text-xl sm:text-2xl text-gray-400 animate-[fade-in-up_1s_ease-out_0.3s_both]">
                    {{ __('company-event.hero_subtitle') }}
                </p>
            </div>
        </div>

        <!-- Upcoming Events Section -->
        <section class="py-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                        {{ __('company-event.upcoming_events') }}
                    </h2>
                    <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                        {{ __('company-event.upcoming_events_subtitle') }}
                    </p>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @forelse($upcomingEvents as $event)
                        <div class="group flex flex-col bg-gray-800 rounded-2xl shadow-lg hover:shadow-purple-500/20 transition-all duration-300 overflow-hidden border border-gray-700 hover:border-primary-light/30 transform hover:-translate-y-2">
                            
                            @if($event->banner_image)
                                <div class="relative h-48 overflow-hidden">
                                     {{-- <img src="{{ $event->banner_image }}"  --}}
                                      <img src="{{ asset('blog1.jpg') }}" 
                                         alt="{{ $event->title }}"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                    <div class="absolute top-4 right-4">
                                        <span class="bg-accent-purple text-white px-3 py-1 rounded-full text-sm font-medium">
                                            {{ __('company-event.status_upcoming') }}
                                        </span>
                                    </div>
                                </div>
                            @endif

                            <div class="p-6 flex flex-col flex-grow">
                                <div class="flex-grow">
                                    <div class="flex items-center text-sm text-gray-400 mb-3">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        <span>{{ $event->start_time->format('M d, Y') }}</span>
                                        <span class="mx-2">•</span>
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        <span>{{ $event->start_time->format('g:i A') }}</span>
                                    </div>

                                    <h3 class="text-xl font-bold text-gray-100 mb-3 group-hover:text-primary-light transition-colors">
                                        {{ $event->title }}
                                    </h3>

                                    @if($event->location)
                                        <div class="flex items-center text-sm text-gray-500 mb-3">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                            <span>{{ $event->location }}</span>
                                        </div>
                                    @endif

                                    <p class="text-gray-400 mb-4 line-clamp-3">
                                        {{ Str::limit($event->description, 120) }}
                                    </p>

                                    @if(isset($event->price))
                                        <div class="flex items-center mb-4">
                                            <span class="text-2xl font-bold text-primary-light">
                                                @if($event->price == 0)
                                                    {{ __('company-event.free') }}
                                                @else
                                                    ${{$event->price}}
                                                @endif
                                            </span>
                                        </div>
                                    @endif

                                    @if($event->capacity)
                                        <div class="flex items-center text-sm text-gray-500 mb-4">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                            <span>{{ $event->capacity - $event->getFilledSpotsAttribute() }} {{ __('company-event.spots_available') }}</span>
                                        </div>
                                    @endif
                                </div>

                                <div class="flex gap-3 mt-auto pt-6">
                                    @if($event->status && ($event->capacity - $event->getFilledSpotsAttribute()) > 0)
                                        <button 
                                            onclick="window.location.href='{{ route('event.show', $event->id) }}'"
                                            class="flex-1 bg-gradient-to-r from-primary-light to-accent-purple text-white px-4 py-2 rounded-lg font-medium hover:shadow-lg transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-primary-light/50">
                                            {{ __('company-event.register_now') }}
                                        </button>
                                    @elseif(!$event->status)
                                        <div class="flex-1 bg-gray-700 text-gray-400 px-4 py-2 rounded-lg font-medium text-center">
                                            {{ __('company-event.registration_closed') }}
                                        </div>
                                    @else
                                        <div class="flex-1 bg-red-900/50 text-red-400 px-4 py-2 rounded-lg font-medium text-center">
                                            {{ __('company-event.event_full') }}
                                        </div>
                                    @endif
                                    
                                    <button 
                                        onclick="window.location.href='{{ route('event.show', $event->id) }}'"
                                        class="px-4 py-2 border border-gray-600 text-gray-300 rounded-lg hover:bg-gray-700 transition-colors focus:outline-none focus:ring-2 focus:ring-gray-500/50">
                                        {{ __('company-event.learn_more') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    @empty
                        {{-- Empty state for no upcoming events --}}
                    @endforelse
                </div>
            </div>
        </section>

        <!-- Past Events Section -->
        <section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-900/50">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                        {{ __('company-event.past_events') }}
                    </h2>
                    <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                        {{ __('company-event.past_events_subtitle') }}
                    </p>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @forelse($pastEvents as $event)
                        <div class="group flex flex-col bg-gray-800 rounded-2xl shadow-lg hover:shadow-purple-500/20 transition-all duration-300 overflow-hidden border border-gray-700 hover:border-gray-600 transform hover:-translate-y-1">
                           
                            @if($event->banner_image)
                                <div class="relative h-48 overflow-hidden">
                                     <img src="{{ $event->banner_image }}" 
                                         alt="{{ $event->title }}"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-colors duration-300"></div>
                                    <div class="absolute top-4 right-4">
                                        <span class="bg-gray-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                                            {{ __('company-event.status_past') }}
                                        </span>
                                    </div>
                                </div>
                            @endif

                            <div class="p-6 flex flex-col flex-grow">
                                <div class="flex-grow">
                                    <div class="flex items-center text-sm text-gray-400 mb-3">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        <span>{{ $event->start_time->format('M d, Y') }}</span>
                                    </div>

                                    <h3 class="text-xl font-bold text-gray-100 mb-3 group-hover:text-gray-300 transition-colors">
                                        {{ $event->title }}
                                    </h3>

                                    @if($event->location)
                                        <div class="flex items-center text-sm text-gray-500 mb-3">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                            <span>{{ $event->location }}</span>
                                        </div>
                                    @endif

                                    <p class="text-gray-400 mb-4 line-clamp-3">
                                        {{ Str::limit($event->description, 120) }}
                                    </p>

                                    @if($event->getFilledSpotsAttribute())
                                        <div class="flex items-center text-sm text-gray-500 mb-4">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                            <span>{{ $event->getFilledSpotsAttribute() }} {{ __('company-event.attendees') }}</span>
                                        </div>
                                    @endif
                                </div>
                                
                                <div class="mt-auto pt-6">
                                    <button 
                                        onclick="window.location.href='{{ route('event.show', $event->id) }}'"
                                        class="w-full px-4 py-2 border border-gray-600 text-gray-300 rounded-lg hover:bg-gray-700 hover:border-gray-500 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-gray-500/50">
                                        <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                        {{ __('company-event.view_event_details') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    @empty
                        {{-- Empty state for no past events --}}
                    @endforelse
                </div>

                {{-- @if($pastEvents->count() >= 3)
                    <div class="text-center mt-12">
                        <a href="#" 
                           class="inline-flex items-center px-6 py-3 border border-gray-600 text-gray-300 font-medium rounded-lg hover:bg-gray-700 hover:border-gray-500 transition-all duration-300">
                            {{ __('company-event.view_all_events_button') }}
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                @endif --}}
            </div>
        </section>
    </div>
</x-layout>