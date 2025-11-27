@props(['project'])

<div class="group relative overflow-hidden rounded-3xl bg-white/5 backdrop-blur-sm border border-indigo-500/20 hover:border-indigo-400/50 transition-all duration-300 hover:scale-105 flex flex-col h-full">
    @if($project->image_url)
        <div class="h-48 overflow-hidden">
            <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
        </div>
    @endif
    <div class="p-8 flex-1 flex flex-col">
        <h3 class="text-2xl font-bold text-white mb-3">{{ $project->title }}</h3>
        <p class="text-gray-400 mb-6 flex-1">
            {{ Str::limit($project->description, 120) }}
        </p>
        <a href="{{ route('projects.show', $project->slug) }}" class="inline-flex items-center text-indigo-400 hover:text-indigo-300 font-semibold mt-auto group-hover:gap-3 transition-all duration-300">
            View Case Study <span class="ml-2">→</span>
        </a>
    </div>
</div>
