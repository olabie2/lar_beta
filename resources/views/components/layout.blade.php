<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'HOPn') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
    
</head>

<body class="bg-bg-dark text-text-primary font-sans antialiased overflow-x-hidden">

    <!-- Animated Background -->
    <div class="bg-animation fixed top-0 start-0 w-full h-full -z-10 bg-gradient-to-br from-bg-dark to-[#1a1a3a]">
        <div class="absolute w-[200%] h-[200%] bg-[radial-gradient(circle_at_25%_25%,_theme(colors.primary-indigo)_0%,_transparent_50%),radial-gradient(circle_at_75%_75%,_theme(colors.accent-purple)_0%,_transparent_50%)] opacity-10 animate-[float_20s_ease-in-out_infinite]"></div>
    </div>

    <div class="relative min-h-screen flex flex-col">
        <!-- Header -->
        <x-layout.header.main />  {{-- THIS IS THE ONLY LINE THAT CHANGES --}}

        <!-- Page Content -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Footer (You can create a x-footer component similarly) -->>
        {{-- <footer class="bg-black/30 border-t border-glass-border text-center p-8 mt-auto">
            <p class="text-text-secondary">&copy; {{ date('Y') }} HOPn. {{ __('messages.footer.rights_reserved') }}</p>
        </footer> --}}
        <x-footer/>
    </div>

    @stack('scripts')
  
</body>
</html>