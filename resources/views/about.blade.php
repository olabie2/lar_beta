<x-layout>
<div class="bg-gray-900 text-white font-sans antialiased">

    <!-- Hero Section -->
    <div class="relative isolate overflow-hidden pt-24 sm:pt-32">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <p class="text-lg font-semibold leading-8 text-indigo-400">{{ __('about-us.header_subtitle') }}</p>
                <h1 class="mt-2 text-4xl font-bold tracking-tight text-white sm:text-6xl">{{ __('about-us.header_title') }}</h1>
                <p class="mt-6 text-lg leading-8 text-gray-300">{{ __('about-us.header_description') }}</p>
            </div>
        </div>
    </div>

    <!-- Our Mission & Vision Section -->
    <div class="mx-auto my-24 max-w-7xl px-6 sm:my-32 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
            <div class="grid grid-cols-1 gap-x-8 gap-y-16 lg:grid-cols-2">
                <div class="lg:pr-8">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">{{ __('about-us.mission_title') }}</h2>
                    <p class="mt-4 text-lg leading-8 text-gray-300">{{ __('about-us.mission_text') }}</p>
                </div>
                <div class="lg:border-l lg:border-indigo-500 lg:pl-8">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">{{ __('about-us.vision_title') }}</h2>
                    <p class="mt-4 text-lg leading-8 text-gray-300">{{ __('about-us.vision_text') }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Values Section -->
    <div class="bg-gray-800/50 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-indigo-400">{{ __('about-us.values_title') }}</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">{{__('about-us.principles_title')}}</p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                    <div class="flex flex-col">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-white">
                            <svg class="h-5 w-5 flex-none text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                            {{ __('about-us.value_innovation_title') }}
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-300">
                            <p class="flex-auto">{{ __('about-us.value_innovation_text') }}</p>
                        </dd>
                    </div>
                    <div class="flex flex-col">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-white">
                             <svg class="h-5 w-5 flex-none text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            {{ __('about-us.value_integrity_title') }}
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-300">
                            <p class="flex-auto">{{ __('about-us.value_integrity_text') }}</p>
                        </dd>
                    </div>
                    <div class="flex flex-col">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-white">
                            <svg class="h-5 w-5 flex-none text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            {{ __('about-us.value_collaboration_title') }}
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-300">
                            <p class="flex-auto">{{ __('about-us.value_collaboration_text') }}</p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <!-- Partner Marquee Section -->
    <div class="py-12 sm:py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-lg font-semibold leading-8 text-indigo-400">{{__('about-us.marquee_title')}}</h2>
            </div>
            <div
                x-data
                x-init="
                    $nextTick(() => {
                        let content = $refs.content;
                        let item = $refs.item;
                        const clone = item.cloneNode(true);
                        content.appendChild(clone);
                    });
                "
                class="relative w-full overflow-hidden mt-12"
            >
                <div class="absolute left-0 z-10 w-24 h-full bg-gradient-to-r from-gray-900 to-transparent"></div>
                <div class="absolute right-0 z-10 w-24 h-full bg-gradient-to-l from-gray-900 to-transparent"></div>
                <div x-ref="content" class="flex animate-marquee">
                    <div x-ref="item" class="flex items-center justify-around flex-shrink-0 min-w-full space-x-20">
                        <!-- Replace these with your actual partner logos -->
                        <img class="h-8 w-auto object-contain" src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft">
                        <img class="h-8 w-auto object-contain" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google">
                        <img class="h-8 w-auto object-contain" src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon">
                        <img class="h-8 w-auto object-contain" src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Meta-Logo.svg" alt="Meta">
                        <img class="h-8 w-auto object-contain" src="https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg" alt="Netflix">
                        <img class="h-8 w-auto object-contain" src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="Spotify">
                        <img class="h-8 w-auto object-contain" src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Team Section -->
    <div class="mx-auto my-24 max-w-7xl px-6 sm:my-32 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">{{ __('about-us.team_title') }}</h2>
            <p class="mt-6 text-lg leading-8 text-gray-300">{{ __('about-us.team_description') }}</p>
        </div>
        <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-4">
            <li>
                <img class="aspect-[3/4] w-full rounded-2xl object-cover" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?q=80&w=2564&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-white">{{ __('about-us.team_member_1_name') }}</h3>
                <p class="text-base leading-7 text-indigo-400">{{ __('about-us.team_member_1_title') }}</p>
                <p class="text-sm leading-6 text-gray-400">{{ __('about-us.team_member_1_bio') }}</p>
            </li>
            <li>
                <img class="aspect-[3/4] w-full rounded-2xl object-cover" src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=2574&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-white">{{ __('about-us.team_member_2_name') }}</h3>
                <p class="text-base leading-7 text-indigo-400">{{ __('about-us.team_member_2_title') }}</p>
                 <p class="text-sm leading-6 text-gray-400">{{ __('about-us.team_member_2_bio') }}</p>
            </li>
            <li>
                <img class="aspect-[3/4] w-full rounded-2xl object-cover" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-white">{{ __('about-us.team_member_3_name') }}</h3>
                <p class="text-base leading-7 text-indigo-400">{{ __('about-us.team_member_3_title') }}</p>
                 <p class="text-sm leading-6 text-gray-400">{{ __('about-us.team_member_3_bio') }}</p>
            </li>
            <li>
                <img class="aspect-[3/4] w-full rounded-2xl object-cover" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=2574&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-white">{{ __('about-us.team_member_4_name') }}</h3>
                <p class="text-base leading-7 text-indigo-400">{{ __('about-us.team_member_4_title') }}</p>
                <p class="text-sm leading-6 text-gray-400">{{ __('about-us.team_member_4_bio') }}</p>
            </li>
        </ul>
    </div>

    <!-- Join Us Section -->
    <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
        <div class="relative isolate overflow-hidden bg-gray-800 px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
            <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl">
                {{ __('about-us.careers_title') }}
            </h2>
            <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">
                {{ __('about-us.careers_text') }}
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="/careers" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    {{ __('about-us.careers_button', ['default' => 'See Open Positions']) }}
                </a>
                <a href="/contact" class="text-sm font-semibold leading-6 text-white">{{__('about-us.get_in_touch')}} <span aria-hidden="true">→</span></a>
            </div>
            <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
                <circle cx="512" cy="512" r="512" fill="url(#8d958450-c69f-4251-94bc-4e091a323369)" fill-opacity="0.7" />
                <defs>
                    <radialGradient id="8d958450-c69f-4251-94bc-4e091a323369">
                        <stop stop-color="#7775D6" />
                        <stop offset="1" stop-color="#E935C1" />
                    </radialGradient>
                </defs>
            </svg>
        </div>
    </div>

</div>

<style>
    @keyframes marquee {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
    }
    .animate-marquee {
        animation: marquee 40s linear infinite;
    }
    .animate-marquee img {
        filter: grayscale(100%);
        transition: filter 0.3s ease-in-out;
    }
    .animate-marquee img:hover {
        filter: grayscale(0%);
    }
</style>
</x-layout>