<x-layout>
<div class="bg-gray-900 text-white font-sans antialiased">

    <!-- Hero Section -->
    <div class="relative isolate overflow-hidden pt-24 pb-16 sm:pt-32 sm:pb-24">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">{{ __('career.hero_title') }}</h1>
                <p class="mt-6 text-lg leading-8 text-gray-300">{{ __('career.hero_subtitle') }}</p>
            </div>
        </div>
    </div>

    <!-- Job Listings Section with Alpine.js -->
    <div 
        class="mx-auto max-w-7xl px-6 pb-24 sm:pb-32 lg:px-8"
        x-data="{ 
            search: '',
            jobs: {{ $jobs->toJson() }},
            currentPage: 1,
            itemsPerPage: 6, 

            // Safely filter jobs, preventing errors from null values
            get filteredJobs() {
                if (this.search.trim() === '') return this.jobs;
                return this.jobs.filter(job => {
                    const title = (job.title || '').toLowerCase();
                    const location = (job.location || '').toLowerCase();
                    const searchTerm = this.search.toLowerCase();
                    return title.includes(searchTerm) || location.includes(searchTerm);
                });
            },

            get paginatedJobs() {
                const start = (this.currentPage - 1) * this.itemsPerPage;
                const end = start + this.itemsPerPage;
                return this.filteredJobs.slice(start, end);
            },

            get totalPages() {
                return Math.ceil(this.filteredJobs.length / this.itemsPerPage);
            },

            nextPage() {
                if (this.currentPage < this.totalPages) this.currentPage++;
            },

            prevPage() {
                if (this.currentPage > 1) this.currentPage--;
            }
        }"
        x-init="$watch('search', () => { currentPage = 1 })"
    >
        <!-- Live Search Input -->
        <div class="mb-8 max-w-xl mx-auto">
             <input 
                type="search" 
                name="search" 
                id="search"
                x-model.debounce.300ms="search"
                class="block w-full rounded-md border-0 bg-white/5 py-3 pl-10 pr-3 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" 
                placeholder="{{ __('career.search_placeholder') }}">
        </div>

        <!-- Job List -->
        <div class="overflow-hidden bg-gray-800/50 shadow-sm ring-1 ring-white/10 sm:rounded-lg">
            <div class="divide-y divide-white/10">
                
                <template x-for="job in paginatedJobs" :key="job.id">
                     <div class="grid grid-cols-1 md:grid-cols-3 gap-x-6 p-6 group hover:bg-white/5 transition-colors duration-200">
                        <div class="md-col-span-2">
                            <a :href="`/careers/${job.id}`" class="block">
                                <h3 class="text-base font-semibold leading-6 text-white group-hover:text-indigo-400" x-text="job.title"></h3>
                                <p class="mt-1 text-sm text-gray-400">
                                    {{ __('career.posted_on') }} <span x-text="new Date(job.created_at).toLocaleDateString('{{ str_replace('_', '-', app()->getLocale()) }}', { year: 'numeric', month: 'long', day: 'numeric' })"></span>
                                </p>
                            </a>
                        </div>
                        <div class="mt-2 md:mt-0 flex items-center gap-1">
                            <p class="text-sm leading-5 text-gray-300" x-text="job.location"></p>
                            @svg('fas-location-dot', 'size-4')
                        </div>
                    </div>
                </template>

                <!-- No Results Message -->
                <template x-if="filteredJobs.length === 0">
                    <div class="p-12 text-center">
                        <h3 class="text-lg font-medium text-white">{{ __('career.no_results_title') }}</h3>
                        <p class="mt-2 text-sm text-gray-400" x-html="'{{ __('career.no_results_text') }}'.replace(':search', `<span class='font-semibold'>${search}</span>`)"></p>
                    </div>
                </template>

            </div>

            <!-- Frontend Pagination Controls -->
            <div x-show="totalPages > 1" class="border-t border-white/10 px-4 py-5 sm:px-6">
                 <nav class="flex items-center justify-between" aria-label="Pagination">
                    <div class="flex flex-1 justify-between sm:justify-end items-center gap-x-4">
                        <p class="text-sm text-gray-300" x-html="'{{ __('career.page_text') }}'
                            .replace(':current', `<span class='font-medium'>${currentPage}</span>`)
                            .replace(':total', `<span class='font-medium'>${totalPages}</span>`)">
                        </p>
                        <button 
                            @click="prevPage"
                            :disabled="currentPage === 1"
                            class="relative inline-flex items-center rounded-md bg-gray-800 px-3 py-2 text-sm font-semibold text-white ring-1 ring-inset ring-white/10 hover:bg-gray-700 disabled:opacity-50 disabled:cursor-not-allowed">
                            {{ __('career.previous_button') }}
                        </button>
                        <button
                            @click="nextPage"
                            :disabled="currentPage >= totalPages"
                            class="relative inline-flex items-center rounded-md bg-gray-800 px-3 py-2 text-sm font-semibold text-white ring-1 ring-inset ring-white/10 hover:bg-gray-700 disabled:opacity-50 disabled:cursor-not-allowed">
                            {{ __('career.next_button') }}
                        </button>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
</x-layout>