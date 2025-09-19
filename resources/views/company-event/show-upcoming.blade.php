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
                    <span class="bg-accent-purple text-white px-3 py-1 rounded-full text-sm font-semibold">
                        UPCOMING EVENT
                    </span>
                    <h1 class="text-4xl md:text-6xl font-extrabold mt-2 tracking-tight">{{ $event->title }}</h1>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto p-4 md:p-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column: Event Details -->
                <div class="lg:col-span-2">
                    <!-- Key Info Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-8">
                        <!-- Date & Time -->
                        <div class="bg-gray-800 p-4 rounded-lg flex items-center">
                            <svg class="w-8 h-8 text-accent-purple mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <div>
                                <p class="text-sm text-gray-400">Date & Time</p>
                                <p class="font-bold">{{ $event->start_time->format('M d, Y, g:i A') }}</p>
                            </div>
                        </div>
                        <!-- Location -->
                        <div class="bg-gray-800 p-4 rounded-lg flex items-center">
                             <svg class="w-8 h-8 text-accent-purple mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <div>
                                <p class="text-sm text-gray-400">Location</p>
                                <p class="font-bold">{{ $event->location }}</p>
                            </div>
                        </div>
                        <!-- Price -->
                         <div class="bg-gray-800 p-4 rounded-lg flex items-center">
                            <svg class="w-8 h-8 text-accent-purple mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01"></path></svg>
                            <div>
                                <p class="text-sm text-gray-400">Price</p>
                                <p class="font-bold">{{ $event->price == 0 ? 'Free' : '$'.number_format($event->price, 2) }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Event Description -->
                    <h2 class="text-2xl font-bold text-white mb-4">About This Event</h2>
                    <div class="prose prose-invert max-w-none text-gray-300">
                        {!! nl2br(e($event->description)) !!}
                    </div>
                </div>

                <!-- Right Column: Registration Form -->
                <div class="lg:col-span-1">
                    <div class="bg-gray-800 p-6 rounded-2xl shadow-lg sticky top-8">
                        @if(session('success'))
                            <div class="bg-green-500/20 text-green-300 p-4 rounded-lg mb-6 text-center">
                                {{ session('success') }}
                            </div>
                        @elseif($event->status && ($event->max_spots - $event->filled_spots) > 0)
                            <h2 class="text-2xl font-bold text-white mb-1">Register Now</h2>
                            <p class="text-gray-400 mb-6">{{ $event->max_spots - $event->filled_spots }} spots remaining!</p>

                            <form action="{{ route('events.register', $event->id) }}" method="POST" class="space-y-4">
                                @csrf
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-300">Full Name <span class="text-red-500">*</span></label>
                                    <input type="text" id="name" name="name" required value="{{ old('name') }}"
                                           class="mt-1 block w-full bg-gray-700 border-gray-600 rounded-md shadow-sm text-white focus:ring-accent-purple focus:border-accent-purple @error('name') border-red-500 @enderror">
                                    @error('name')
                                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-300">Email Address <span class="text-red-500">*</span></label>
                                    <input type="email" id="email" name="email" required value="{{ old('email') }}"
                                           class="mt-1 block w-full bg-gray-700 border-gray-600 rounded-md shadow-sm text-white focus:ring-accent-purple focus:border-accent-purple @error('email') border-red-500 @enderror">
                                     @error('email')
                                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="submit" class="w-full bg-gradient-to-r from-primary-light to-accent-purple text-white px-4 py-3 rounded-lg font-bold hover:shadow-lg transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-primary-light/50">
                                    Complete Registration
                                </button>
                            </form>
                        @elseif(!$event->status)
                             <div class="bg-gray-700 text-gray-400 p-4 rounded-lg text-center">
                                <h3 class="font-bold text-lg">Registration Closed</h3>
                                <p class="text-sm">Registration for this event is currently closed. Please check back later.</p>
                            </div>
                        @else
                             <div class="bg-red-900/50 text-red-300 p-4 rounded-lg text-center">
                                <h3 class="font-bold text-lg">Event Full</h3>
                                <p class="text-sm">This event has reached its maximum capacity. We hope to see you at the next one!</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>