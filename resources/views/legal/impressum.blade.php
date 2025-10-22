<x-layout>
    {{-- Link to the correct stylesheet based on the application's locale --}}
    @if (app()->getLocale() == 'ar')
        <link href="{{ asset('css/rtl.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('css/ltr.css') }}" rel="stylesheet">
    @endif

    {{-- Main container with a dark background --}}
    <div class="relative min-h-[calc(100vh-80px)] bg-gray-900 text-gray-200">
        
        <!-- Header Section -->
        <div class="flex items-center justify-center min-h-[40vh] p-4 sm:p-6 lg:p-8 bg-gray-900">
            <div class="max-w-4xl text-center">
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight animate-glow bg-gradient-to-r from-primary-light via-accent-purple to-accent-pink bg-clip-text text-transparent">
                    Impressum
                </h1>
                <p class="mt-6 text-xl sm:text-2xl text-gray-400 animate-[fade-in-up_1s_ease-out_0.3s_both]">
                    Angaben gemäß § 5 TMG
                </p>
            </div>
        </div>

        <!-- Impressum Content Section -->
        <section class="py-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                {{-- The content is placed in a styled container for readability --}}
                <div class="bg-gray-800/50 border border-gray-700 rounded-2xl p-8 md:p-12 shadow-lg prose prose-invert prose-lg max-w-none 
                            prose-headings:text-white prose-headings:font-bold prose-a:text-primary-light hover:prose-a:text-accent-purple prose-strong:text-gray-100">
                    
                    <h2>Angaben gemäß § 5 TMG</h2>
                    <p>
                        Max Mustermann <br>
                        Musterstraße 111 <br>
                        Gebäude 4 <br>
                        90210 Musterstadt
                    </p>

                    <h2>Kontakt</h2>
                    <p>
                        Telefon: +49 (0) 123 44 55 66 <br>
                        Telefax: +49 (0) 123 44 55 99 <br>
                        E-Mail: mustermann@muster.de
                    </p>

                    <h2>Umsatzsteuer-ID</h2>
                    <p>
                        Umsatzsteuer-Identifikationsnummer gemäß § 27 a Umsatzsteuergesetz: <br>
                        DE999999999
                    </p>

                    <h2>Redaktionell verantwortlich</h2>
                    <p>
                        Max Mustermann <br>
                        Musterstraße 111 <br>
                        90210 Musterstadt
                    </p>

                    <h2>EU-Streitschlichtung</h2>
                    <p>
                        Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit: <a href="https://ec.europa.eu/consumers/odr/" target="_blank" rel="noopener noreferrer">https://ec.europa.eu/consumers/odr/</a>. <br> Unsere E-Mail-Adresse finden Sie oben im Impressum.
                    </p>

                    <h2>Verbraucher­streit­beilegung/Universal­schlichtungs­stelle</h2>
                    <p>
                        Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.
                    </p>

                </div>
            </div>
        </section>
    </div>
</x-layout>
