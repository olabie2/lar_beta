@props([
    'languages' => LaravelLocalization::getSupportedLocales(),
    'currentLanguage' => LaravelLocalization::getCurrentLocale(),
])

{{-- 
    This component uses Alpine.js for interactivity.
    - `x-data="{ open: false }"`: Initializes the component's state. `open` tracks the dropdown's visibility.
    - On desktop: We use `@mouseenter` and `@mouseleave` on the main div to control the hover behavior.
    - On mobile: We use `@click="open = !open"` on the button to toggle the dropdown on tap.
--}}
<div x-data="{ open: false }" @mouseleave="open = false" class="relative z-50">
    
    {{-- --- RESPONSIVE BUTTON --- --}}
    <button
        type="button"
        @click="open = !open"
        @mouseenter="open = true"
        class="flex items-center justify-between w-full rounded-lg bg-[#ffffff1a] text-[var(--color-text-primary)] shadow-sm border border-transparent px-3 py-2 min-w-[70px] md:px-4 md:py-3 md:min-w-[140px] hover:bg-[linear-gradient(135deg,var(--color-primary-dark),var(--color-accent-purple))] transition-all duration-200"
        aria-haspopup="true"
        :aria-expanded="open"
    >
        <span class="flex items-center space-x-2">
            {{-- Translate Icon (inline SVG, no dependencies) --}}
            <svg class="w-5 h-5 text-[var(--color-text-primary)] hidden md:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M0 0h24v24H0z" fill="none"/><path d="M12.87 15.07l-2.54-2.51.03-.03c1.74-1.94 2.98-4.17 3.71-6.53H17V4h-7V2H8v2H1v1.99h11.17C11.5 7.92 10.44 9.75 9 11.35 8.07 10.32 7.3 9.19 6.69 8h-2c.73 1.63 1.73 3.17 2.98 4.56l-5.09 5.02L4.86 19l5.09-5.02.03.03 5.02 5.02L17 17.14l-5.02-5.03.03-.03z"/></svg>

            {{-- Full Language Name (Desktop) --}}
            <span class="font-medium text-sm hidden md:block">
                {{ $languages[$currentLanguage]['native'] ?? 'Select' }}
            </span>

            {{-- Short Language Code (Mobile) --}}
            <span class="font-medium text-sm md:hidden">
                {{ strtoupper($currentLanguage) ?? 'Lang' }}
            </span>
        </span>

        {{-- Chevron Icon (inline SVG, no dependencies) --}}
        <svg class="w-4 h-4 text-[var(--color-text-primary)] transition-transform duration-200 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" :class="{ 'rotate-180': open }">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        </svg>
    </button>

    {{-- --- RESPONSIVE DROPDOWN --- --}}
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-1"
        class="absolute right-0 top-full pt-1 w-32 md:w-44"
        style="display: none;"
        @click.away="open = false"
    >
        <div class="bg-[var(--color-bg-dark)] border border-[var(--color-glass-border)] rounded-xl shadow-lg">
            <div class="py-2" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                @foreach($languages as $localeCode => $properties)
                    <div>
                        <a
                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                            class="flex items-center px-4 py-2 text-sm transition-colors duration-150 {{ $currentLanguage === $localeCode ? 'bg-[var(--color-primary-light)] text-[var(--color-text-primary)] font-medium' : 'text-[var(--color-text-secondary)] hover:bg-[var(--color-primary-light)] hover:text-[var(--color-text-primary)]' }}"
                            role="menuitem"
                        >
                            <span class="flex-1 md:hidden">{{ strtoupper($localeCode) }}</span>
                            <span class="flex-1 hidden md:inline">{{ $properties['native'] }}</span>

                            @if($currentLanguage === $localeCode)
                                <div class="w-2 h-2 bg-[var(--color-primary-indigo)] rounded-full ml-2"></div>
                            @endif
                        </a>
                        @if(!$loop->last)
                            <div class="mx-2 border-t border-[rgba(255,255,255,0.1)]"></div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>