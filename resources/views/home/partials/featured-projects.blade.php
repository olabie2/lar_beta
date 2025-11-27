<!-- Featured Projects Section -->
@if(isset($projects) && $projects->isNotEmpty())
    <section class="relative py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12 sm:mb-16 scroll-reveal">
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 bg-clip-text text-transparent mb-4 sm:mb-6">
                    Featured Projects
                </h2>
                <p class="text-lg sm:text-xl text-gray-400 max-w-3xl mx-auto px-4">
                    Explore our latest success stories and innovative solutions
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($projects as $index => $project)
                    <div class="scroll-reveal delay-{{ $index + 1 }}">
                        <x-project-card :project="$project" />
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('projects.index') }}" class="inline-flex items-center px-8 py-4 rounded-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold transition-all duration-300 transform hover:scale-105">
                    View All Projects <span class="ml-2">→</span>
                </a>
                
            </div>
        </div>
    </section>
@endif
