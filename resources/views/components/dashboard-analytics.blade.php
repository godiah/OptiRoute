<div class="rounded-xl overflow-hidden shadow-xl bg-white border border-gray-200">
    <div class="p-6">
        <!-- Dashboard Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h2 class="text-xl font-bold text-dark-text font-secondary">OptiRoute Dashboard</h2>
                <p class="text-sm text-gray-500 mt-1 font-main">Real-time fleet performance insights</p>
            </div>
            <div class="flex items-center space-x-3">
                <div class="relative">
                    <select
                        class="appearance-none bg-light-gray text-dark-text text-sm font-medium px-4 py-2 pr-8 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary-blue/20">
                        <option>Fleet Overview</option>
                        <option>Route Analytics</option>
                        <option>Driver Performance</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="flex bg-light-gray rounded-lg p-1">
                    <button class="bg-primary-blue text-white text-xs font-medium px-3 py-1.5 rounded-md shadow-sm">
                        Day
                    </button>
                    <button class="text-gray-500 hover:text-dark-text text-xs font-medium px-3 py-1.5 rounded-md">
                        Week
                    </button>
                    <button class="text-gray-500 hover:text-dark-text text-xs font-medium px-3 py-1.5 rounded-md">
                        Month
                    </button>
                </div>
            </div>
        </div>

        <!-- KPI Cards Row -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-5 mb-6">
            <!-- KPI Card: Total Deliveries -->
            <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-xs text-gray-500 font-medium mb-1 font-main">Total Deliveries</p>
                        <p class="text-2xl font-bold text-dark-text font-secondary">1,284</p>
                    </div>
                    <div class="bg-secondary-green/10 p-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-green" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                    </div>
                </div>
                <div class="flex items-center mt-3">
                    <div class="flex items-center text-secondary-green text-xs font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        <span>+12.5%</span>
                    </div>
                    <span class="text-xs text-gray-500 ml-2">vs yesterday</span>
                </div>
            </div>

            <!-- KPI Card: Fuel Efficiency -->
            <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-xs text-gray-500 font-medium mb-1 font-main">Fuel Efficiency</p>
                        <p class="text-2xl font-bold text-dark-text font-secondary">24.8 <span
                                class="text-sm font-normal">mpg</span></p>
                    </div>
                    <div class="bg-primary-blue/10 p-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-blue" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                </div>
                <div class="flex items-center mt-3">
                    <div class="flex items-center text-secondary-green text-xs font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        <span>+8.3%</span>
                    </div>
                    <span class="text-xs text-gray-500 ml-2">vs last week</span>
                </div>
            </div>

            <!-- KPI Card: On-Time Rate -->
            <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-xs text-gray-500 font-medium mb-1 font-main">On-Time Rate</p>
                        <p class="text-2xl font-bold text-dark-text font-secondary">94.2<span
                                class="text-sm font-normal">%</span></p>
                    </div>
                    <div class="bg-accent-blue/10 p-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent-blue" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="flex items-center mt-3">
                    <div class="flex items-center text-secondary-green text-xs font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        <span>+2.1%</span>
                    </div>
                    <span class="text-xs text-gray-500 ml-2">vs target</span>
                </div>
            </div>

            <!-- KPI Card: ML Optimization -->
            <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-xs text-gray-500 font-medium mb-1 font-main">Cost Savings</p>
                        <p class="text-2xl font-bold text-dark-text font-secondary">KES 15,842</p>
                    </div>
                    <div class="bg-secondary-green/10 p-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-green" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="flex items-center mt-3">
                    <div class="flex items-center text-secondary-green text-xs font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        <span>+18.7%</span>
                    </div>
                    <span class="text-xs text-gray-500 ml-2">vs last month</span>
                </div>
            </div>
        </div>

        <!-- Main Content Area: Two Column Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Column 1: Map & Tracking (2/3 width) -->
            <div class="lg:col-span-2 flex flex-col gap-6">
                <!-- Map Area -->
                <div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
                    <div class="p-4 border-b border-gray-100">
                        <div class="flex justify-between items-center">
                            <h3 class="text-sm font-bold text-dark-text font-secondary">Live Fleet Tracking</h3>
                            <div class="flex space-x-2">
                                <button class="text-xs text-gray-500 hover:text-primary-blue flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    All Vehicles
                                </button>
                                <button class="text-xs text-primary-blue font-medium flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                    Refresh
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="h-72 bg-light-gray relative">
                        <!-- Map Placeholder -->
                        <div class="absolute inset-0 bg-primary-blue/5 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary-blue/20"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                            </svg>
                        </div>

                        <!-- Map Elements -->
                        <div class="absolute top-1/4 left-1/4 flex flex-col items-center">
                            <div class="h-3 w-3 bg-secondary-green rounded-full ring-4 ring-secondary-green/20"></div>
                            <div
                                class="text-xs bg-white/90 text-dark-text font-medium px-2 py-1 rounded-md shadow-sm mt-1">
                                Van #103
                            </div>
                        </div>

                        <div class="absolute top-1/2 left-1/3 flex flex-col items-center">
                            <div class="h-3 w-3 bg-primary-blue rounded-full ring-4 ring-primary-blue/20"></div>
                            <div
                                class="text-xs bg-white/90 text-dark-text font-medium px-2 py-1 rounded-md shadow-sm mt-1">
                                Truck #087
                            </div>
                        </div>

                        <div class="absolute bottom-1/3 right-1/4 flex flex-col items-center">
                            <div class="h-3 w-3 bg-accent-blue rounded-full ring-4 ring-accent-blue/20"></div>
                            <div
                                class="text-xs bg-white/90 text-dark-text font-medium px-2 py-1 rounded-md shadow-sm mt-1">
                                Van #215
                            </div>
                        </div>

                        <!-- Route Lines -->
                        <svg class="absolute inset-0 w-full h-full" xmlns="http://www.w3.org/2000/svg">
                            <path d="M150,120 C200,140 250,160 300,180" stroke="#2563eb" stroke-width="2"
                                stroke-dasharray="4 2" fill="none" />
                            <path d="M320,240 C350,220 380,200 410,190" stroke="#10b981" stroke-width="2"
                                stroke-dasharray="4 2" fill="none" />
                        </svg>
                    </div>
                    <div class="p-3 bg-light-gray border-t border-gray-100 flex justify-between text-xs text-gray-500">
                        <span>24 vehicles active</span>
                        <span class="text-secondary-green font-medium">89% on optimal routes</span>
                    </div>
                </div>

                <!-- Performance Chart -->
                <div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
                    <div class="p-4 border-b border-gray-100">
                        <div class="flex justify-between items-center">
                            <h3 class="text-sm font-bold text-dark-text font-secondary">Weekly Delivery Performance
                            </h3>
                            <div class="flex space-x-4 text-xs">
                                <span class="flex items-center">
                                    <span class="w-3 h-3 bg-primary-blue rounded-full mr-1.5"></span>
                                    <span class="text-gray-600">On-Time</span>
                                </span>
                                <span class="flex items-center">
                                    <span class="w-3 h-3 bg-accent-blue rounded-full mr-1.5"></span>
                                    <span class="text-gray-600">Delayed</span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="p-4">
                        <div class="h-48 flex items-end space-x-4">
                            <!-- Chart Bars -->
                            <div class="flex-1 flex flex-col items-center">
                                <div class="w-full flex space-x-1">
                                    <div class="w-3/4 bg-primary-blue h-24 rounded-t-md"></div>
                                    <div class="w-1/4 bg-accent-blue h-6 rounded-t-md"></div>
                                </div>
                                <p class="text-xs text-gray-500 mt-2 font-medium">Mon</p>
                            </div>
                            <div class="flex-1 flex flex-col items-center">
                                <div class="w-full flex space-x-1">
                                    <div class="w-3/4 bg-primary-blue h-32 rounded-t-md"></div>
                                    <div class="w-1/4 bg-accent-blue h-5 rounded-t-md"></div>
                                </div>
                                <p class="text-xs text-gray-500 mt-2 font-medium">Tue</p>
                            </div>
                            <div class="flex-1 flex flex-col items-center">
                                <div class="w-full flex space-x-1">
                                    <div class="w-3/4 bg-primary-blue h-28 rounded-t-md"></div>
                                    <div class="w-1/4 bg-accent-blue h-10 rounded-t-md"></div>
                                </div>
                                <p class="text-xs text-gray-500 mt-2 font-medium">Wed</p>
                            </div>
                            <div class="flex-1 flex flex-col items-center">
                                <div class="w-full flex space-x-1">
                                    <div class="w-3/4 bg-primary-blue h-36 rounded-t-md"></div>
                                    <div class="w-1/4 bg-accent-blue h-6 rounded-t-md"></div>
                                </div>
                                <p class="text-xs text-gray-500 mt-2 font-medium">Thu</p>
                            </div>
                            <div class="flex-1 flex flex-col items-center">
                                <div class="w-full flex space-x-1">
                                    <div class="w-3/4 bg-primary-blue h-32 rounded-t-md"></div>
                                    <div class="w-1/4 bg-accent-blue h-12 rounded-t-md"></div>
                                </div>
                                <p class="text-xs text-gray-500 mt-2 font-medium">Fri</p>
                            </div>
                            <div class="flex-1 flex flex-col items-center">
                                <div class="w-full flex space-x-1">
                                    <div class="w-3/4 bg-primary-blue h-20 rounded-t-md"></div>
                                    <div class="w-1/4 bg-accent-blue h-4 rounded-t-md"></div>
                                </div>
                                <p class="text-xs text-gray-500 mt-2 font-medium">Sat</p>
                            </div>
                            <div class="flex-1 flex flex-col items-center">
                                <div class="w-full flex space-x-1">
                                    <div class="w-3/4 bg-primary-blue h-16 rounded-t-md"></div>
                                    <div class="w-1/4 bg-accent-blue h-3 rounded-t-md"></div>
                                </div>
                                <p class="text-xs text-gray-500 mt-2 font-medium">Sun</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 bg-light-gray border-t border-gray-100 flex items-center justify-between text-xs">
                        <span class="text-gray-500">Total Deliveries: 1,284</span>
                        <span class="text-secondary-green font-medium">94.2% on-time delivery rate</span>
                    </div>
                </div>
            </div>

            <!-- Column 2: Analytics & Insights (1/3 width) -->
            <div class="lg:col-span-1 flex flex-col gap-6">
                <!-- ML Optimization Insights -->
                <div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
                    <div class="p-4 border-b border-gray-100">
                        <h3 class="text-sm font-bold text-dark-text font-secondary">ML Optimization Insights</h3>
                    </div>

                    <div class="p-4">
                        <div class="mb-4">
                            <div class="flex justify-between items-center mb-1.5">
                                <p class="text-xs text-gray-600 font-medium">Route Efficiency</p>
                                <p class="text-xs font-bold text-dark-text">92%</p>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
                                <div class="bg-primary-blue h-full rounded-full" style="width: 92%"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="flex justify-between items-center mb-1.5">
                                <p class="text-xs text-gray-600 font-medium">Fuel Optimization</p>
                                <p class="text-xs font-bold text-dark-text">88%</p>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
                                <div class="bg-secondary-green h-full rounded-full" style="width: 88%"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="flex justify-between items-center mb-1.5">
                                <p class="text-xs text-gray-600 font-medium">Driver Efficiency</p>
                                <p class="text-xs font-bold text-dark-text">76%</p>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
                                <div class="bg-accent-blue h-full rounded-full" style="width: 76%"></div>
                            </div>
                        </div>

                        <div class="bg-light-gray rounded-lg p-3 mt-2">
                            <p class="text-xs text-gray-600 mb-2">AI Recommendation:</p>
                            <p class="text-xs text-dark-text leading-relaxed">Based on analysis of 83 routes, consider
                                re-assigning downtown deliveries to smaller vehicles to improve fuel efficiency by 12%
                                and reduce delivery times.</p>
                        </div>
                    </div>

                    <div class="p-3 bg-primary-blue/5 border-t border-gray-100">
                        <button
                            class="w-full text-xs text-primary-blue font-medium py-1.5 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            View Full ML Analysis Report
                        </button>
                    </div>
                </div>

                <!-- Upcoming Deliveries -->
                <div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
                    <div class="p-4 border-b border-gray-100">
                        <h3 class="text-sm font-bold text-dark-text font-secondary">Today's Priority Deliveries</h3>
                    </div>

                    <div class="divide-y divide-gray-100">
                        <!-- Delivery Item 1 -->
                        <div class="p-4 hover:bg-light-gray">
                            <div class="flex items-center justify-between mb-2">
                                <p class="text-sm font-medium text-dark-text">#A-8294</p>
                                <div class="flex items-center">
                                    <span class="inline-block h-2 w-2 rounded-full bg-secondary-green mr-1.5"></span>
                                    <span class="text-xs text-gray-500">En Route</span>
                                </div>
                            </div>
                            <div class="text-xs text-gray-600 mb-2">
                                <span class="font-medium">ETA:</span> 10:45 AM (15 min)
                            </div>
                            <div class="flex justify-between">
                                <span class="text-xs text-gray-500">Tech Central Inc.</span>
                                <span class="text-xs text-primary-blue font-medium cursor-pointer">Track</span>
                            </div>
                        </div>

                        <!-- Delivery Item 2 -->
                        <div class="p-4 hover:bg-light-gray">
                            <div class="flex items-center justify-between mb-2">
                                <p class="text-sm font-medium text-dark-text">#A-8302</p>
                                <div class="flex items-center">
                                    <span class="inline-block h-2 w-2 rounded-full bg-primary-blue mr-1.5"></span>
                                    <span class="text-xs text-gray-500">Loading</span>
                                </div>
                            </div>
                            <div class="text-xs text-gray-600 mb-2">
                                <span class="font-medium">ETA:</span> 11:20 AM (50 min)
                            </div>
                            <div class="flex justify-between">
                                <span class="text-xs text-gray-500">Global Solutions LLC</span>
                                <span class="text-xs text-primary-blue font-medium cursor-pointer">Track</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 bg-light-gray border-t border-gray-100 text-center">
                        <button class="text-xs text-primary-blue font-medium flex items-center justify-center mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                            View All Deliveries
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Area -->
        <div class="mt-6 pt-4 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center mb-4 md:mb-0">
                <button
                    class="bg-white border border-gray-200 rounded-lg px-4 py-2 text-xs font-medium text-dark-text shadow-sm hover:bg-light-gray flex items-center mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Export Report
                </button>
                <button
                    class="bg-white border border-gray-200 rounded-lg px-4 py-2 text-xs font-medium text-dark-text shadow-sm hover:bg-light-gray flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Schedule Report
                </button>
            </div>

            <div class="flex items-center space-x-2 text-xs text-gray-500">
                <span>Last updated: Today at 10:24 AM</span>
                <button class="text-primary-blue hover:text-primary-blue-hover">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
