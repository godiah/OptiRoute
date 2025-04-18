<!-- navbar.blade.php -->
<nav class="bg-white shadow-md fixed w-full top-0 z-50 font-main">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                    <img class="h-12 md:h-16 w-auto" src="{{ asset('images/opti-route-logo.png') }}" alt="OptiRoute Logo">
                    {{-- <span class="ml-3 font-secondary font-bold text-xl text-dark-text hidden sm:block">OptiRoute</span> --}}
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex md:items-center md:space-x-8">
                <x-navbar-nav-links href="#home" :active="request()->is('/')">
                    Home
                </x-navbar-nav-links>
                <x-navbar-nav-links href="#how-it-works" :active="request()->is('how-it-works')">
                    How It Works
                </x-navbar-nav-links>
                <x-navbar-nav-links href="#benefits" :active="request()->is('benefits')">
                    Benefits
                </x-navbar-nav-links>

                <a href="#demo"
                    class="bg-gradient-to-r from-primary-blue to-secondary-green shadow-lg hover:shadow-xl hover:from-primary-blue/90 hover:to-secondary-green/90 hover:-translate-y-1 text-white px-5 py-2.5 rounded-md text-sm font-medium transition-colors duration-200 flex items-center ml-4">
                    <span>Book a Demo</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-dark-text hover:text-primary-blue hover:bg-light-gray transition-colors duration-200 focus:outline-none"
                    onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="hidden md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-4 space-y-2 bg-white border-t border-gray-100">
            <a href="#home"
                class="block text-dark-text hover:text-primary-blue hover:bg-light-gray px-3 py-2.5 rounded-md text-base font-medium transition-colors duration-200">
                Home
            </a>
            <a href="#how-it-works"
                class="block text-dark-text hover:text-primary-blue hover:bg-light-gray px-3 py-2.5 rounded-md text-base font-medium transition-colors duration-200">
                How It Works
            </a>
            <a href="#benefits"
                class="block text-dark-text hover:text-primary-blue hover:bg-light-gray px-3 py-2.5 rounded-md text-base font-medium transition-colors duration-200">
                Benefits
            </a>

            <a href="#demo"
                class="block flex  text-white px-4 py-2.5 rounded-md text-base font-medium  transition-colors duration-200 mt-4 items-center justify-center
                bg-gradient-to-r from-primary-blue to-secondary-green shadow-lg hover:shadow-xl">
                <span>Book a Demo</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all nav links
        const navLinks = document.querySelectorAll('.nav-link');

        // Get all sections that correspond to nav links
        const sections = [];
        navLinks.forEach(link => {
            // Get the section ID from the href attribute (removing the # symbol)
            const sectionId = link.getAttribute('href').substring(1);
            const section = document.getElementById(sectionId);
            if (section) {
                sections.push(section);
            }
        });

        // Function to set active link based on hash
        const setActiveByHash = () => {
            const currentHash = window.location.hash || '#home';
            // Remove active class from all links
            navLinks.forEach(link => {
                link.classList.remove('active');
                link.classList.add('text-dark-text', 'hover:text-primary-blue');
                link.classList.remove('text-primary-blue');
            });

            // Add active class to current link
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentHash) {
                    link.classList.add('active', 'text-primary-blue');
                    link.classList.remove('text-dark-text', 'hover:text-primary-blue');
                }
            });
        };

        // Function to set active link based on scroll position
        const setActiveByScroll = () => {
            let currentSection = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;

                // Check if we've scrolled to this section (with a small offset to trigger earlier)
                if (window.scrollY >= (sectionTop - 100)) {
                    currentSection = section.getAttribute('id');
                }
            });

            if (currentSection !== '') {
                // Remove active class from all links
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    link.classList.add('text-dark-text', 'hover:text-primary-blue');
                    link.classList.remove('text-primary-blue');

                    // Add active class to current section's link
                    if (link.getAttribute('href') === `#${currentSection}`) {
                        link.classList.add('active', 'text-primary-blue');
                        link.classList.remove('text-dark-text', 'hover:text-primary-blue');
                    }
                });
            }
        };

        // Set active link on page load
        setActiveByHash();

        // Set active link when hash changes (when clicking nav links)
        window.addEventListener('hashchange', setActiveByHash);

        // Set active link when scrolling
        window.addEventListener('scroll', setActiveByScroll);
    });
</script>
