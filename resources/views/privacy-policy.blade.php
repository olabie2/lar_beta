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
                    Privacy Policy
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
                    
                    <h2>1. Introduction</h2>
                    <p>
                        Welcome to [Your Company Name]. We are committed to protecting your personal information and your right to privacy. If you have any questions or concerns about this privacy notice, or our practices with regards to your personal information, please contact us at [Your Contact Email].
                    </p>
                    <p>
                        This privacy notice describes how we might use your information if you visit our website at [Your Website URL], use our mobile application, or engage with us in other related ways.
                    </p>

                    <h2>2. What Information Do We Collect?</h2>
                    <p>
                        <strong>Personal Information You Disclose to Us:</strong> We collect personal information that you voluntarily provide to us when you register for an account, express an interest in obtaining information about us or our products and services, or otherwise when you contact us. The personal information we collect may include the following: Name, Email Address, Phone Number, and Payment Information.
                    </p>
                    <p>
                        <strong>Information Automatically Collected:</strong> We automatically collect certain information when you visit, use, or navigate the website. This information does not reveal your specific identity but may include device and usage information, such as your IP address, browser and device characteristics, operating system, language preferences, referring URLs, and other technical information.
                    </p>

                    <h2>3. How Do We Use Your Information?</h2>
                    <p>
                        We use personal information collected via our website for a variety of business purposes described below. We process your personal information for these purposes in reliance on our legitimate business interests, in order to enter into or perform a contract with you, with your consent, and/or for compliance with our legal obligations. These purposes include:
                    </p>
                    <ul>
                        <li>To facilitate account creation and logon process.</li>
                        <li>To post testimonials with your consent.</li>
                        <li>To manage user accounts and keep them in working order.</li>
                        <li>To send administrative information to you.</li>
                        <li>To protect our Services from fraud and abuse.</li>
                    </ul>

                    <h2>4. Will Your Information Be Shared With Anyone?</h2>
                    <p>
                        We only share information with your consent, to comply with laws, to provide you with services, to protect your rights, or to fulfill business obligations. We may share your data with third-party vendors, service providers, contractors, or agents who perform services for us or on our behalf and require access to such information to do that work.
                    </p>
                    
                    <h2>5. How Do We Keep Your Information Safe?</h2>
                    <p>
                        We have implemented appropriate technical and organizational security measures designed to protect the security of any personal information we process. However, despite our safeguards and efforts to secure your information, no electronic transmission over the Internet or information storage technology can be guaranteed to be 100% secure.
                    </p>

                    <h2>6. What Are Your Privacy Rights?</h2>
                    <p>
                        In some regions (like the European Economic Area), you have certain rights under applicable data protection laws. These may include the right (i) to request access and obtain a copy of your personal information, (ii) to request rectification or erasure; (iii) to restrict the processing of your personal information; and (iv) if applicable, to data portability.
                    </p>

                    <h2>7. Updates to This Notice</h2>
                    <p>
                        We may update this privacy notice from time to time. The updated version will be indicated by a revised "Last Updated" date and the updated version will be effective as soon as it is accessible. We encourage you to review this privacy notice frequently to be informed of how we are protecting your information.
                    </p>
                    
                    <h2>8. How Can You Contact Us About This Notice?</h2>
                    <p>
                        If you have questions or comments about this notice, you may email us at [Your Contact Email] or by post to:
                    </p>
                    <p>
                        [Your Company Name]<br>
                        [Your Company Address Line 1]<br>
                        [Your Company Address Line 2]<br>
                        [City, Postal Code]
                    </p>

                </div>
            </div>
        </section>
    </div>
</x-layout>