<!-- Benefits Section -->
<section id="benefits" class="bg-light-gray py-12 md:py-20 overflow-hidden font-main">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Heading -->
        <div class="mb-8">
            <div class="flex items-center w-full mb-2">
                <h2
                    class="text-3xl font-bold font-secondary drop-shadow-lg p-0.5 text-center mx-auto md:text-4xl md:whitespace-nowrap md:pr-4">
                    Why
                    <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-secondary-green">OptiRoute
                        ?</span>
                </h2>
                <hr class="hidden md:block w-full border-gray-300">
            </div>
        </div>

        <div class="grid grid-cols-1 gap-8 md:gap-12 md:grid-cols-2">
            <!-- Benefit 1 -->
            <x-benefits-card>
                <x-benefits-card-image src="images/undraw_cost.svg" alt="Reduce Operational Costs" />
                <x-benefits-card-text title="Reduce Operational Costs"
                    description="Save money with routes that use less fuel and reduce vehicle maintenance costs." />
            </x-benefits-card>


            <!-- Benefit 2 -->
            <x-benefits-card :reverse="true">
                <x-benefits-card-image src="images/undraw_delivery.svg" alt="Save Time on Every Delivery" />
                <x-benefits-card-text title="Save Time on Every Delivery"
                    description="Get more done with AI that finds the quickest paths, even with real-time traffic." />
            </x-benefits-card>

            <!-- Benefit 3 -->
            <x-benefits-card>
                <x-benefits-card-image src="images/undraw_aaccuracy.svg" alt="Increase Delivery Accuracy" />
                <x-benefits-card-text title="Increase Delivery Accuracy"
                    description="Deliver on time, every time, with accurate ETAs and driver-friendly routes." />
            </x-benefits-card>

            <!-- Benefit 4 -->
            <x-benefits-card :reverse="true">
                <x-benefits-card-image src="images/undraw_delivery.svg" alt="Simplify Route Planning" />
                <x-benefits-card-text title="Simplify Route Planning"
                    description="Plan routes effortlessly—our AI handles orders, vehicles, and traffic for you." />
            </x-benefits-card>

            <!-- Benefit 5 -->
            <x-benefits-card>
                <x-benefits-card-image src="images/undraw_eco.svg" alt="Eco-Friendly Operations" />
                <x-benefits-card-text title="Eco-Friendly Operations"
                    description="Go green with efficient routes that reduce your environmental footprint." />
            </x-benefits-card>

            <!-- Benefit 6 -->
            <x-benefits-card :reverse="true">
                <x-benefits-card-image src="images/undraw_fleet.svg" alt="Scalable for Any Fleet Size" />
                <x-benefits-card-text title="Scalable for Any Fleet Size"
                    description="Grow with ease—optimize routes for small teams or large fleets alike." />
            </x-benefits-card>
        </div>
    </div>
</section>
