<section id="demo" class="bg-white pb-16 overflow-hidden font-main">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <!-- Section Heading -->
        <div class="pt-16 mb-8">
            <div class="flex items-center w-full mb-2">
                <h2
                    class="text-3xl font-bold font-secondary drop-shadow-lg p-0.5 text-center mx-auto md:text-4xl md:whitespace-nowrap md:pr-4">
                    <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-secondary-green">Unlock</span>
                    Better Results
                </h2>
                <hr class="hidden md:block w-full border-gray-300">
            </div>
            <p class="text-gray-500 text-center md:text-start">See firsthand how our solution solves your most pressing
                business challenges.</p>
        </div>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="grid md:grid-cols-5">
                <!-- Left side - content -->
                <div class="bg-primary-blue text-white p-8 md:p-10 md:col-span-2">
                    <h2 class="text-2xl md:text-3xl font-bold font-secondary">
                        Schedule Your Demo
                    </h2>
                    <p class="mt-4 text-white/80">
                        Discover how our solution can transform your business processes and drive results.
                    </p>

                    <div class="mt-10 space-y-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-white/20 p-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium">Personalized walkthrough</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-white/20 p-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium">Q&A with product specialists</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-white/20 p-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium">Tailored to your business needs</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right side - form -->
                <div class="p-8 md:p-10 md:col-span-3 shadow-2xl">
                    <h3 class="text-xl font-bold text-dark-text">
                        Book Your Demo Session
                    </h3>
                    <p class="mt-2 text-sm text-gray-600">
                        Fill out the form below and our team will reach out to schedule a convenient time.
                    </p>

                    @if (session('success'))
                        <div class="mt-4 bg-secondary-green/10 text-secondary-green px-4 py-3 rounded-md">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form class="mt-6 space-y-5" action="{{ route('demo.store') }}" method="POST" id="demoForm">
                        @csrf

                        <div class="space-y-5">
                            <div>
                                <label for="company" class="block text-sm font-medium text-gray-700">Company
                                    Name<sup>*</sup></label>
                                <input id="company" name="company" type="text" value="{{ old('company') }}"
                                    required
                                    class="mt-1 appearance-none rounded-md w-full px-4 py-2.5 border border-gray-300 placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-2 focus:ring-primary-blue focus:border-primary-blue text-sm">
                                @error('company')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Full
                                    Name<sup>*</sup></label>
                                <input id="name" name="name" type="text" value="{{ old('name') }}" required
                                    class="mt-1 appearance-none rounded-md w-full px-4 py-2.5 border border-gray-300 placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-2 focus:ring-primary-blue focus:border-primary-blue text-sm">
                                @error('name')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email
                                        Address<sup>*</sup></label>
                                    <input id="email" name="email" type="email" value="{{ old('email') }}"
                                        required
                                        class="mt-1 appearance-none rounded-md w-full px-4 py-2.5 border border-gray-300 placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-2 focus:ring-primary-blue focus:border-primary-blue text-sm">
                                    @error('email')
                                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone
                                        Number<sup>*</sup></label>
                                    <input id="phone" name="phone" type="tel" value="{{ old('phone') }}"
                                        required
                                        class="mt-1 appearance-none rounded-md w-full px-4 py-2.5 border border-gray-300 placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-2 focus:ring-primary-blue focus:border-primary-blue text-sm">
                                    @error('phone')
                                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="comments" class="block text-sm font-medium text-gray-700">Additional
                                    Comments (Optional)</label>
                                <textarea id="comments" name="comments" rows="3"
                                    class="mt-1 appearance-none rounded-md w-full px-4 py-2.5 border border-gray-300 placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-2 focus:ring-primary-blue focus:border-primary-blue text-sm">{{ old('comments') }}</textarea>
                                @error('comments')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="pt-2">
                            <button type="submit" id="demoSubmitBtn"
                                class="w-full flex justify-center items-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-primary-blue hover:bg-primary-blue/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-blue transition duration-150 ease-in-out">
                                <span id="btnDefaultText">Request Demo</span>
                                <span id="btnLoadingText" class="hidden">
                                    <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10"
                                            stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor"
                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                        </path>
                                    </svg>
                                    Sending request...
                                </span>
                            </button>
                        </div>

                        <p class="text-xs text-center text-gray-500 mt-4">
                            Our team will reach out within 24 hours to schedule a demo at a time that's convenient for
                            you.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            alert("{{ session('success') }}");
        });
    </script>
@endif

<!-- Simple JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('demoForm');
        const submitBtn = document.getElementById('demoSubmitBtn');
        const defaultText = document.getElementById('btnDefaultText');
        const loadingText = document.getElementById('btnLoadingText');

        if (form) {
            form.addEventListener('submit', function() {
                // Show loading state
                defaultText.classList.add('hidden');
                loadingText.classList.remove('hidden');
                loadingText.classList.add('flex');
                submitBtn.disabled = true;

                // Form submits normally
                return true;
            });
        }
    });
</script>
