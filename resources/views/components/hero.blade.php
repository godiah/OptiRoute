<section id="home" class="relative w-full bg-cover bg-center bg-no-repeat pt-20"
    style="background-image: url('{{ asset('images/hero-image.jpg') }}'); height: calc(75vh + 5rem);">
    <!-- Overlay with gradient + blur effect -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-black/70 backdrop-blur-[2px]"></div>

    <!-- Content Container -->
    <div class="relative h-full flex flex-col items-center justify-center text-center text-white px-4 max-w-5xl mx-auto">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 font-secondary leading-tight">
            <span class="text-white">Smarter Routes,</span>
            <span class="text-secondary-green"> Faster Deliveries</span>
        </h1>

        <p class="text-lg md:text-xl mb-6 max-w-2xl font-main text-white/90">
            Optimize your delivery operations with AI-powered routing solutions
            that save time and reduce costs by up to 30%
        </p>

        <div class="flex flex-row gap-4 mt-2">
            <a href="#demo"
                class="bg-gradient-to-r from-primary-blue to-secondary-green hover:shadow-xl hover:from-primary-blue/90 hover:to-secondary-green/90 hover:-translate-y-1 
                text-white font-medium py-3 px-8 rounded-md transition-all duration-300 shadow-lg flex items-center justify-center">
                <span>Book a Demo</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
            <a href="#how-it-works"
                class="bg-transparent border-2 border-white hover:border-secondary-green hover:text-secondary-green 
                text-white font-medium py-3 px-8 rounded-md transition-all duration-300">
                Learn More
            </a>
        </div>

        <!-- Trust indicators -->
        <div class="mt-8 pt-4 border-t border-white/20 flex flex-wrap justify-center gap-6 text-sm text-white/80">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="font-main">30% Cost Reduction</span>
            </div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="font-main">Used by 500+ Companies</span>
            </div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="font-main">24/7 Support</span>
            </div>
        </div>
    </div>
</section>
