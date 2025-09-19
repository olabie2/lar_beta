<x-layout>
    <div class="bg-[--color-bg-dark] text-white font-sans antialiased">
        
        <!-- Hero Section -->
        <div class="relative isolate overflow-hidden py-24 sm:py-32">
            <!-- Background Gradient Effect -->
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[--color-primary-indigo] to-[--color-accent-pink] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>

            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-4xl">
                    <!-- Back Link -->
                    <div class="mb-8">
                        <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-x-2 text-sm font-semibold text-[--color-text-secondary] hover:text-[--color-text-primary] group transition-colors duration-300">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform duration-300 group-hover:-translate-x-1 rtl:group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                            </svg>
                            <span>{{ __('blog.show.back_to_blogs') }}</span>
                        </a>
                    </div>

                    <!-- Blog Header -->
                    <div class="text-left">
                        <h1 class="text-3xl font-bold tracking-tight text-[--color-text-primary] sm:text-5xl">
                            {{ $blog->title }}
                        </h1>
                        <div class="mt-6 flex flex-col sm:flex-row sm:flex-wrap sm:gap-x-6 gap-y-2">
                            <p class="flex items-center text-sm text-[--color-text-secondary]">
                                <svg class="me-1.5 h-5 w-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                {{ __('blog.show.by') }} {{ $blog->author }}
                            </p>
                            <p class="flex items-center text-sm text-[--color-text-secondary]">
                                <svg class="me-1.5 h-5 w-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                {{ $blog->created_at->format('M d, Y') }}
                            </p>
                            <p class="flex items-center text-sm text-[--color-text-secondary]">
                                <svg class="me-1.5 h-5 w-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                {{ $blog->minutes_to_read }} {{ __('blog.labels.min_read') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Section -->
        <div class="mx-auto max-w-7xl px-6 pb-16 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-4xl">
                 <!-- Featured Image -->
                @if($blog->image_path)
                <div class="mb-12 rounded-2xl overflow-hidden aspect-video shadow-2xl shadow-black/30">
                    {{-- <img src="{{ asset('storage/' . $blog->image_path) }}" alt="{{ $blog->title }}" class="w-full h-full object-cover"> --}}
                    <img src="{{ asset('blog1.jpg') }}" alt="{{ $blog->title }}" class="w-full h-full object-cover">
                </div>
                @endif
                
                <!-- Blog Content -->
                <div class="prose prose-invert prose-lg max-w-none 
                            prose-headings:text-[--color-text-primary] 
                            prose-p:text-[--color-text-secondary]
                            prose-a:text-[--color-primary-light] prose-a:transition-colors hover:prose-a:text-white
                            prose-strong:text-[--color-text-primary]
                            prose-blockquote:border-s-[--color-primary-indigo] prose-blockquote:text-white/70
                            prose-li:text-[--color-text-secondary]">
                    {!! $blog->content !!}
                </div>
            </div>
        </div>
    </div>
</x-layout>