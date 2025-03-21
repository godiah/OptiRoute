<section id="how-it-works" class="bg-white py-20 overflow-hidden font-main">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Decorative background elements -->
        <div class="absolute top-1/4 left-0 w-40 h-40 rounded-full bg-primary-blue opacity-5 -translate-x-1/2"></div>
        <div class="absolute top-1/12 right-0 w-24 h-24 rounded-full bg-secondary-green opacity-5 -translate-y-1/4">
        </div>
        <div
            class="absolute bottom-0 right-0 w-64 h-64 rounded-full bg-secondary-green opacity-5 translate-x-1/3 translate-y-1/4">
        </div>

        <!-- Section Heading -->
        <div class="mb-4 md:mb-8 relative">
            <div class="flex items-center w-full mb-2">
                <h2 class="text-4xl font-bold font-secondary whitespace-nowrap drop-shadow-lg pr-4">How <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-secondary-green">OptiRoute</span>
                    Works</h2>
                <hr class="w-full border-gray-300">
            </div>
            <p class="text-gray-500">Streamline your logistics operations with our intelligent route optimization system
            </p>
        </div>

        <!-- Process Flow -->
        <div class="mt-12 relative">
            <!-- Decorative background elements -->
            <div class="absolute top-1/4 right-1/4 w-64 h-64 rounded-full bg-primary-blue opacity-5"></div>
            <div class="absolute bottom-1/4 left-1/4 w-48 h-48 rounded-full bg-secondary-green opacity-5"></div>

            <!-- Connecting lines between steps (visible only on desktop) -->
            <div
                class="hidden lg:block absolute top-1/2 left-0 w-full h-1 bg-gradient-to-r from-primary-blue via-accent-blue to-secondary-green opacity-20 transform -translate-y-1/2 z-0">
            </div>

            <!-- Process Steps -->
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 relative z-10">
                <!-- Step 1 -->
                <div
                    class="flex flex-col bg-light-gray rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <!-- Step number -->
                    <div
                        class="absolute top-6 right-6 h-12 w-12 rounded-full bg-gradient-to-br from-primary-blue to-accent-blue text-white flex items-center justify-center font-bold text-xl shadow-md">
                        1</div>

                    <!-- Card content -->
                    <div class="flex-1 p-8 pt-12">
                        <div class="relative">
                            <!-- Decorative pattern background -->
                            <div class="absolute inset-0 bg-primary-blue opacity-5 rounded-xl"
                                style="background-image: radial-gradient(circle at 10px 10px, rgba(37, 99, 235, 0.2) 3px, transparent 0); background-size: 20px 20px;">
                            </div>

                            <div class="flex items-center justify-center relative mx-auto w-36 h-36 lg:w-48 lg:h-48">
                                <img src="{{ asset('images/undraw_order.svg') }}" alt="map"
                                    class="relative z-10 w-32 h-32 lg:w-44 lg:h-44" />
                            </div>
                        </div>

                        <div class="mt-2 md:mt-4">
                            <h3 class="text-xl font-medium text-dark-text text-center font-secondary">Input Orders &
                                Resources</h3>
                            <p class="mt-2 text-gray-500 text-center">
                                Enter your delivery orders and specify available vehicles with their capacities into our
                                intuitive platform.
                            </p>
                        </div>
                    </div>

                    <!-- Bottom accent bar with animation -->
                    <div class="h-2 bg-gradient-to-r from-primary-blue to-accent-blue relative overflow-hidden mt-auto">
                        <div class="absolute inset-0 bg-white opacity-30"
                            style="animation: shimmer 2s infinite; transform: translateX(-100%)"></div>
                    </div>

                    <style>
                        @keyframes shimmer {
                            100% {
                                transform: translateX(100%);
                            }
                        }
                    </style>
                </div>

                <!-- Step 2 -->
                <div
                    class="flex flex-col bg-light-gray rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <!-- Step number -->
                    <div
                        class="absolute top-6 right-6 h-12 w-12 rounded-full bg-gradient-to-br from-primary-blue via-accent-blue to-secondary-green text-white flex items-center justify-center font-bold text-xl shadow-md">
                        2</div>

                    <!-- Card content -->
                    <div class="flex-1 p-8 pt-12">
                        <div class="relative">
                            <!-- Decorative pattern background -->
                            <div class="absolute inset-0 bg-accent-blue opacity-5 rounded-xl"
                                style="background-image: radial-gradient(circle at 10px 10px, rgba(0, 123, 255, 0.2) 3px, transparent 0); background-size: 20px 20px;">
                            </div>

                            <div class="flex items-center justify-center w-36 h-36 lg:w-48 lg:h-48 relative mx-auto">
                                <img src="{{ asset('images/undraw_ai.svg') }}" alt="ai"
                                    class="relative z-10 w-32 h-32 lg:w-44 lg:h-44" />
                            </div>
                        </div>

                        <div class="mt-2 md:mt-4">
                            <h3 class="text-xl font-medium text-dark-text text-center font-secondary">AI-Powered
                                Optimization</h3>
                            <p class="mt-2 text-gray-500 text-center">
                                Our machine learning algorithms process the data to generate the most efficient routes
                                considering real-time traffic and constraints.
                            </p>
                        </div>
                    </div>

                    <!-- Bottom accent bar with animation -->
                    <div
                        class="h-2 bg-gradient-to-r from-primary-blue via-accent-blue to-secondary-green relative overflow-hidden mt-auto">
                        <div class="absolute inset-0 bg-white opacity-30"
                            style="animation: shimmer 2s infinite; transform: translateX(-100%)"></div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div
                    class="flex flex-col bg-light-gray rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <!-- Step number -->
                    <div
                        class="absolute top-6 right-6 h-12 w-12 rounded-full bg-gradient-to-br from-accent-blue to-secondary-green text-white flex items-center justify-center font-bold text-xl shadow-md">
                        3</div>

                    <!-- Card content -->
                    <div class="flex-1 p-8 pt-12">
                        <div class="relative">
                            <!-- Decorative pattern background -->
                            <div class="absolute inset-0 bg-secondary-green opacity-5 rounded-xl"
                                style="background-image: radial-gradient(circle at 10px 10px, rgba(16, 185, 129, 0.2) 3px, transparent 0); background-size: 20px 20px;">
                            </div>

                            <div class="flex items-center justify-center relative mx-auto w-36 h-36 lg:w-48 lg:h-48">
                                <img src="{{ asset('images/undraw_routes.svg') }}" alt="map"
                                    class="relative z-10 w-32 h-32 lg:w-44 lg:h-44" />
                            </div>
                        </div>

                        <div class="mt-2 md:mt-4">
                            <h3 class="text-xl font-medium text-dark-text text-center font-secondary">Route Management
                            </h3>
                            <p class="mt-2 text-gray-500 text-center">
                                View, manage and share optimized routes with drivers through seamless Google Maps
                                integration.
                            </p>
                        </div>
                    </div>

                    <!-- Bottom accent bar with animation -->
                    <div
                        class="h-2 bg-gradient-to-r from-accent-blue to-secondary-green relative overflow-hidden mt-auto">
                        <div class="absolute inset-0 bg-white opacity-30"
                            style="animation: shimmer 2s infinite; transform: translateX(-100%)"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detailed System Flow Diagram -->
        <div class="container mx-auto px-4 mt-24 mb-12">
            <div class="flex flex-col lg:flex-row items-start gap-16">
                <!-- Title section -->
                <div class="w-full lg:w-1/3 text-center lg:text-left">
                    <h3 class="text-4xl font-bold font-secondary whitespace-nowrap drop-shadow-lg">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-secondary-green">Logistics</span>
                        Process Overview
                    </h3>
                    <p class="mt-4 text-gray-600 text-justify">Our comprehensive system integrates seamlessly with your
                        existing workflows, providing immediate visibility and control over your entire delivery network
                        while reducing operational costs.
                    </p>
                    <x-book-demo-btn />
                </div>

                <!-- Flow diagram - larger width on desktop -->
                <div class="w-full flex items-center justify-center lg:w-2/3 mt-8 lg:mt-0">
                    <img src="{{ asset('images/flow-diag-1.png') }}" alt="OptiRoute System Flow Diagram"
                        class="w-full h-auto object-contain">
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="mt-2">
            <div class="relative mt-16 mb-12 pt-8 px-8 pb-8 border-2 border-gray-200 rounded-2xl">
                <!-- Title on the border -->
                <div class="absolute -top-4 left-8 px-4 bg-white">
                    <h2 class="text-3xl font-bold font-secondary whitespace-nowrap drop-shadow-lg pr-4">Advanced <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-secondary-green">Optimization</span>
                        Tools</h2>
                </div>

                <!-- Cluster group 1 - connected with lines -->
                {{-- <div class="absolute top-1/4 left-1/3">
                    <!-- Cluster nodes -->
                    <div class="absolute w-6 h-6 rounded-full bg-primary-blue opacity-15"></div>
                    <div
                        class="absolute w-4 h-4 rounded-full bg-secondary-green opacity-15 translate-x-12 translate-y-8">
                    </div>
                    <div class="absolute w-5 h-5 rounded-full bg-primary-blue opacity-15 translate-x-20 translate-y-4">
                    </div>
                    <div
                        class="absolute w-3 h-3 rounded-full bg-secondary-green opacity-15 translate-x-8 translate-y-16">
                    </div>

                    <!-- Connector lines -->
                    <div class="absolute h-px w-12 bg-gray-300 opacity-20 rotate-45 translate-x-3 translate-y-3"></div>
                    <div class="absolute h-px w-10 bg-gray-300 opacity-20 rotate-12 translate-x-12 translate-y-8"></div>
                    <div class="absolute h-px w-14 bg-gray-300 opacity-20 rotate-90 translate-x-8 translate-y-8"></div>
                </div> --}}

                <!-- Decorative Elements -->
                <div class="absolute bottom-1/5 right-1/5">
                    <!-- Cluster nodes -->
                    <div class="absolute w-5 h-5 rounded-full bg-secondary-green opacity-15"></div>
                    <div class="absolute w-7 h-7 rounded-full bg-primary-blue opacity-15 -translate-x-14 translate-y-6">
                    </div>
                    <div
                        class="absolute w-4 h-4 rounded-full bg-secondary-green opacity-15 -translate-x-6 translate-y-12">
                    </div>
                    <div
                        class="absolute w-3 h-3 rounded-full bg-primary-blue opacity-15 -translate-x-18 translate-y-16">
                    </div>

                    <!-- Connector lines -->
                    <div class="absolute h-px w-14 bg-gray-300 opacity-20 -rotate-30 -translate-x-7 translate-y-3">
                    </div>
                    <div class="absolute h-px w-8 bg-gray-300 opacity-20 rotate-60 -translate-x-10 translate-y-9"></div>
                    <div class="absolute h-px w-6 bg-gray-300 opacity-20 rotate-30 -translate-x-12 translate-y-14">
                    </div>
                </div>

                <div class="absolute top-1/12 left-1">
                    <!-- Cluster nodes -->
                    <div class="absolute w-5 h-5 rounded-full bg-secondary-green opacity-15"></div>
                    <div
                        class="absolute w-4 h-4 rounded-full bg-secondary-green opacity-15 -translate-x-9 translate-y-5">
                    </div>
                    <div
                        class="absolute w-7 h-7 rounded-full bg-primary-blue opacity-15 -translate-x-14 -translate-y-6">
                    </div>
                    <div
                        class="absolute w-3 h-3 rounded-full bg-primary-blue opacity-15 -translate-x-16 translate-y-14">
                    </div>


                    <!-- Connector lines -->
                    <div class="absolute h-px w-14 bg-gray-300 opacity-20 -rotate-30 -translate-x-7 translate-y-3">
                    </div>
                    <div class="absolute h-px w-8 bg-gray-300 opacity-20 rotate-60 -translate-x-10 translate-y-9"></div>
                    <div class="absolute h-px w-6 bg-gray-300 opacity-20 rotate-30 -translate-x-12 translate-y-14">
                    </div>
                </div>

                {{-- <!-- Floating dots pattern - resembling data points -->
                <div class="absolute inset-0">
                    <div class="absolute w-2 h-2 rounded-full bg-primary-blue opacity-20 top-1/5 left-2/5"></div>
                    <div class="absolute w-1 h-1 rounded-full bg-secondary-green opacity-20 top-2/5 left-3/5"></div>
                    <div class="absolute w-2 h-2 rounded-full bg-primary-blue opacity-20 top-3/5 left-1/5"></div>
                    <div class="absolute w-1 h-1 rounded-full bg-secondary-green opacity-20 top-1/5 left-4/5"></div>
                    <div class="absolute w-2 h-2 rounded-full bg-primary-blue opacity-20 top-4/5 left-3/5"></div>
                    <div class="absolute w-1 h-1 rounded-full bg-secondary-green opacity-20 top-3/5 left-2/5"></div>
                </div> --}}

                <!-- Features grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div
                        class="flex flex-col items-center text-center p-6 rounded-xl bg-light-gray shadow-sm transition-all duration-300 hover:shadow-md">
                        <div
                            class="flex items-center justify-center h-16 w-16 rounded-xl bg-secondary-green text-white mb-4">
                            <img src="{{ asset('images/optimize.png') }}" alt="Optimization">
                        </div>
                        <h4 class="text-lg font-medium text-dark-text font-secondary">Real-time Optimization</h4>
                        <p class="mt-2 text-gray-500">
                            Routes optimized in real-time with traffic data
                        </p>
                    </div>

                    <div
                        class="flex flex-col items-center text-center p-6 rounded-xl bg-light-gray  shadow-sm transition-all duration-300 hover:shadow-md">
                        <div
                            class="flex items-center justify-center h-16 w-16 rounded-xl bg-secondary-green text-white mb-4">
                            <img src="{{ asset('images/smartphone-chat.png') }}" alt="Chat">
                        </div>
                        <h4 class="text-lg font-medium text-dark-text font-secondary">Driver Navigation</h4>
                        <p class="mt-2 text-gray-500">
                            Unique route links open directly in Google Maps
                        </p>
                    </div>

                    <div
                        class="flex flex-col items-center text-center p-6 rounded-xl bg-light-gray  shadow-sm transition-all duration-300 hover:shadow-md">
                        <div
                            class="flex items-center justify-center h-16 w-16 rounded-xl bg-secondary-green text-white mb-4">
                            <img src="{{ asset('images/map-pinpoint.png') }}" alt="Routes">
                        </div>
                        <h4 class="text-lg font-medium text-dark-text font-secondary">Batch Management</h4>
                        <p class="mt-2 text-gray-500">
                            Organize and manage routes in batches
                        </p>
                    </div>

                    <div
                        class="flex flex-col items-center text-center p-6 rounded-xl bg-light-gray shadow-sm transition-all duration-300 hover:shadow-md">
                        <div
                            class="flex items-center justify-center h-16 w-16 rounded-xl bg-secondary-green text-white mb-4">
                            <img src="{{ asset('images/ai.png') }}" alt="ML">
                        </div>
                        <h4 class="text-lg font-medium text-dark-text font-secondary">Machine Learning</h4>
                        <p class="mt-2 text-gray-500">
                            Continuously improving route optimization
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
