<footer class="bg-light-gray py-12 font-main">
    <div class="container mx-auto px-4 ">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-7xl mx-auto ">
            <!-- Logo and Slogan Section -->
            <div class="flex flex-col items-center md:items-start">
                <img src="{{ asset('images/opti-route-logo.png') }}" alt="OptiRoute Logo" class="h-24 w-auto mb-4">
                <p class="text-dark-text opacity-80 text-sm font-light">Optimizing Your Journey, Every Mile Counts</p>
                {{-- <div class="flex space-x-4 mt-6">
                    <a href="#" class="text-primary-blue hover:text-accent-blue transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>
                    <a href="#" class="text-primary-blue hover:text-accent-blue transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                    </a>
                    <a href="#" class="text-primary-blue hover:text-accent-blue transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                </div> --}}
            </div>

            <!-- Company Links -->
            <div class="text-center md:text-left">
                <h3 class="text-base font-secondary font-medium mb-6 text-dark-text">Company</h3>
                <ul class="space-y-3">
                    <li><a href="#"
                            class="text-dark-text opacity-70 hover:text-primary-blue transition duration-300 text-sm">About
                            Us</a></li>
                    <li><a href="#how-it-works"
                            class="text-dark-text opacity-70 hover:text-primary-blue transition duration-300 text-sm">Our
                            Services</a></li>
                    <li><a href="#"
                            class="text-dark-text opacity-70 hover:text-primary-blue transition duration-300 text-sm">Pricing
                            <span
                                class="ml-1 bg-primary-blue text-white text-xs px-2 py-0.5 rounded-full font-medium">Contact
                                Us</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="text-center md:text-left">
                <h3 class="text-base font-secondary font-medium mb-6 text-dark-text">Contact Us</h3>
                <div class="space-y-4">
                    <p class="flex items-center justify-center md:justify-start text-sm text-dark-text opacity-70">
                        <svg class="w-5 h-5 mr-3 text-primary-blue" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:info@optiroute.com"
                            class="hover:text-primary-blue transition duration-300">info@optiroute.com</a>
                    </p>
                    <p class="flex items-center justify-center md:justify-start text-sm text-dark-text opacity-70">
                        <svg class="w-5 h-5 mr-3 text-primary-blue" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="tel:+1234567890" class="hover:text-primary-blue transition duration-300">+1 (234)
                            567-890</a>
                    </p>
                    <p class="flex items-center justify-center md:justify-start text-sm text-dark-text opacity-70">
                        <svg class="w-5 h-5 mr-3 text-primary-blue" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>123 Tech Street, San Francisco, CA</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Copyright and Links -->
        <div class="border-t border-gray-300 mt-10 pt-8 flex justify-center items-center">
            <p class="text-xs text-center text-dark-text opacity-60 mb-4 md:mb-0">
                © {{ date('Y') }} OptiRoute. All rights reserved.
            </p>
            {{-- <div class="flex space-x-6">
                <a href="#"
                    class="text-xs text-dark-text opacity-60 hover:text-primary-blue transition duration-300">Privacy
                    Policy</a>
                <a href="#"
                    class="text-xs text-dark-text opacity-60 hover:text-primary-blue transition duration-300">Terms of
                    Service</a>
                <a href="#"
                    class="text-xs text-dark-text opacity-60 hover:text-primary-blue transition duration-300">Cookie
                    Policy</a>
            </div> --}}
        </div>
    </div>
</footer>
