<x-layout>
    <div class="relative bg-gradient-to-br from-slate-900 via-indigo-950 to-slate-900 min-h-screen text-white pt-20">
        <!-- Hero Section -->
        <div class="relative h-[50vh] min-h-[400px] w-full overflow-hidden">
            @if($project->image_url)
                <div class="absolute inset-0">
                    <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="w-full h-full object-cover opacity-30">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                </div>
            @endif
            <div class="absolute inset-0 flex items-end pb-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <h1 class="text-4xl sm:text-6xl lg:text-7xl font-bold text-white mb-6 animate-fade-in-up">
                        {{ $project->title }}
                    </h1>
                    <div class="flex flex-wrap gap-4 text-sm sm:text-base text-gray-300">
                        @if($project->start_date)
                            <span class="px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/10">
                                📅 {{ $project->start_date->format('M Y') }} - {{ $project->end_date ? $project->end_date->format('M Y') : 'Present' }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-12">
                    <!-- Overview -->
                    <section class="bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-indigo-500/20">
                        <h2 class="text-2xl font-bold text-indigo-400 mb-4">Overview</h2>
                        <p class="text-gray-300 leading-relaxed text-lg">
                            {{ $project->description }}
                        </p>
                        @if($project->client)
                            <div class="mt-6 pt-6 border-t border-white/10">
                                <div class="flex items-center gap-2 text-gray-400">
                                    <span class="font-semibold text-white">Client:</span>
                                    {{ $project->client }}
                                </div>
                            </div>
                        @endif
                        @if($project->website)
                            <div class="mt-4">
                                <a href="{{ $project->website }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-indigo-400 hover:text-indigo-300 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                    Visit Project Website
                                </a>
                            </div>
                        @endif
                    </section>

                    <!-- Problem & Solution -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <section class="bg-red-500/10 backdrop-blur-sm rounded-3xl p-8 border border-red-500/20">
                            <h2 class="text-2xl font-bold text-red-400 mb-4">The Challenge</h2>
                            <p class="text-gray-300 leading-relaxed">
                                {{ $project->problem_solved }}
                            </p>
                        </section>
                        <section class="bg-emerald-500/10 backdrop-blur-sm rounded-3xl p-8 border border-emerald-500/20">
                            <h2 class="text-2xl font-bold text-emerald-400 mb-4">The Solution</h2>
                            <p class="text-gray-300 leading-relaxed">
                                {{ $project->solution }}
                            </p>
                        </section>
                    </div>

                    <!-- Technologies -->
                    @if($project->technologies && count($project->technologies) > 0)
                        <section class="bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-indigo-500/20">
                            <h2 class="text-2xl font-bold text-white mb-6">Technologies Used</h2>
                            <div class="flex flex-wrap gap-3">
                                @foreach($project->technologies as $tech)
                                    <span class="px-4 py-2 rounded-full bg-indigo-500/20 border border-indigo-500/30 text-indigo-300 font-medium text-sm hover:bg-indigo-500/30 transition-colors">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>
                        </section>
                    @endif

                    <!-- Key Results / Stats -->
                    @if($project->stats && count($project->stats) > 0)
                        <section class="bg-gradient-to-br from-purple-500/10 to-pink-500/10 backdrop-blur-sm rounded-3xl p-8 border border-purple-500/20">
                            <h2 class="text-2xl font-bold text-white mb-8">Key Results</h2>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                @foreach($project->stats as $stat)
                                    <div class="text-center">
                                        <div class="text-3xl font-black bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent mb-2">
                                            {{ $stat['value'] }}
                                        </div>
                                        <div class="text-sm text-gray-400">{{ $stat['label'] }}</div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endif

                    <!-- Testimonial -->
                    @if($project->testimonial_quote)
                        <section class="bg-gradient-to-br from-indigo-500/10 to-purple-500/10 backdrop-blur-sm rounded-3xl p-8 border border-indigo-500/20">
                            <div class="flex items-start gap-4">
                                <svg class="w-12 h-12 text-indigo-400 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                </svg>
                                <div>
                                    <p class="text-gray-200 text-lg leading-relaxed italic mb-4">
                                        "{{ $project->testimonial_quote }}"
                                    </p>
                                    @if($project->testimonial_author)
                                        <p class="text-indigo-400 font-semibold">
                                            — {{ $project->testimonial_author }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </section>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="space-y-8">
                    <!-- Team -->
                    @if($project->team_members)
                        <section class="bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-indigo-500/20">
                            <h2 class="text-2xl font-bold text-white mb-6">The Team</h2>
                            <div class="space-y-4">
                                @foreach($project->team_members as $member)
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center font-bold text-sm">
                                            {{ substr($member['name'], 0, 2) }}
                                        </div>
                                        <div>
                                            <div class="font-semibold text-white">{{ $member['name'] }}</div>
                                            <div class="text-sm text-gray-400">{{ $member['role'] }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endif

                    <!-- CTA -->
                    <div class="bg-gradient-to-br from-indigo-600/20 to-purple-600/20 backdrop-blur-sm rounded-3xl p-8 border border-indigo-500/30 text-center">
                        <h3 class="text-xl font-bold text-white mb-4">Interested in a similar project?</h3>
                        <a href="/contact" class="inline-block px-8 py-3 rounded-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold transition-colors">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
