{{-- <div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-2 z-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="p-4 md:p-2 rounded-lg bg-yellow-100">
            <div class="flex items-center justify-between flex-wrap">
                <div class="max-w-full flex-1 items-center md:w-0 md:inline">
                    <p class="md:ml-3 text-black cookie-consent__message">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
                <div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
                    <button class="js-cookie-consent-agree cookie-consent__agree cursor-pointer flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-yellow-800 bg-yellow-400 hover:bg-yellow-300">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="fixed bottom-0 right-0 p-4 m-4 bg-gray-800 text-white rounded-lg shadow-lg" role="dialog" aria-live="polite" aria-label="Cookie consent">
    <div class="cookie-consent__body">
        <h3 class="text-lg font-semibold">{{ $title }}</h3>
        <p class="mt-2">{{ $text }} <a href="{{ $policyUrl }}" class="underline">{{ $policyLinkText }}</a></p>
    </div>

    <div class="mt-4 flex gap-4">
        <button class="js-cookie-consent-agree px-4 py-2 bg-green-500 rounded hover:bg-green-600">
            {{ $acceptButtonText }}
        </button>
        <button class="js-cookie-consent-refuse px-4 py-2 bg-red-500 rounded hover:bg-red-600">
            {{ $refuseButtonText }}
        </button>
    </div>
</div>