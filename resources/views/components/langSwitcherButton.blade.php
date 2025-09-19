@props([
    'languages' => LaravelLocalization::getSupportedLocales(),
    'currentLanguage' => LaravelLocalization::getCurrentLocale(),
])

<div class="relative group z-50">
    {{-- --- RESPONSIVE BUTTON --- --}}
    <button
        class="flex items-center justify-between rounded-lg 
              bg-[#ffffff1a]
               text-[var(--color-text-primary)] shadow-sm border border-transparent
               px-3 py-2 min-w-[70px] 
               md:px-4 md:py-3 md:min-w-[140px] 
               hover:bg-[linear-gradient(135deg,var(--color-primary-dark),var(--color-accent-purple))] 
               transition-all duration-200"
    >
        <div class="flex items-center space-x-2">
            {{-- Icon --}}
            @svg('gmdi-translate', 'w-5 h-5 text-[var(--color-text-primary)] hidden md:block')

            {{-- Full Label --}}
            <span class="font-medium text-sm hidden md:block">
                {{ $languages[$currentLanguage]['native'] ?? 'Select' }}
            </span>

            {{-- Short Code --}}
            <span class="font-medium text-sm md:hidden">
                {{ strtoupper($currentLanguage) ?? 'Lang' }}
            </span>
        </div>

        <x-heroicon-o-chevron-down class="w-4 h-4 text-[var(--color-text-primary)] group-hover:rotate-180 transition-transform duration-200 ml-2" />
    </button>

    {{-- --- RESPONSIVE DROPDOWN --- --}}
    <div
        class="absolute right-0 top-full pt-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 translate-y-1 pointer-events-none group-hover:pointer-events-auto transition-all duration-200 ease-out
               w-32 md:w-44"
    >
        <div class="bg-[var(--color-bg-dark)] border border-[var(--color-glass-border)] rounded-xl shadow-lg">
            <div class="py-2">
                @foreach($languages as $localeCode => $properties)
                    <div>
                        <a
                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                            class="flex items-center px-4 py-2 text-sm transition-colors duration-150 
                                   {{ $currentLanguage === $localeCode 
                                       ? 'bg-[var(--color-primary-light)] text-[var(--color-text-primary)] font-medium' 
                                       : 'text-[var(--color-text-secondary)] hover:bg-[var(--color-primary-light)] hover:text-[var(--color-text-primary)]' }}"
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
