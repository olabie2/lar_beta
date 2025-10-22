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
                    Datenschutzerklärung
                </h1>
                <p class="mt-6 text-xl sm:text-2xl text-gray-400 animate-[fade-in-up_1s_ease-out_0.3s_both]">
                    Last Updated: {{ now()->format('F j, Y') }}
                </p>
            </div>
        </div>

        <!-- Privacy Policy Content Section -->
        <section class="py-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                {{-- The content is placed in a styled container for readability --}}
                <div class="bg-gray-800/50 border border-gray-700 rounded-2xl p-8 md:p-12 shadow-lg prose prose-invert prose-lg max-w-none 
                            prose-headings:text-white prose-headings:font-bold prose-a:text-primary-light hover:prose-a:text-accent-purple prose-strong:text-gray-100">
                    
                    <h2>1. Einleitung</h2>
                    <p>
                        Willkommen bei [Name Ihres Unternehmens]. Wir verpflichten uns, Ihre personenbezogenen Daten und Ihr Recht auf Privatsphäre zu schützen. Wenn Sie Fragen oder Bedenken zu dieser Datenschutzerklärung oder unseren Praktiken in Bezug auf Ihre personenbezogenen Daten haben, kontaktieren Sie uns bitte unter [Ihre Kontakt-E-Mail].
                    </p>
                    <p>
                        Diese Datenschutzerklärung beschreibt, wie wir Ihre Informationen verwenden können, wenn Sie unsere Website unter [Ihre Website-URL] besuchen, unsere mobile Anwendung nutzen oder auf andere Weise mit uns in Kontakt treten.
                    </p>

                    <h2>2. Welche Informationen sammeln wir?</h2>
                    <p>
                        <strong>Personenbezogene Daten, die Sie uns zur Verfügung stellen:</strong> Wir erfassen personenbezogene Daten, die Sie uns freiwillig zur Verfügung stellen, wenn Sie sich für ein Konto registrieren, Interesse an Informationen über uns oder unsere Produkte und Dienstleistungen bekunden oder uns anderweitig kontaktieren. Die von uns erfassten personenbezogenen Daten können Folgendes umfassen: Name, E-Mail-Adresse, Telefonnummer und Zahlungsinformationen.
                    </p>
                    <p>
                        <strong>Automatisch erfasste Informationen:</strong> Wir erfassen automatisch bestimmte Informationen, wenn Sie die Website besuchen, nutzen oder auf ihr navigieren. Diese Informationen geben nicht Ihre spezifische Identität preis, können aber Geräte- und Nutzungsinformationen wie Ihre IP-Adresse, Browser- und Geräteeigenschaften, Betriebssystem, Spracheinstellungen, verweisende URLs und andere technische Informationen enthalten.
                    </p>

                    <h2>3. Wie verwenden wir Ihre Informationen?</h2>
                    <p>
                        Wir verwenden die über unsere Website erfassten personenbezogenen Daten für eine Vielzahl von Geschäftszwecken, die im Folgenden beschrieben werden. Wir verarbeiten Ihre personenbezogenen Daten für diese Zwecke im Vertrauen auf unsere legitimen Geschäftsinteressen, um einen Vertrag mit Ihnen zu schließen oder zu erfüllen, mit Ihrer Zustimmung und/oder zur Einhaltung unserer gesetzlichen Verpflichtungen. Diese Zwecke umfassen:
                    </p>
                    <ul>
                        <li>Zur Erleichterung der Kontoerstellung und des Anmeldevorgangs.</li>
                        <li>Zur Veröffentlichung von Testimonials mit Ihrer Zustimmung.</li>
                        <li>Zur Verwaltung von Benutzerkonten und deren Instandhaltung.</li>
                        <li>Um Ihnen administrative Informationen zuzusenden.</li>
                        <li>Zum Schutz unserer Dienste vor Betrug und Missbrauch.</li>
                    </ul>

                    <h2>4. Werden Ihre Informationen an Dritte weitergegeben?</h2>
                    <p>
                        Wir geben Informationen nur mit Ihrer Zustimmung weiter, um Gesetze einzuhalten, Ihnen Dienstleistungen zu erbringen, Ihre Rechte zu schützen oder geschäftliche Verpflichtungen zu erfüllen. Wir können Ihre Daten an Drittanbieter, Dienstleister, Auftragnehmer oder Vertreter weitergeben, die Dienstleistungen für uns oder in unserem Namen erbringen und Zugang zu diesen Informationen benötigen, um diese Arbeit zu erledigen.
                    </p>
                    
                    <h2>5. Wie schützen wir Ihre Informationen?</h2>
                    <p>
                        Wir haben angemessene technische und organisatorische Sicherheitsmaßnahmen getroffen, um die Sicherheit der von uns verarbeiteten personenbezogenen Daten zu gewährleisten. Trotz unserer Sicherheitsvorkehrungen und Bemühungen, Ihre Informationen zu schützen, kann jedoch keine elektronische Übertragung über das Internet oder keine Informationsspeichertechnologie zu 100 % sicher sein.
                    </p>

                    <h2>6. Was sind Ihre Datenschutzrechte?</h2>
                    <p>
                        In einigen Regionen (wie dem Europäischen Wirtschaftsraum) haben Sie gemäß den geltenden Datenschutzgesetzen bestimmte Rechte. Dazu können das Recht gehören, (i) Zugang zu Ihren personenbezogenen Daten zu verlangen und eine Kopie davon zu erhalten, (ii) eine Berichtigung oder Löschung zu verlangen; (iii) die Verarbeitung Ihrer personenbezogenen Daten einzuschränken; und (iv) gegebenenfalls auf Datenübertragbarkeit.
                    </p>

                    <h2>7. Aktualisierungen dieser Erklärung</h2>
                    <p>
                        Wir können diese Datenschutzerklärung von Zeit zu Zeit aktualisieren. Die aktualisierte Version wird durch ein überarbeitetes "Zuletzt aktualisiert"-Datum angezeigt und die aktualisierte Version wird wirksam, sobald sie zugänglich ist. Wir empfehlen Ihnen, diese Datenschutzerklärung regelmäßig zu überprüfen, um darüber informiert zu sein, wie wir Ihre Informationen schützen.
                    </p>
                    
                    <h2>8. Wie können Sie uns bezüglich dieser Erklärung kontaktieren?</h2>
                    <p>
                        Wenn Sie Fragen oder Anmerkungen zu dieser Erklärung haben, können Sie uns eine E-Mail an [Ihre Kontakt-E-Mail] senden oder per Post an:
                    </p>
                    <p>
                        [Name Ihres Unternehmens]<br>
                        [Ihre Firmenadresse Zeile 1]<br>
                        [Ihre Firmenadresse Zeile 2]<br>
                        [Stadt, Postleitzahl]
                    </p>

                </div>
            </div>
        </section>
    </div>
</x-layout>
