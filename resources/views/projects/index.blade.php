<x-layout>
    <div class="relative bg-gradient-to-br from-slate-900 via-indigo-950 to-slate-900 min-h-screen text-white pt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="text-center mb-16">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 bg-clip-text text-transparent mb-6">
                    Our Projects
                </h1>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Explore our portfolio of innovative solutions and success stories.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($projects as $project)
                    <div class="group relative overflow-hidden rounded-3xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 transition-all duration-300 hover:scale-105 flex flex-col h-full">
                        @if($project->image_url)
                            <div class="h-48 overflow-hidden">
                                <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            </div>
                        @endif
                        <div class="p-8 flex-1 flex flex-col">
                            <h3 class="text-2xl font-bold text-white mb-3">{{ $project->title }}</h3>
                            <p class="text-gray-400 mb-6 flex-1">
                                {{ Str::limit($project->description, 100) }}
                            </p>
                            <a href="{{ route('projects.show', $project->slug) }}" class="inline-flex items-center text-indigo-400 hover:text-indigo-300 font-semibold mt-auto">
                                View Case Study <span class="ml-2">→</span>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full">
                        <div class="max-w-2xl mx-auto text-center py-20">
                            <div class="w-24 h-24 mx-auto mb-6 rounded-full bg-indigo-500/10 flex items-center justify-center">
                                <svg class="w-12 h-12 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-4">No Projects Yet</h3>
                            <p class="text-gray-400 mb-8">
                                We're currently working on exciting new projects. Check back soon to see our latest work!
                            </p>
                            <a href="/" class="inline-block px-8 py-3 rounded-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold transition-colors">
                                Return Home
                            </a>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-layout>
