<!-- Industry Focus Section (Replacing Partners) -->
<div class="bg-white py-10 md:py-16 font-main">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="" data-aos="fade-up" data-aos-duration="800">
            <div class="flex items-center w-full mb-2">
                <h2
                    class="text-3xl text-center mx-auto md:text-4xl font-bold font-secondary md:whitespace-nowrap drop-shadow-lg md:pr-4">
                    Target <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-secondary-green">Industries</span>
                </h2>
                <hr class="hidden md:block w-full border-gray-300" data-aos="fade-up" data-aos-delay="200">
            </div>
            <p class="text-gray-500 text-center md:text-start" data-aos="fade-up" data-aos-delay="200">
                Revolutionizing logistics operations across key sectors
            </p>
        </div>

        <div class="w-full flex justify-center py-8">
            <div
                class="w-full max-w-6xl text-center inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-200px),transparent_100%)]">
                <ul class="flex items-center justify-center md:justify-start animate-infinite-scroll mr-6 md:mr-10">
                    @foreach (['retail', 'manufacturing', 'ecommerce', 'healthcare', 'food-delivery'] as $industry)
                        <li class="flex-shrink-0 mx-6 md:mx-10">
                            <div class="flex flex-col items-center">
                                <div class=" bg-opacity-10 p-1 mb-3 hover:scale-110  transition-all duration-300">
                                    <img src="{{ asset('images/industries/' . $industry . '.png') }}"
                                        alt="{{ ucfirst($industry) }}" class="h-12 md:h-16 w-auto p-2">
                                </div>
                                <span
                                    class="font-medium text-secondary-green font-secondary">{{ ucfirst($industry) }}</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <ul class="flex items-center justify-center md:justify-start animate-infinite-scroll ml-6 md:ml-10"
                    aria-hidden="true">
                    @foreach (['retail', 'manufacturing', 'ecommerce', 'healthcare', 'food-delivery'] as $industry)
                        <li class="flex-shrink-0 mx-6 md:mx-10">
                            <div class="flex flex-col items-center">
                                <div class="bg-opacity-10 p-1 mb-3 hover:scale-110 transition-all duration-300">
                                    <img src="{{ asset('images/industries/' . $industry . '.png') }}"
                                        alt="{{ ucfirst($industry) }}" class="h-12 md:h-16 w-auto p-2">
                                </div>
                                <span
                                    class="font-medium text-secondary-green font-secondary">{{ ucfirst($industry) }}</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Industry Stats & Goals (Replacing statistics card section)-->
<section class="pb-16 bg-light-gray font-main">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="pt-16 mb-4 md:mb-8" data-aos="fade-up" data-aos-duration="800">
            <div class="flex items-center w-full mb-2">
                <h2
                    class="text-3xl text-center mx-auto md:text-4xl font-bold font-secondary md:whitespace-nowrap drop-shadow-lg md:pr-4">
                    Industry <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-secondary-green">Insights</span>
                </h2>
                <hr class="hidden md:block w-full border-gray-300" data-aos="fade-up" data-aos-delay="200">
            </div>
            <p class="text-gray-500 text-center md:text-start" data-aos="fade-up" data-aos-delay="200">
                Current challenges and our vision for logistics transformation
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Industry Stat Card 1 -->
            <div class="bg-gradient-to-br from-white to-blue-50 rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:scale-105 relative overflow-hidden"
                data-aos="zoom-in" data-aos-duration="600" data-aos-delay="0">
                <div class="absolute -right-6 -top-6 w-24 h-24 rounded-full bg-primary-blue opacity-10"></div>
                <div class="relative z-10">
                    <div
                        class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-primary-blue bg-opacity-10 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>

                    </div>
                    <h3 class="text-4xl font-bold font-secondary mb-1" data-aos="fade-up" data-aos-delay="100">48%</h3>
                    <p class="text-sm text-gray-500 uppercase font-semibold tracking-wider">Industry Inefficiency Rate
                    </p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <p class="text-xs text-gray-500 flex items-center">
                            <span class="inline-block w-2 h-2 rounded-full bg-primary-blue mr-2"></span>
                            Our target: Reduce by 30%
                        </p>
                    </div>
                </div>
            </div>

            <!-- Industry Stat Card 2 -->
            <div class="bg-gradient-to-br from-white to-green-50 rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:scale-105 relative overflow-hidden"
                data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                <div class="absolute -right-6 -top-6 w-24 h-24 rounded-full bg-secondary-green opacity-10"></div>
                <div class="relative z-10">
                    <div
                        class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-secondary-green bg-opacity-10 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <h3 class="text-4xl font-bold font-secondary mb-1" data-aos="fade-up" data-aos-delay="100">$1M
                    </h3>
                    <p class="text-sm text-gray-500 uppercase font-semibold tracking-wider">Annual Industry Waste</p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <p class="text-xs text-gray-500 flex items-center">
                            <span class="inline-block w-2 h-2 rounded-full bg-secondary-green mr-2"></span>
                            Potential savings with AI
                        </p>
                    </div>
                </div>
            </div>

            <!-- Potential Impact Card 3 -->
            <div class="bg-gradient-to-br from-white to-blue-50 rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:scale-105 relative overflow-hidden"
                data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
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
                    <h3 class="text-4xl font-bold font-secondary mb-1" data-aos="fade-up" data-aos-delay="100">37%
                    </h3>
                    <p class="text-sm text-gray-500 uppercase font-semibold tracking-wider">Carbon Reduction
                    </p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <p class="text-xs text-gray-500 flex items-center">
                            <span class="inline-block w-2 h-2 rounded-full bg-accent-blue mr-2"></span>
                            Through route optimization
                        </p>
                    </div>
                </div>
            </div>

            <!-- Our Goals Card 4 -->
            <div class="bg-gradient-to-br from-white to-gray-50 rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:scale-105 relative overflow-hidden"
                data-aos="zoom-in" data-aos-duration="600" data-aos-delay="450">
                <div class="absolute -right-6 -top-6 w-24 h-24 rounded-full bg-dark-text opacity-5"></div>
                <div class="relative z-10">
                    <div
                        class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-dark-text bg-opacity-10 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 class="text-4xl font-bold font-secondary mb-1" data-aos="fade-up" data-aos-delay="100">2027
                    </h3>
                    <p class="text-sm text-gray-500 uppercase font-semibold tracking-wider">5,000+ Users Goal</p>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <p class="text-xs text-gray-500 flex items-center">
                            <span class="inline-block w-2 h-2 rounded-full bg-dark-text mr-2"></span>
                            Join our growth journey
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners Carousel Section -->
{{-- <div class="bg-white py-10 md:py-16 font-main">
    <!-- Partners Carousel Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-4 md:mb-8" data-aos="fade-up" data-aos-duration="800">
            <div class="flex items-center w-full mb-2">
                <h2
                    class="text-3xl text-center mx-auto md:text-4xl font-bold font-secondary md:whitespace-nowrap drop-shadow-lg md:pr-4">
                    Trusted <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-secondary-green">Partners</span>
                </h2>
                <hr class="hidden md:block w-full border-gray-300" data-aos="fade-up" data-aos-delay="200">
            </div>
            <p class="text-gray-500 text-center md:text-start" data-aos="fade-up" data-aos-delay="200">Powering
                logistics
                operations for industry leaders
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
</div> --}}

<!-- Statistics Cards Section -->
{{-- <section class="pb-16 bg-light-gray font-main">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="pt-16 mb-4 md:mb-8" data-aos="fade-up" data-aos-duration="800">
            <div class="flex items-center w-full mb-2">
                <h2
                    class="text-3xl text-center mx-auto md:text-4xl font-bold font-secondary md:whitespace-nowrap drop-shadow-lg md:pr-4">
                    Making an <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-secondary-green">Impact</span>
                </h2>
                <hr class="hidden md:block w-full border-gray-300" data-aos="fade-up" data-aos-delay="200">
            </div>
            <p class="text-gray-500 text-center md:text-start" data-aos="fade-up" data-aos-delay="200">
                Transforming logistics operations with AI-powered optimization
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Stat Card 1 -->
            <div class="bg-gradient-to-br from-white to-blue-50 rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:scale-105 relative overflow-hidden"
                data-aos="zoom-in" data-aos-duration="600" data-aos-delay="0">
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
                    <h3 class="text-4xl font-bold font-secondary mb-1" data-aos="fade-up" data-aos-delay="100">5,000+
                    </h3>
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
            <div class="bg-gradient-to-br from-white to-green-50 rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:scale-105 relative overflow-hidden"
                data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
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
                    <h3 class="text-4xl font-bold font-secondary mb-1" data-aos="fade-up" data-aos-delay="100">12M+</h3>
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
            <div class="bg-gradient-to-br from-white to-blue-50 rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:scale-105 relative overflow-hidden"
                data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
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
                    <h3 class="text-4xl font-bold font-secondary mb-1" data-aos="fade-up" data-aos-delay="100">-42%
                    </h3>
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
            <div class="bg-gradient-to-br from-white to-gray-50 rounded-xl p-6 shadow-lg transform transition-all duration-300 hover:scale-105 relative overflow-hidden"
                data-aos="zoom-in" data-aos-duration="600" data-aos-delay="450">
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
                    <h3 class="text-4xl font-bold font-secondary mb-1" data-aos="fade-up" data-aos-delay="100">$24M
                    </h3>
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
</section> --}}
