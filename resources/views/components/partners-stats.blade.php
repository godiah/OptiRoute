<div class="bg-white py-10 md:py-16 font-main">
    <!-- Partners Carousel Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-4 md:mb-8">
            <div class="flex items-center w-full mb-2">
                <h2
                    class="text-3xl text-center mx-auto md:text-4xl font-bold font-secondary md:whitespace-nowrap drop-shadow-lg md:pr-4">
                    Trusted <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-secondary-green">Partners</span>
                </h2>
                <hr class="hidden md:block w-full border-gray-300">
            </div>
            <p class="text-gray-500 text-center md:text-start">Powering logistics operations for industry leaders
                worldwide</p>
        </div>

        <div class="w-full flex justify-center">
            <div
                class="w-xl text-center inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-200px),transparent_100%)]">

                <ul
                    class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
                    @foreach (['amazon', 'dhl', 'ikea', 'walmart'] as $partner)
                        <li class="flex-shrink-0">
                            <img src="{{ asset('images/' . $partner . '.png') }}" alt="{{ ucfirst($partner) }} logo"
                                class="h-8 md:h-12 w-auto hover:scale-110 transition-all duration-300">
                        </li>
                    @endforeach
                </ul>
                <ul class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll"
                    aria-hidden="true">
                    @foreach (['amazon', 'dhl', 'ikea', 'walmart'] as $partner)
                        <li class="flex-shrink-0">
                            <img src="{{ asset('images/' . $partner . '.png') }}" alt="{{ ucfirst($partner) }} logo"
                                class="h-8 md:h-12 w-auto hover:scale-110 transition-all duration-300">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Cards Section -->
<section class="pb-16 bg-light-gray font-main">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="pt-16 mb-4 md:mb-8">
            <div class="flex items-center w-full mb-2">
                <h2
                    class="text-3xl text-center mx-auto md:text-4xl font-bold font-secondary md:whitespace-nowrap drop-shadow-lg md:pr-4">
                    Making an <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-secondary-green">Impact</span>
                </h2>
                <hr class="hidden md:block w-full border-gray-300">
            </div>
            <p class="text-gray-500 text-center md:text-start">Transforming logistics operations with AI-powered
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
