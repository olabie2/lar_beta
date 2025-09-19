<x-layout>
    <div class="bg-gray-900 text-gray-200 min-h-screen">
        <div class="relative">
            <!-- Banner Image -->
            <div class="h-64 md:h-96 bg-cover bg-center" style="background-image: url('{{ $event->banner_image }}');">
                <div class="absolute inset-0 bg-black/60"></div>
            </div>

            <!-- Header Content -->
            <div class="absolute inset-0 flex items-end p-4 md:p-8">
                <div class="max-w-7xl mx-auto w-full text-white">
                    <span class="bg-gray-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        PAST EVENT
                    </span>
                    <h1 class="text-4xl md:text-6xl font-extrabold mt-2 tracking-tight">{{ $event->title }}</h1>
                    <p class="mt-1 text-lg text-gray-300">This event took place on {{ $event->start_time->format('F d, Y') }}</p>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto p-4 md:p-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column: Event Details -->
                <div class="lg:col-span-2">
                     <!-- Key Info Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-8">
                        <!-- Date -->
                        <div class="bg-gray-800 p-4 rounded-lg flex items-center">
                            <svg class="w-8 h-8 text-gray-500 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <div>
                                <p class="text-sm text-gray-400">Event Date</p>
                                <p class="font-bold">{{ $event->start_time->format('M d, Y') }}</p>
                            </div>
                        </div>
                        <!-- Location -->
                        <div class="bg-gray-800 p-4 rounded-lg flex items-center">
                             <svg class="w-8 h-8 text-gray-500 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <div>
                                <p class="text-sm text-gray-400">Location</p>
                                <p class="font-bold">{{ $event->location }}</p>
                            </div>
                        </div>
                        <!-- Attendees -->
                         <div class="bg-gray-800 p-4 rounded-lg flex items-center">
                            <svg class="w-8 h-8 text-gray-500 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <div>
                                <p class="text-sm text-gray-400">Attendees</p>
                                <p class="font-bold">{{ $event->filled_spots }} / {{ $event->max_spots }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Event Recap -->
                    <h2 class="text-2xl font-bold text-white mb-4">Event Recap</h2>
                    <div class="prose prose-invert max-w-none text-gray-300">
                        {!! nl2br(e($event->description)) !!}
                    </div>
                </div>

                <!-- Right Column: Photo Gallery -->
                <div class="lg:col-span-1">
                    <div class="bg-gray-800 p-6 rounded-2xl shadow-lg sticky top-8">
                        <h2 class="text-2xl font-bold text-white mb-4">Event Gallery</h2>
                        <div class="grid grid-cols-2 gap-4">
                            {{-- You would loop through event gallery images here --}}
                            <img src="https://source.unsplash.com/random/400x300?event,party" alt="Event photo 1" class="rounded-lg aspect-square object-cover">
                            <img src="https://source.unsplash.com/random/400x300?event,concert" alt="Event photo 2" class="rounded-lg aspect-square object-cover">
                            <img src="https://source.unsplash.com/random/400x300?event,conference" alt="Event photo 3" class="rounded-lg aspect-square object-cover">
                            <div class="rounded-lg aspect-square bg-gray-700 flex items-center justify-center">
                                <p class="text-gray-400 text-sm">+5 more</p>
                            </div>
                        </div>
                         <a href="#" class="mt-4 inline-block w-full text-center bg-gray-700 text-white px-4 py-2 rounded-lg font-medium hover:bg-gray-600 transition-colors">
                            View Full Gallery
                        </a>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>