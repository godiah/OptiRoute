<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OptiRoute - AI-Powered Route Optimization</title>
    <meta name="description" content="Transform your logistics operations with OptiRoute's AI-powered route optimization. Reduce costs by 30% and carbon emissions by 37%.">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Styles / Scripts -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Navigation -->
    <x-navbar />

    <!-- Hero Section -->
    <x-hero />

    <!-- Trusted Partners & Statistics -->
    <x-partners-stats />

    <!-- How It Works Section -->
    <x-how-it-works />

    <!-- Fleet Tracking Section -->
    <x-fleet-tracking />

    <!-- Smart Assignment Section -->
    <x-smart-assignment />

    <!-- Business Intelligence Section -->
    <x-business-intelligence />

    <!-- Benefits -->
    <x-benefits />

    <!-- Book Demo -->
    <x-demo />

    <!-- Footer -->
    <x-footer />

    <!-- Floating Contact Buttons Container -->
    <div class="fixed right-0 top-2/3 -translate-y-1/2 z-50 flex flex-col gap-4">
        <!-- WhatsApp Floating Action Button -->
        <a href="https://wa.me/254768743317" target="_blank" rel="noopener noreferrer"
            class=" bg-secondary-green hover:bg-opacity-90 text-white p-2.5 md:p-4 rounded-tl-full rounded-bl-full shadow-lg transition-all duration-300 focus:outline-none flex items-center justify-center"
            aria-label="Contact us on WhatsApp">
            <!-- WhatsApp Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6 w-6 fill-current">
                <path
                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
            </svg>
        </a>

        <!-- Phone Call Floating Action Button -->
        <a href="tel:+254768743317"
            class="bg-primary-blue hover:bg-accent-blue text-white p-2.5 md:p-4 rounded-tl-full rounded-bl-full shadow-lg transition-all duration-300 focus:outline-none flex items-center justify-center"
            aria-label="Call us">
            <!-- Phone Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
        </a>
    </div>

    <!-- Scroll Back To Top Btn -->
    <button onclick="topFunction()" id="scrollTopBtn"
        class="fixed hidden bottom-6 right-6 z-50 bg-primary-blue hover:bg-accent-blue text-white p-3 rounded-full shadow-lg transition-all duration-300 focus:outline-none"
        aria-label="Scroll to top">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    <script>
        // Get the button
        const scrollTopBtn = document.getElementById("scrollTopBtn");

        // When the user scrolls down 300px from the top, show the button
        window.onscroll = function() {
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                scrollTopBtn.classList.remove("hidden");
                scrollTopBtn.classList.add("flex");
            } else {
                scrollTopBtn.classList.remove("flex");
                scrollTopBtn.classList.add("hidden");
            }
        };

        // Smooth scroll to top when clicked
        function topFunction() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
