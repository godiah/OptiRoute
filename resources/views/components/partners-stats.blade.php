<div class="bg-white py-16 font-main">
    <!-- Partners Carousel Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-4 md:mb-8">
            <div class="flex items-center w-full mb-2">
                <h2 class="text-4xl font-bold font-secondary whitespace-nowrap drop-shadow-lg pr-4">Trusted <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-secondary-green">Partners</span>
                </h2>
                <hr class="w-full border-gray-300">
            </div>
            <p class="text-gray-500">Powering logistics operations for industry leaders worldwide</p>
        </div>
        <div class="relative overflow-hidden p-8">
            {{-- Gradient overlays for smooth fade effect --}}
            <div class="absolute left-0 top-0 h-full w-12 bg-gradient-to-r from-gray-50 to-transparent z-10"></div>
            <div class="absolute right-0 top-0 h-full w-12 bg-gradient-to-l from-gray-50 to-transparent z-10"></div>

            {{-- Logo slider wrapper --}}
            <div class="overflow-hidden w-full">
                {{-- Logo slider track --}}
                <div class="logos-slide-track flex">
                    {{-- First set of logos --}}
                    @foreach (['amazon', 'dhl', 'ikea', 'walmart'] as $partner)
                        <div class="logo-item flex-shrink-0 mx-6 md:mx-8 flex items-center justify-center">
                            <img src="{{ asset('images/' . $partner . '.png') }}" alt="{{ ucfirst($partner) }} logo"
                                class="h-8 md:h-12 w-auto hover:scale-110 transition-all duration-300">
                        </div>
                    @endforeach

                    {{-- Second set (duplicate) --}}
                    @foreach (['amazon', 'dhl', 'ikea', 'walmart'] as $partner)
                        <div class="logo-item flex-shrink-0 mx-6 md:mx-8 flex items-center justify-center">
                            <img src="{{ asset('images/' . $partner . '.png') }}" alt="{{ ucfirst($partner) }} logo"
                                class="h-8 md:h-12 w-auto hover:scale-110 transition-all duration-300">
                        </div>
                    @endforeach

                    {{-- Third set (duplicate) --}}
                    @foreach (['amazon', 'dhl', 'ikea', 'walmart'] as $partner)
                        <div class="logo-item flex-shrink-0 mx-6 md:mx-8 flex items-center justify-center">
                            <img src="{{ asset('images/' . $partner . '.png') }}" alt="{{ ucfirst($partner) }} logo"
                                class="h-8 md:h-12 w-auto hover:scale-110 transition-all duration-300">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Cards Section -->
<section class="pb-16 bg-light-gray font-main">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="pt-16 mb-4 md:mb-8">
            <div class="flex items-center w-full mb-2">
                <h2 class="text-4xl font-bold font-secondary whitespace-nowrap drop-shadow-lg pr-4">Making an <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-secondary-green">Impact</span>
                </h2>
                <hr class="w-full border-gray-300">
            </div>
            <p class="text-gray-500">Transforming logistics operations with AI-powered
                optimization</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Stat Card 1 -->
            <div
                class="bg-gradient-to-br from-white to-blue-50 rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:scale-105 relative overflow-hidden">
                <div class="absolute -right-6 -top-6 w-24 h-24 rounded-full bg-primary-blue opacity-10"></div>
                <div class="relative z-10">
                    <div
                        class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-primary-blue bg-opacity-10 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 class="text-4xl font-bold font-secondary mb-1">5,000+</h3>
                    <p class="text-sm text-gray-500 uppercase font-semibold tracking-wider">Active Users</p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <p class="text-xs text-gray-500 flex items-center">
                            <span class="inline-block w-2 h-2 rounded-full bg-primary-blue mr-2"></span>
                            20% growth this quarter
                        </p>
                    </div>
                </div>
            </div>

            <!-- Stat Card 2 -->
            <div
                class="bg-gradient-to-br from-white to-green-50 rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:scale-105 relative overflow-hidden">
                <div class="absolute -right-6 -top-6 w-24 h-24 rounded-full bg-secondary-green opacity-10"></div>
                <div class="relative z-10">
                    <div
                        class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-secondary-green bg-opacity-10 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                        </svg>
                    </div>
                    <h3 class="text-4xl font-bold font-secondary mb-1">12M+</h3>
                    <p class="text-sm text-gray-500 uppercase font-semibold tracking-wider">Deliveries Optimized</p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <p class="text-xs text-gray-500 flex items-center">
                            <span class="inline-block w-2 h-2 rounded-full bg-secondary-green mr-2"></span>
                            1.2M deliveries this month
                        </p>
                    </div>
                </div>
            </div>

            <!-- Stat Card 3 -->
            <div
                class="bg-gradient-to-br from-white to-blue-50 rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:scale-105 relative overflow-hidden">
                <div class="absolute -right-6 -top-6 w-24 h-24 rounded-full bg-accent-blue opacity-10"></div>
                <div class="relative z-10">
                    <div
                        class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-accent-blue bg-opacity-10 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-4xl font-bold font-secondary mb-1">-42%</h3>
                    <p class="text-sm text-gray-500 uppercase font-semibold tracking-wider">Carbon Emissions</p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <p class="text-xs text-gray-500 flex items-center">
                            <span class="inline-block w-2 h-2 rounded-full bg-accent-blue mr-2"></span>
                            3.2M tons CO2 saved yearly
                        </p>
                    </div>
                </div>
            </div>

            <!-- Stat Card 4 -->
            <div
                class="bg-gradient-to-br from-white to-gray-50 rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:scale-105 relative overflow-hidden">
                <div class="absolute -right-6 -top-6 w-24 h-24 rounded-full bg-dark-text opacity-5"></div>
                <div class="relative z-10">
                    <div
                        class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-dark-text bg-opacity-10 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <h3 class="text-4xl font-bold font-secondary mb-1">$24M</h3>
                    <p class="text-sm text-gray-500 uppercase font-semibold tracking-wider">Customer Savings</p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <p class="text-xs text-gray-500 flex items-center">
                            <span class="inline-block w-2 h-2 rounded-full bg-dark-text mr-2"></span>
                            Average 18% cost reduction
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(calc(-1 * (var(--logo-width) * 4)));
            /* Move by the width of one set of logos */
        }
    }

    .logos-slide-track {
        --logo-width: 160px;
        /* Approximate width of each logo item including margins */
        animation: scroll 20s linear infinite;
        width: calc(var(--logo-width) * 12);
        /* Total width: 3 sets of 4 logos */
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .logos-slide-track {
            --logo-width: 130px;
            /* Smaller on mobile */
        }
    }

    /* Pause on hover */
    .logos-slide-track:hover {
        animation-play-state: paused;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Calculate actual logo width for more precise animation
        const calculateLogoSetWidth = () => {
            const logoItems = document.querySelectorAll('.logo-item');
            if (logoItems.length === 0) return;

            // Get the width of the first set of logos (first 4 items)
            let totalWidth = 0;
            const logoCount = 4; // Number of unique logos

            for (let i = 0; i < logoCount; i++) {
                if (logoItems[i]) {
                    // Get the actual width including margins
                    const style = window.getComputedStyle(logoItems[i]);
                    const width = logoItems[i].offsetWidth;
                    const marginLeft = parseFloat(style.marginLeft);
                    const marginRight = parseFloat(style.marginRight);
                    totalWidth += width + marginLeft + marginRight;
                }
            }

            // Update the CSS variable
            const track = document.querySelector('.logos-slide-track');
            if (track && totalWidth > 0) {
                // Set the item width
                document.documentElement.style.setProperty('--logo-width', (totalWidth / logoCount) + 'px');

                // Also update animation duration based on screen size for better visuals
                const duration = window.innerWidth < 768 ? 15 : 20;
                track.style.animationDuration = `${duration}s`;
            }
        };

        // Calculate on load and resize
        calculateLogoSetWidth();
        window.addEventListener('resize', calculateLogoSetWidth);

        // Intersection Observer for performance
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const track = entry.target;
                if (entry.isIntersecting) {
                    track.style.animationPlayState = 'running';
                } else {
                    track.style.animationPlayState = 'paused';
                }
            });
        }, {
            threshold: 0.1
        });

        const logoTrack = document.querySelector('.logos-slide-track');
        if (logoTrack) {
            observer.observe(logoTrack);
        }
    });
</script>
