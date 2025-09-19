{{--
    This view now expects two variables from the controller:
    1. `$latestBlog`: A single model instance of the newest blog post.
    2. `$otherBlogs`: A paginated collection of the remaining blog posts.
--}}

<x-layout>
    <div class="bg-[--color-bg-dark] text-[--color-text-primary] font-sans">
        <div class="container mx-auto px-4 py-16 sm:px-6 lg:px-8">

            <!-- Page Header -->
            <header class="text-center mb-12 animate-[--animation-fade-in-up]">
                <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                    {{ __('blog.header.title') }}
                </h1>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-[--color-text-secondary]">
                    {{ __('blog.header.subtitle') }}
                </p>
            </header>

            <!-- Main Content: Check if at least one blog exists -->
            @if ($latestBlog)
                <div x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 50)">
                    <!-- Latest Blog (Featured) -->
                    {{-- This section now correctly displays the single latest post on ALL pages --}}
                    <section class="mb-16" x-show="shown" x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0">
                        <a href="{{ route('blog.show', $latestBlog->slug) }}" class="group block">
                            <div class="relative grid grid-cols-1 lg:grid-cols-2 gap-8 items-center bg-[--color-bg-card] border border-[--color-glass-border] rounded-2xl p-8 overflow-hidden group-hover:-translate-y-2 transition-transform duration-300">
                                <!-- Glowing Background Effect -->
                                <div class="absolute top-1/2 left-1/2 w-96 h-96 bg-[--color-primary-indigo]/20 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 animate-[--animation-pulse] opacity-50 group-hover:opacity-75 transition-opacity"></div>
                                
                                <!-- Image -->
                                <div class="relative z-10 order-1 lg:order-2 h-80 rounded-lg overflow-hidden">
                                    {{-- <img src="{{ asset('storage/' . $latestBlog->image_path) }}" alt="{{ $latestBlog->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"> --}}
                                     <img src="{{ asset('blog1.jpg') }}" alt="{{ $latestBlog->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                </div>
                                
                                <!-- Content -->
                                <div class="relative z-10 order-2 lg:order-1">
                                    <p class="text-sm font-semibold text-[--color-primary-light] mb-2">{{ __('blog.labels.latest_post') }}</p>
                                    <h2 class="text-3xl font-bold mb-4 line-clamp-2">
                                        {{ $latestBlog->title }}
                                    </h2>
                                    <p class="text-[--color-text-secondary] mb-6 line-clamp-3">
                                        {{ Str::limit(strip_tags($latestBlog->content), 150) }}
                                    </p>
                                    <div class="flex items-center text-sm text-[--color-text-secondary]">
                                        <span>{{ $latestBlog->author }}</span>
                                        <span class="mx-2">&bull;</span>
                                        <span>{{ $latestBlog->minutes_to_read }} {{ __('blog.labels.min_read') }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </section>
                </div>

                <!-- Other Blog Posts Grid -->
                {{-- This section now iterates over the paginated `$otherBlogs` collection --}}
                @if ($otherBlogs->isNotEmpty())
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($otherBlogs as $index => $blog)
                            <div x-data="{ shown: false }" x-init="setTimeout(() => shown = true, {{ ($index + 1) * 200 }})">
                                <a href="{{ route('blog.show', $blog->slug) }}" class="group block h-full" x-show="shown" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100">
                                    <article class="flex flex-col h-full bg-[--color-bg-card]  rounded-xl overflow-hidden group-hover:shadow-2xl group-hover:shadow-[--color-primary-indigo]/20 transition-all duration-300 group-hover:-translate-y-1">
                                        <!-- Image -->  
                                        <div class="h-48 overflow-hidden">
                                            <img src="{{ asset('blog1.jpg') }}" alt="Random Image" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                            {{-- <img src="{{ asset('storage/' . $blog->image_path) }}" alt="{{ $blog->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"> --}}
                                        </div>
                                        
                                        <!-- Card Content -->
                                        <div class="p-6 flex flex-col flex-grow">
                                            <h3 class="text-xl font-bold mb-3 line-clamp-2">
                                                {{ $blog->title }}
                                            </h3>
                                            <p class="text-[--color-text-secondary] mb-4 flex-grow line-clamp-3">
                                                {{ Str::limit(strip_tags($blog->content), 100) }}
                                            </p>
                                            <div class="flex items-center text-sm text-[--color-text-secondary] mt-auto pt-4 border-t border-[--color-glass-border]">
                                                <span>{{ $blog->author }}</span>
                                                <span class="mx-2">&bull;</span>
                                                <span>{{ $blog->minutes_to_read }} {{ __('blog.labels.min_read') }}</span>
                                                <span class="ms-auto text-[--color-primary-light] font-semibold group-hover:underline">
                                                    {{ __('blog.actions.read_more') }} &rarr;
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination Links for the other blogs -->
                    <div class="mt-16">
                        {{ $otherBlogs->links() }}
                    </div>
                @endif
            @else
                <!-- No Blogs Message -->
                <div class="text-center py-20 animate-[--animation-fade-in-up]">
                    <div class="inline-block bg-[--color-bg-card] border border-[--color-glass-border] rounded-2xl p-8 sm:p-12">
                        <svg class="mx-auto h-16 w-16 text-[--color-text-secondary]" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <h2 class="mt-6 text-2xl font-bold text-[--color-text-primary]">
                            {{ __('blog.empty.title') }}
                        </h2>
                        <p class="mt-2 text-base text-[--color-text-secondary]">
                            {{ __('blog.empty.message') }}
                        </p>
                    </div>
                </div>
            @endif

        </div>
    </div>
</x-layout>