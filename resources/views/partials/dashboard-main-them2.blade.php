        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">
            
            <!-- Left Column -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- User Profile Card -->
                <div class="glass-card rounded-3xl p-5 sm:p-6">
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6">
                        <div class="relative">
                            <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-2xl bg-gradient-to-br from-accent-primary/20 to-accent-secondary/20 overflow-hidden border-2 border-accent-primary/30 flex items-center justify-center text-2xl font-bold text-accent-primary">JD</div>
                            <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-accent-emerald rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <h2 class="text-xl sm:text-2xl font-bold">Username</h2>
                                <img src="{{ asset('them2/assets/img/educated-label.svg') }}" alt="Educated" class="h-6">
                            </div>
                            <div class="flex items-center gap-2 text-gray-400 text-sm mb-3">
                                <span>Kurdistan Rojava</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-3">
                                <div class="flex items-center gap-2 px-3 py-1.5 rounded-xl bg-dark-600/50">
                                    <span class="text-xs text-gray-400">Subscription</span>
                                    <span class="text-sm font-medium text-accent-gold">Monthly</span>
                                </div>
                                <div class="flex items-center gap-2 px-3 py-1.5 rounded-xl bg-dark-600/50">
                                    <span class="text-xs text-gray-400">Renew</span>
                                    <span class="text-sm font-medium">25.01.2026</span>
                                </div>
                                <div class="flex items-center gap-2 px-3 py-1.5 rounded-xl bg-dark-600/50">
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" id="subscribeToggle" class="sr-only peer" checked>
                                        <div class="w-9 h-5 bg-gray-600 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500"></div>
                                    </label>
                                    <span id="subscribeStatus" class="text-xs font-medium text-emerald-400">Subscribed</span>
                                </div>
                            </div>
                        </div>
                        <div class="glass-card-light rounded-2xl p-4 text-center min-w-[140px]">
                            <p class="text-xs text-gray-400 mb-1">Balance</p>
                            <div class="flex items-center justify-center gap-2">
                                <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="Currency" class="w-5 h-5">
                                <span class="text-xl font-bold text-accent-gold">500.00</span>
                            </div>
                            <span class="cashback-badge text-xs px-2 py-0.5 rounded-full text-white mt-2 inline-block">5% CASHBACK</span>
                        </div>
                    </div>
                </div>

                <!-- Our Partner Shops -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold">Our Partner Shops</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Shop Card 1 -->
                        <div class="shop-card rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-shadow">
                            <div class="relative h-44 bg-gradient-to-br from-gray-700 to-gray-900 flex items-center justify-center">
                                <img src="{{ asset('them2/assets/img/shop-photo-1.jpg') }}" alt="Shop" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="hidden absolute inset-0 items-center justify-center bg-gradient-to-br from-gray-600 to-gray-800">
                                    <svg class="w-16 h-16 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                                <div class="absolute top-3 right-3 bg-yellow-400 text-black text-xs px-2 py-1 rounded font-bold shadow">HAIRSALON</div>
                            </div>
                            <div class="p-4 bg-white rounded-b-3xl -mt-4 relative z-10">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-11 h-11 rounded-full bg-gradient-to-br from-pink-500 to-red-500 flex items-center justify-center text-white text-xs font-bold border-2 border-white shadow-md">
                                        <span>HS</span>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center gap-1.5">
                                            <span class="text-gray-900 font-bold text-sm">SuperMarchent Shop</span>
                                            <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                        </div>
                                        <div class="flex items-center gap-1.5 text-xs text-gray-500 mt-0.5">
                                            <span class="text-green-600">🌿</span>
                                            <span>Rojava</span>
                                            <span class="text-gray-300">|</span>
                                            <span class="text-yellow-500">â˜…</span>
                                            <span class="font-medium">5.0</span>
                                            <span class="text-gray-400">(3K)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="bg-green-500 text-white text-xs px-3 py-1 rounded-full font-bold shadow-sm">SHOP OPEN</span>
                                    <div class="flex items-center gap-1.5">
                                        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/></svg>
                                        <span class="text-gray-700 font-semibold text-sm">950</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Shop Card 2 -->
                        <div class="shop-card rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-shadow">
                            <div class="relative h-44 bg-gradient-to-br from-gray-700 to-gray-900 flex items-center justify-center">
                                <img src="{{ asset('them2/assets/img/shop-photo-2.jpg') }}" alt="Shop" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="hidden absolute inset-0 items-center justify-center bg-gradient-to-br from-gray-600 to-gray-800">
                                    <svg class="w-16 h-16 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                                <div class="absolute top-3 right-3 bg-yellow-400 text-black text-xs px-2 py-1 rounded font-bold shadow">HAIRSALON</div>
                            </div>
                            <div class="p-4 bg-white rounded-b-3xl -mt-4 relative z-10">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-11 h-11 rounded-full bg-gradient-to-br from-pink-500 to-red-500 flex items-center justify-center text-white text-xs font-bold border-2 border-white shadow-md">
                                        <span>HS</span>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center gap-1.5">
                                            <span class="text-gray-900 font-bold text-sm">SuperMarchent Shop</span>
                                            <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                        </div>
                                        <div class="flex items-center gap-1.5 text-xs text-gray-500 mt-0.5">
                                            <span class="text-green-600">🌿</span>
                                            <span>Rojava</span>
                                            <span class="text-gray-300">|</span>
                                            <span class="text-yellow-500">â˜…</span>
                                            <span class="font-medium">5.0</span>
                                            <span class="text-gray-400">(3K)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="bg-green-500 text-white text-xs px-3 py-1 rounded-full font-bold shadow-sm">SHOP OPEN</span>
                                    <div class="flex items-center gap-1.5">
                                        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/></svg>
                                        <span class="text-gray-700 font-semibold text-sm">950</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Shop Card 3 -->
                        <div class="shop-card rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-shadow">
                            <div class="relative h-44 bg-gradient-to-br from-gray-700 to-gray-900 flex items-center justify-center">
                                <img src="{{ asset('them2/assets/img/shop-photo-3.jpg') }}" alt="Shop" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="hidden absolute inset-0 items-center justify-center bg-gradient-to-br from-gray-600 to-gray-800">
                                    <svg class="w-16 h-16 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                                <div class="absolute top-3 right-3 bg-yellow-400 text-black text-xs px-2 py-1 rounded font-bold shadow">HAIRSALON</div>
                            </div>
                            <div class="p-4 bg-white rounded-b-3xl -mt-4 relative z-10">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-11 h-11 rounded-full bg-gradient-to-br from-pink-500 to-red-500 flex items-center justify-center text-white text-xs font-bold border-2 border-white shadow-md">
                                        <span>HS</span>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center gap-1.5">
                                            <span class="text-gray-900 font-bold text-sm">SuperMarchent Shop</span>
                                            <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                        </div>
                                        <div class="flex items-center gap-1.5 text-xs text-gray-500 mt-0.5">
                                            <span class="text-green-600">🌿</span>
                                            <span>Rojava</span>
                                            <span class="text-gray-300">|</span>
                                            <span class="text-yellow-500">â˜…</span>
                                            <span class="font-medium">5.0</span>
                                            <span class="text-gray-400">(3K)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="bg-green-500 text-white text-xs px-3 py-1 rounded-full font-bold shadow-sm">SHOP OPEN</span>
                                    <div class="flex items-center gap-1.5">
                                        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/></svg>
                                        <span class="text-gray-700 font-semibold text-sm">950</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Choose Your Plan Section -->
                <div class="space-y-6">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                        <div>
                            <h3 class="text-xl font-bold dark:text-white text-gray-900">Choose Your Plan</h3>
                            <p class="text-sm dark:text-gray-400 text-gray-500">Select monthly or Yearly Plan</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                        <!-- Cultivated Plan -->
                        <div class="bg-white rounded-3xl p-6 relative shadow-lg hover:shadow-xl transition-shadow border border-gray-100">
                            <div class="mb-4">
                                <span class="px-4 py-1.5 rounded-full text-xs font-bold bg-emerald-500 text-white">Currently Activated</span>
                            </div>
                            <div class="mb-2">
                                <img src="{{ asset('them2/assets/img/cultivated-label.svg') }}" alt="Cultivated" class="h-12">
                            </div>
                            <div class="mb-4">
                                <p class="text-sm text-emerald-500 font-medium">Current access</p>
                            </div>
                            <div class="flex items-center gap-1 mb-4">
                                <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="Zer" class="w-8 h-8">
                                <span class="text-5xl font-bold text-gray-900">0.00</span>
                            </div>
                            <p class="text-sm text-gray-500 mb-6 leading-relaxed text-center">For individual use with 30 summaries a month, no ads, and basic support.</p>
                            <div class="flex justify-center mb-6">
                                <img src="{{ asset('them2/assets/img/cultivated-service.svg') }}" alt="Cultivated features" class="h-16">
                            </div>
                            <ul class="space-y-2.5 text-sm text-gray-600 mb-6">
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Follow Users</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Enjoy Music</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Enjoy Videos</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Standard Wallet</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Get cashback</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>and more</li>
                            </ul>
                            <button class="w-full py-3.5 rounded-2xl text-sm font-bold bg-amber-400 text-gray-800 cursor-default">Your Current Plan</button>
                        </div>

                        <!-- Educated Plan -->
                        <div class="bg-white rounded-3xl p-6 relative shadow-lg hover:shadow-xl transition-shadow border border-gray-100">
                            <div class="flex items-center gap-2 mb-4">
                                <div class="inline-flex items-center border border-gray-300 rounded-lg overflow-hidden">
                                    <button class="px-4 py-1.5 text-xs font-medium bg-gray-800 text-white">Monthly</button>
                                    <button class="px-4 py-1.5 text-xs font-medium text-gray-500 bg-white">Yearly</button>
                                </div>
                            </div>
                            <div class="mb-2">
                                <img src="{{ asset('them2/assets/img/educated-label.svg') }}" alt="Educated" class="h-12">
                            </div>
                            <div class="mb-4">
                                <p class="text-sm text-emerald-500 font-medium">Manage access</p>
                            </div>
                            <div class="flex items-center gap-1 mb-4">
                                <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="Zer" class="w-8 h-8">
                                <span class="text-5xl font-bold text-gray-900">0.00</span>
                            </div>
                            <p class="text-sm text-gray-500 mb-6 leading-relaxed text-center">Unlimited summaries, customization, quick support, & app integrations for professionals.</p>
                            <div class="flex justify-center mb-6">
                                <img src="{{ asset('them2/assets/img/educated-service.svg') }}" alt="Educated features" class="h-16">
                            </div>
                            <ul class="space-y-2.5 text-sm text-gray-600 mb-6">
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Follow Users</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Enjoy Music</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Enjoy Videos</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Create Channel</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Text Comments</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Voice Comment</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Business Wallet</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Get cashback</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>and more</li>
                            </ul>
                            <button class="w-full py-3.5 rounded-2xl text-sm font-bold bg-emerald-500 text-white flex items-center justify-center gap-2 hover:bg-emerald-600 hover:shadow-lg transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                Add To Cart
                            </button>
                        </div>

                        <!-- Academic Plan -->
                        <div class="bg-white rounded-3xl p-6 relative shadow-lg hover:shadow-xl transition-shadow border border-gray-100">
                            <div class="flex items-center gap-2 mb-4">
                                <div class="inline-flex items-center border border-gray-300 rounded-lg overflow-hidden">
                                    <button class="px-4 py-1.5 text-xs font-medium bg-gray-800 text-white">Monthly</button>
                                    <button class="px-4 py-1.5 text-xs font-medium text-gray-500 bg-white">Yearly</button>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h4 class="text-2xl font-bold text-gray-900 mb-1">Academic</h4>
                                <p class="text-sm text-emerald-500 font-medium">Manage access</p>
                            </div>
                            <div class="flex items-center gap-1 mb-4">
                                <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="Zer" class="w-8 h-8">
                                <span class="text-5xl font-bold text-gray-900">0.00</span>
                            </div>
                            <p class="text-sm text-gray-500 mb-6 leading-relaxed text-center">Team-focused with priority support, API access, and advanced security options.</p>
                            <div class="flex justify-center mb-6">
                                <img src="{{ asset('them2/assets/img/academic-service.svg') }}" alt="Academic features" class="h-20">
                            </div>
                            <ul class="space-y-2.5 text-sm text-gray-600 mb-6">
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Follow Users</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Enjoy Music</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Enjoy Videos</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Create Channel</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Text Comments</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Voice Comment</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Business Wallet</li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-gray-400">Get cashback</span></li>
                                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>and more</li>
                            </ul>
                            <button class="w-full py-3.5 rounded-2xl text-sm font-bold bg-emerald-500 text-white flex items-center justify-center gap-2 hover:bg-emerald-600 hover:shadow-lg transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                Add To Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Upgrade Music Playlist -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold dark:text-white text-gray-900">Upgrade Music Playlist</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <!-- Bronze Playlist -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
                            <div class="relative h-44 overflow-hidden">
                                <img src="{{ asset('them2/assets/img/bronze-playlist.svg') }}" alt="Bronze Playlist" class="w-full h-full object-cover">
                                <span class="absolute top-3 right-3 px-3 py-1 rounded-full text-xs font-bold bg-emerald-500 text-white">5% CASHBACK</span>
                            </div>
                            <div class="p-4 text-gray-800">
                                <div class="mb-3">
                                    <h4 class="font-bold text-gray-900">Bronze Playlist</h4>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-xs text-gray-500">Playlist Songs</span>
                                    <span class="text-xs text-gray-500">Price</span>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="font-bold text-emerald-500">50 Songs</span>
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="" class="w-4 h-4">
                                        <span class="font-bold text-orange-500">1000</span>
                                    </div>
                                </div>
                                <button class="w-full py-2.5 rounded-xl text-sm font-medium bg-emerald-500 text-white flex items-center justify-center gap-2 hover:bg-emerald-600 transition-all mb-3">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    Add To Cart
                                </button>
                                <div class="flex items-center justify-center gap-2 px-3 py-2 bg-emerald-50 rounded-xl border border-emerald-200">
                                    <span class="text-xs font-medium text-emerald-700">Auto Charge</span>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" checked class="sr-only peer">
                                        <div class="w-9 h-5 bg-gray-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Silver Playlist -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
                            <div class="relative h-44 overflow-hidden">
                                <img src="{{ asset('them2/assets/img/silver-playlist.svg') }}" alt="Silver Playlist" class="w-full h-full object-cover">
                                <span class="absolute top-3 right-3 px-3 py-1 rounded-full text-xs font-bold bg-emerald-500 text-white">5% CASHBACK</span>
                            </div>
                            <div class="p-4 text-gray-800">
                                <div class="mb-3">
                                    <h4 class="font-bold text-gray-900">Silver Playlist</h4>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-xs text-gray-500">Playlist Songs</span>
                                    <span class="text-xs text-gray-500">Price</span>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="font-bold text-emerald-500">75 Songs</span>
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="" class="w-4 h-4">
                                        <span class="font-bold text-orange-500">1000</span>
                                    </div>
                                </div>
                                <button class="w-full py-2.5 rounded-xl text-sm font-medium bg-emerald-500 text-white flex items-center justify-center gap-2 hover:bg-emerald-600 transition-all mb-3">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    Add To Cart
                                </button>
                                <div class="flex items-center justify-center gap-2 px-3 py-2 bg-emerald-50 rounded-xl border border-emerald-200">
                                    <span class="text-xs font-medium text-emerald-700">Auto Charge</span>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" checked class="sr-only peer">
                                        <div class="w-9 h-5 bg-gray-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Gold Playlist -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
                            <div class="relative h-44 overflow-hidden">
                                <img src="{{ asset('them2/assets/img/gold-playlist.svg') }}" alt="Gold Playlist" class="w-full h-full object-cover">
                                <span class="absolute top-3 right-3 px-3 py-1 rounded-full text-xs font-bold bg-emerald-500 text-white">5% CASHBACK</span>
                            </div>
                            <div class="p-4 text-gray-800">
                                <div class="mb-3">
                                    <h4 class="font-bold text-gray-900">Gold Playlist</h4>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-xs text-gray-500">Playlist Songs</span>
                                    <span class="text-xs text-gray-500">Price</span>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="font-bold text-emerald-500">100 Songs</span>
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="" class="w-4 h-4">
                                        <span class="font-bold text-orange-500">1000</span>
                                    </div>
                                </div>
                                <button class="w-full py-2.5 rounded-xl text-sm font-medium bg-emerald-500 text-white flex items-center justify-center gap-2 hover:bg-emerald-600 transition-all mb-3">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    Add To Cart
                                </button>
                                <div class="flex items-center justify-center gap-2 px-3 py-2 bg-emerald-50 rounded-xl border border-emerald-200">
                                    <span class="text-xs font-medium text-emerald-700">Auto Charge</span>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" checked class="sr-only peer">
                                        <div class="w-9 h-5 bg-gray-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Streaming Minutes -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold dark:text-white text-gray-900">Streaming Minutes</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <!-- Bronze Stream -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
                            <div class="relative h-44 overflow-hidden">
                                <img src="{{ asset('them2/assets/img/bronze-stream.svg') }}" alt="Bronze Stream" class="w-full h-full object-cover">
                                <span class="absolute top-3 right-3 px-3 py-1 rounded-full text-xs font-bold bg-emerald-500 text-white">5% CASHBACK</span>
                            </div>
                            <div class="p-4 text-gray-800">
                                <div class="mb-3">
                                    <h4 class="font-bold text-gray-900">Bronze Stream</h4>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-xs text-gray-500">Minute</span>
                                    <span class="text-xs text-gray-500">Price</span>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="font-bold text-emerald-500">60 Min</span>
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="" class="w-4 h-4">
                                        <span class="font-bold text-orange-500">500</span>
                                    </div>
                                </div>
                                <button class="w-full py-2.5 rounded-xl text-sm font-medium bg-emerald-500 text-white flex items-center justify-center gap-2 hover:bg-emerald-600 transition-all mb-3">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    Add To Cart
                                </button>
                                <div class="flex items-center justify-center gap-2 px-3 py-2 bg-emerald-50 rounded-xl border border-emerald-200">
                                    <span class="text-xs font-medium text-emerald-700">Auto Charge</span>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" checked class="sr-only peer">
                                        <div class="w-9 h-5 bg-gray-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Silver Stream -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
                            <div class="relative h-44 overflow-hidden">
                                <img src="{{ asset('them2/assets/img/silver-stream.svg') }}" alt="Silver Stream" class="w-full h-full object-cover">
                                <span class="absolute top-3 right-3 px-3 py-1 rounded-full text-xs font-bold bg-emerald-500 text-white">5% CASHBACK</span>
                            </div>
                            <div class="p-4 text-gray-800">
                                <div class="mb-3">
                                    <h4 class="font-bold text-gray-900">Silver Stream</h4>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-xs text-gray-500">Minute</span>
                                    <span class="text-xs text-gray-500">Price</span>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="font-bold text-emerald-500">120 Min</span>
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="" class="w-4 h-4">
                                        <span class="font-bold text-orange-500">900</span>
                                    </div>
                                </div>
                                <button class="w-full py-2.5 rounded-xl text-sm font-medium bg-emerald-500 text-white flex items-center justify-center gap-2 hover:bg-emerald-600 transition-all mb-3">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    Add To Cart
                                </button>
                                <div class="flex items-center justify-center gap-2 px-3 py-2 bg-emerald-50 rounded-xl border border-emerald-200">
                                    <span class="text-xs font-medium text-emerald-700">Auto Charge</span>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" checked class="sr-only peer">
                                        <div class="w-9 h-5 bg-gray-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Gold Stream -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
                            <div class="relative h-44 overflow-hidden">
                                <img src="{{ asset('them2/assets/img/gold-stream.svg') }}" alt="Gold Stream" class="w-full h-full object-cover">
                                <span class="absolute top-3 right-3 px-3 py-1 rounded-full text-xs font-bold bg-emerald-500 text-white">5% CASHBACK</span>
                            </div>
                            <div class="p-4 text-gray-800">
                                <div class="mb-3">
                                    <h4 class="font-bold text-gray-900">Gold Stream</h4>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-xs text-gray-500">Minute</span>
                                    <span class="text-xs text-gray-500">Price</span>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="font-bold text-emerald-500">180 Min</span>
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="" class="w-4 h-4">
                                        <span class="font-bold text-orange-500">1200</span>
                                    </div>
                                </div>
                                <button class="w-full py-2.5 rounded-xl text-sm font-medium bg-emerald-500 text-white flex items-center justify-center gap-2 hover:bg-emerald-600 transition-all mb-3">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    Add To Cart
                                </button>
                                <div class="flex items-center justify-center gap-2 px-3 py-2 bg-emerald-50 rounded-xl border border-emerald-200">
                                    <span class="text-xs font-medium text-emerald-700">Auto Charge</span>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" checked class="sr-only peer">
                                        <div class="w-9 h-5 bg-gray-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Standard Zer Packages -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold">Standard Zer packages</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <!-- Bronze Pack -->
                        <div class="package-card rounded-2xl overflow-hidden shadow-lg">
                            <div class="h-48 overflow-hidden">
                                <img src="{{ asset('them2/assets/img/bronze-pack.svg') }}" alt="Bronze Pack" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4 text-gray-800">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="font-bold">Bronze Pack</h4>
                                    <span class="text-xs text-gray-500">Price</span>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="" class="w-4 h-4">
                                        <span class="font-bold text-orange-500">1000</span>
                                    </div>
                                    <span class="font-bold text-cyan-600">â‚¬ 49.99</span>
                                </div>
                                <p class="text-xs text-gray-500 mb-3">Use your Balance on YekBÃ»n</p>
                                <div class="flex gap-2 mb-4">
                                    <div class="w-7 h-7 rounded-lg bg-orange-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2c-4 0-8 .5-8 4v9.5C4 17.43 5.57 19 7.5 19L6 20.5v.5h2l2-2h4l2 2h2v-.5L16.5 19c1.93 0 3.5-1.57 3.5-3.5V6c0-3.5-4-4-8-4zm-3.5 5h7c.83 0 1.5.67 1.5 1.5S16.33 10 15.5 10h-7C7.67 10 7 9.33 7 8.5S7.67 7 8.5 7zm-1 7c-.83 0-1.5-.67-1.5-1.5S6.67 11 7.5 11s1.5.67 1.5 1.5S8.33 14 7.5 14zm9 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
                                    </div>
                                    <div class="w-7 h-7 rounded-lg bg-orange-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 24 24"><path d="M3 2l2.01 18.23C5.13 21.23 5.97 22 7 22h10c1.03 0 1.87-.77 1.99-1.77L21 2H3zm9 17c-1.66 0-3-1.34-3-3 0-2 3-5.4 3-5.4s3 3.4 3 5.4c0 1.66-1.34 3-3 3zm6.33-11H5.67l-.44-4h13.53l-.43 4z"/></svg>
                                    </div>
                                    <div class="w-7 h-7 rounded-lg bg-orange-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 24 24"><path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58s1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41s-.23-1.06-.59-1.42zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z"/></svg>
                                    </div>
                                    <div class="w-7 h-7 rounded-lg bg-orange-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                    </div>
                                    <div class="w-7 h-7 rounded-lg bg-orange-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/></svg>
                                    </div>
                                    <div class="w-7 h-7 rounded-lg bg-orange-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 24 24"><path d="M19.14 12.94c.04-.31.06-.63.06-.94 0-.31-.02-.63-.06-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.04.31-.06.63-.06.94s.02.63.06.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg>
                                    </div>
                                </div>
                                <button class="w-full py-2.5 rounded-xl text-sm font-medium btn-cyan text-white flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    Add To Cart
                                </button>
                            </div>
                        </div>

                        <!-- Silver Pack -->
                        <div class="package-card rounded-2xl overflow-hidden shadow-lg">
                            <div class="h-48 overflow-hidden">
                                <img src="{{ asset('them2/assets/img/silver-pack.svg') }}" alt="Silver Pack" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4 text-gray-800">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="font-bold">Silver Pack</h4>
                                    <span class="text-xs text-gray-500">Price</span>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="" class="w-4 h-4">
                                        <span class="font-bold text-gray-500">1000</span>
                                    </div>
                                    <span class="font-bold text-cyan-600">â‚¬ 49.99</span>
                                </div>
                                <p class="text-xs text-gray-500 mb-3">Use your Balance on YekBÃ»n</p>
                                <div class="flex gap-2 mb-4">
                                    <div class="w-7 h-7 rounded-lg bg-gray-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2c-4 0-8 .5-8 4v9.5C4 17.43 5.57 19 7.5 19L6 20.5v.5h2l2-2h4l2 2h2v-.5L16.5 19c1.93 0 3.5-1.57 3.5-3.5V6c0-3.5-4-4-8-4zm-3.5 5h7c.83 0 1.5.67 1.5 1.5S16.33 10 15.5 10h-7C7.67 10 7 9.33 7 8.5S7.67 7 8.5 7zm-1 7c-.83 0-1.5-.67-1.5-1.5S6.67 11 7.5 11s1.5.67 1.5 1.5S8.33 14 7.5 14zm9 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
                                    </div>
                                    <div class="w-7 h-7 rounded-lg bg-gray-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 24 24"><path d="M3 2l2.01 18.23C5.13 21.23 5.97 22 7 22h10c1.03 0 1.87-.77 1.99-1.77L21 2H3zm9 17c-1.66 0-3-1.34-3-3 0-2 3-5.4 3-5.4s3 3.4 3 5.4c0 1.66-1.34 3-3 3zm6.33-11H5.67l-.44-4h13.53l-.43 4z"/></svg>
                                    </div>
                                    <div class="w-7 h-7 rounded-lg bg-gray-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 24 24"><path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58s1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41s-.23-1.06-.59-1.42zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z"/></svg>
                                    </div>
                                    <div class="w-7 h-7 rounded-lg bg-gray-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                    </div>
                                    <div class="w-7 h-7 rounded-lg bg-gray-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/></svg>
                                    </div>
                                    <div class="w-7 h-7 rounded-lg bg-gray-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 24 24"><path d="M19.14 12.94c.04-.31.06-.63.06-.94 0-.31-.02-.63-.06-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.04.31-.06.63-.06.94s.02.63.06.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg>
                                    </div>
                                </div>
                                <button class="w-full py-2.5 rounded-xl text-sm font-medium btn-cyan text-white flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    Add To Cart
                                </button>
                            </div>
                        </div>

                        <!-- Gold Pack -->
                        <div class="package-card rounded-2xl overflow-hidden shadow-lg">
                            <div class="h-48 overflow-hidden">
                                <img src="{{ asset('them2/assets/img/gold-pack.svg') }}" alt="Gold Pack" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4 text-gray-800">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="font-bold">Gold Pack</h4>
                                    <span class="text-xs text-gray-500">Price</span>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="" class="w-4 h-4">
                                        <span class="font-bold text-yellow-500">1000</span>
                                    </div>
                                    <span class="font-bold text-cyan-600">â‚¬ 49.99</span>
                                </div>
                                <p class="text-xs text-gray-500 mb-3">Use your Balance on YekBÃ»n</p>
                                <div class="flex gap-2 mb-4">
                                    <div class="w-7 h-7 rounded-lg bg-yellow-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2c-4 0-8 .5-8 4v9.5C4 17.43 5.57 19 7.5 19L6 20.5v.5h2l2-2h4l2 2h2v-.5L16.5 19c1.93 0 3.5-1.57 3.5-3.5V6c0-3.5-4-4-8-4zm-3.5 5h7c.83 0 1.5.67 1.5 1.5S16.33 10 15.5 10h-7C7.67 10 7 9.33 7 8.5S7.67 7 8.5 7zm-1 7c-.83 0-1.5-.67-1.5-1.5S6.67 11 7.5 11s1.5.67 1.5 1.5S8.33 14 7.5 14zm9 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
                                    </div>
                                    <div class="w-7 h-7 rounded-lg bg-yellow-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 24 24"><path d="M3 2l2.01 18.23C5.13 21.23 5.97 22 7 22h10c1.03 0 1.87-.77 1.99-1.77L21 2H3zm9 17c-1.66 0-3-1.34-3-3 0-2 3-5.4 3-5.4s3 3.4 3 5.4c0 1.66-1.34 3-3 3zm6.33-11H5.67l-.44-4h13.53l-.43 4z"/></svg>
                                    </div>
                                    <div class="w-7 h-7 rounded-lg bg-yellow-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 24 24"><path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58s1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41s-.23-1.06-.59-1.42zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z"/></svg>
                                    </div>
                                    <div class="w-7 h-7 rounded-lg bg-yellow-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                    </div>
                                    <div class="w-7 h-7 rounded-lg bg-yellow-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/></svg>
                                    </div>
                                    <div class="w-7 h-7 rounded-lg bg-yellow-100 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 24 24"><path d="M19.14 12.94c.04-.31.06-.63.06-.94 0-.31-.02-.63-.06-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.04.31-.06.63-.06.94s.02.63.06.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg>
                                    </div>
                                </div>
                                <button class="w-full py-2.5 rounded-xl text-sm font-medium btn-cyan text-white flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    Add To Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Zer Packages -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold">Business Zer packages</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <!-- Titanium Pack -->
                        <div class="package-card rounded-2xl overflow-hidden shadow-lg">
                            <div class="h-48 overflow-hidden bg-gradient-to-br from-gray-300 to-gray-400">
                                <img src="{{ asset('them2/assets/img/titanium-pack.svg') }}" alt="Titanium Pack" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4 text-gray-800">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="font-bold">Titanium Pack</h4>
                                    <span class="text-xs text-gray-500">Price</span>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="" class="w-4 h-4">
                                        <span class="font-bold text-gray-600">1000</span>
                                    </div>
                                    <span class="font-bold text-cyan-600">â‚¬ 49.99</span>
                                </div>
                                <p class="text-xs text-gray-500 mb-4">Use your Balance on YekBÃ»n</p>
                                <button class="w-full py-2.5 rounded-xl text-sm font-medium btn-cyan text-white flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    Add To Cart
                                </button>
                            </div>
                        </div>

                        <!-- Platinum Pack -->
                        <div class="package-card rounded-2xl overflow-hidden shadow-lg">
                            <div class="h-48 overflow-hidden bg-gradient-to-br from-gray-400 to-gray-500">
                                <img src="{{ asset('them2/assets/img/platinum-pack.svg') }}" alt="Platinum Pack" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4 text-gray-800">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="font-bold">Platinum Pack</h4>
                                    <span class="text-xs text-gray-500">Price</span>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="" class="w-4 h-4">
                                        <span class="font-bold text-gray-500">1000</span>
                                    </div>
                                    <span class="font-bold text-cyan-600">â‚¬ 49.99</span>
                                </div>
                                <p class="text-xs text-gray-500 mb-4">Use your Balance on YekBÃ»n</p>
                                <button class="w-full py-2.5 rounded-xl text-sm font-medium btn-cyan text-white flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    Add To Cart
                                </button>
                            </div>
                        </div>

                        <!-- Rhodium Pack -->
                        <div class="package-card rounded-2xl overflow-hidden shadow-lg">
                            <div class="h-48 overflow-hidden bg-gradient-to-br from-gray-800 to-black">
                                <img src="{{ asset('them2/assets/img/diamond-pack.svg') }}" alt="Rhodium Pack" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4 text-gray-800">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="font-bold">Rhodium Pack</h4>
                                    <span class="text-xs text-gray-500">Price</span>
                                </div>
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="" class="w-4 h-4">
                                        <span class="font-bold text-yellow-600">1000</span>
                                    </div>
                                    <span class="font-bold text-cyan-600">â‚¬ 49.99</span>
                                </div>
                                <p class="text-xs text-gray-500 mb-4">Use your Balance on YekBÃ»n</p>
                                <button class="w-full py-2.5 rounded-xl text-sm font-medium btn-cyan text-white flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    Add To Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column - Cart/Summary -->
            <div class="lg:col-span-1">
                <div id="cartPanel" class="fixed lg:relative inset-x-0 bottom-0 lg:inset-auto bg-white rounded-t-3xl lg:rounded-3xl p-5 sm:p-6 lg:sticky lg:top-24 shadow-xl z-40 transform translate-y-full lg:translate-y-0 transition-transform duration-300 ease-out max-h-[75vh] lg:max-h-none overflow-y-auto">
                    <div class="w-12 h-1 bg-gray-300 rounded-full mx-auto mb-2 lg:hidden cursor-pointer" onclick="toggleMobileCart()"></div>
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-gray-900">My Cart</h3>
                        <button onclick="toggleMobileCart()" class="lg:hidden w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center hover:bg-gray-200 transition-all">
                            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>

                    <div id="cartItems" class="space-y-4 mb-6">
                        <!-- Cart Item 1 - Gold Pack -->
                        <div class="flex items-center gap-3 py-3 border-b border-gray-100">
                            <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0 bg-gradient-to-br from-yellow-400 to-yellow-600">
                                <img src="{{ asset('them2/assets/img/gold-pack.svg') }}" alt="Gold Pack" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="font-bold text-gray-900 text-sm">Gold Pack</h4>
                                <p class="text-xs text-gray-500">1000 Zer</p>
                                <span class="inline-block mt-1 px-2 py-0.5 rounded text-xs font-medium bg-emerald-100 text-emerald-600">5%</span>
                            </div>
                            <div class="text-right flex-shrink-0">
                                <div class="flex items-center gap-1 justify-end">
                                    <span class="text-xs text-gray-500">â‚¬</span>
                                    <span class="font-bold text-emerald-500">49,99</span>
                                </div>
                                <span class="text-xs text-gray-400 line-through">59,99</span>
                            </div>
                            <button onclick="removeCartItem(this)" class="w-8 h-8 rounded-full bg-red-100 text-red-500 flex items-center justify-center hover:bg-red-200 transition-all flex-shrink-0">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                            </button>
                        </div>

                        <!-- Cart Item 2 - Gold List -->
                        <div class="flex items-center gap-3 py-3 border-b border-gray-100">
                            <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0">
                                <img src="{{ asset('them2/assets/img/gold-playlist.svg') }}" alt="Gold List" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="font-bold text-gray-900 text-sm">Gold list</h4>
                                <p class="text-xs text-gray-500">100 Songs</p>
                                <span class="inline-block mt-1 px-2 py-0.5 rounded text-xs font-medium bg-emerald-100 text-emerald-600">5%</span>
                            </div>
                            <div class="text-right flex-shrink-0">
                                <div class="flex items-center gap-1 justify-end">
                                    <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="" class="w-4 h-4">
                                    <span class="font-bold text-emerald-500">475.00</span>
                                </div>
                                <span class="text-xs text-gray-400 line-through">500.00</span>
                            </div>
                            <button onclick="removeCartItem(this)" class="w-8 h-8 rounded-full bg-red-100 text-red-500 flex items-center justify-center hover:bg-red-200 transition-all flex-shrink-0">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                            </button>
                        </div>

                        <!-- Cart Item 3 - Silver Stream -->
                        <div class="flex items-center gap-3 py-3 border-b border-gray-100">
                            <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0">
                                <img src="{{ asset('them2/assets/img/silver-stream.svg') }}" alt="Silver" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="font-bold text-gray-900 text-sm">Silver</h4>
                                <p class="text-xs text-gray-500">2000 Min</p>
                                <span class="inline-block mt-1 px-2 py-0.5 rounded text-xs font-medium bg-emerald-100 text-emerald-600">5%</span>
                            </div>
                            <div class="text-right flex-shrink-0">
                                <div class="flex items-center gap-1 justify-end">
                                    <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="" class="w-4 h-4">
                                    <span class="font-bold text-emerald-500">475.00</span>
                                </div>
                                <span class="text-xs text-gray-400 line-through">500.00</span>
                            </div>
                            <button onclick="removeCartItem(this)" class="w-8 h-8 rounded-full bg-red-100 text-red-500 flex items-center justify-center hover:bg-red-200 transition-all flex-shrink-0">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                            </button>
                        </div>

                        <!-- Cart Item 4 - Upgrade Academic -->
                        <div class="flex items-center gap-3 py-3 border-b border-gray-100">
                            <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0">
                                <img src="{{ asset('them2/assets/img/academic-service.svg') }}" alt="Upgrade" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="font-bold text-gray-900 text-sm">Upgrade</h4>
                                <p class="text-xs text-gray-500">Academic</p>
                                <span class="inline-block mt-1 px-2 py-0.5 rounded text-xs font-medium bg-emerald-100 text-emerald-600">5%</span>
                            </div>
                            <div class="text-right flex-shrink-0">
                                <div class="flex items-center gap-1 justify-end">
                                    <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="" class="w-4 h-4">
                                    <span class="font-bold text-emerald-500">475.00</span>
                                </div>
                                <span class="text-xs text-gray-400 line-through">500.00</span>
                            </div>
                            <button onclick="removeCartItem(this)" class="w-8 h-8 rounded-full bg-red-100 text-red-500 flex items-center justify-center hover:bg-red-200 transition-all flex-shrink-0">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                            </button>
                        </div>
                    </div>

                    <!-- Payment Details -->
                    <h4 class="font-bold text-gray-900 mb-4">Payment Details</h4>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Account Upgrade</span>
                            <span class="text-gray-900">â‚¬ 50.00</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('them2/assets/icons/cashback-badge.svg') }}" alt="5% Cashback" class="h-6">
                                <span class="text-gray-500">YekBÃ»n 5%</span>
                            </div>
                            <span class="text-gray-900">â‚¬ 50.00</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('them2/assets/icons/cashback-badge.svg') }}" alt="5% Cashback" class="h-6">
                                <span class="text-gray-500">YekBun 5%</span>
                            </div>
                            <span class="text-gray-900">â‚¬ 50.00</span>
                        </div>
                        <div class="border-t border-gray-200 pt-3">
                            <div class="flex items-center justify-between text-sm">
                                <span class="font-semibold text-gray-900">Subtotal Net</span>
                                <span class="text-gray-900">â‚¬ 50.00</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('them2/assets/icons/cashback-badge.svg') }}" alt="5% Cashback" class="h-6">
                                <span class="text-gray-500">YekBun 5%</span>
                            </div>
                            <span class="text-gray-900">â‚¬ 50.00</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between mb-6 pt-4 border-t border-gray-200">
                        <span class="font-bold text-emerald-500">To Pay</span>
                        <div class="flex items-center gap-1">
                            <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="" class="w-5 h-5">
                            <span class="text-xl font-bold text-emerald-500">54.00</span>
                        </div>
                    </div>

                    <!-- Payment Methods -->
                    <h4 class="font-bold text-gray-900 mb-4">Payment Methods</h4>
                    <div class="space-y-3 mb-6">
                        <!-- My Balance -->
                        <div class="flex items-center gap-3 p-3 border border-gray-200 rounded-xl hover:border-emerald-300 transition-all cursor-pointer">
                            <div class="w-10 h-10 rounded-lg overflow-hidden flex-shrink-0">
                                <img src="{{ asset('them2/assets/icons/currency.svg') }}" alt="Balance" class="w-full h-full object-contain">
                            </div>
                            <div class="flex-1">
                                <h5 class="font-semibold text-gray-900 text-sm">My Balance</h5>
                                <p class="text-xs text-gray-500">999,999.00</p>
                            </div>
                            <div class="w-5 h-5 rounded-full border-2 border-emerald-500 flex items-center justify-center">
                                <div class="w-2.5 h-2.5 rounded-full bg-emerald-500"></div>
                            </div>
                        </div>
                        <!-- Pay In Store -->
                        <div class="flex items-center gap-3 p-3 border border-gray-200 rounded-xl hover:border-emerald-300 transition-all cursor-pointer">
                            <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center flex-shrink-0">
                                <img src="{{ asset('them2/assets/icons/cash-payment.svg') }}" alt="Pay In Store" class="w-6 h-6">
                            </div>
                            <div class="flex-1">
                                <h5 class="font-semibold text-gray-900 text-sm">Pay In Store</h5>
                                <p class="text-xs text-gray-500">Select on of our Payment Methode</p>
                            </div>
                            <div class="w-5 h-5 rounded-full border-2 border-gray-300"></div>
                        </div>
                        <!-- Bank Transfer -->
                        <div class="flex items-center gap-3 p-3 border border-gray-200 rounded-xl hover:border-emerald-300 transition-all cursor-pointer">
                            <div class="w-10 h-10 rounded-lg overflow-hidden flex-shrink-0">
                                <img src="{{ asset('them2/assets/icons/banktransfer.svg') }}" alt="Bank Transfer" class="w-full h-full object-contain">
                            </div>
                            <div class="flex-1">
                                <h5 class="font-semibold text-gray-900 text-sm">Bank Transfer</h5>
                                <p class="text-xs text-gray-500">Select on of our Payment Methode</p>
                            </div>
                            <div class="w-5 h-5 rounded-full border-2 border-gray-300"></div>
                        </div>
                        <!-- PayPal -->
                        <div class="flex items-center gap-3 p-3 border border-gray-200 rounded-xl hover:border-emerald-300 transition-all cursor-pointer">
                            <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 font-bold text-xs">PayPal</span>
                            </div>
                            <div class="flex-1">
                                <h5 class="font-semibold text-gray-900 text-sm">PayPal</h5>
                                <p class="text-xs text-gray-500">Select on of our Payment Methode</p>
                            </div>
                            <div class="w-5 h-5 rounded-full border-2 border-gray-300"></div>
                        </div>
                    </div>

                    <button class="w-full py-4 rounded-full text-sm font-bold bg-emerald-500 text-white flex items-center justify-center gap-2 hover:bg-emerald-600 hover:shadow-lg transition-all">
                        Check Out
                    </button>
                </div>
            </div>
        </div>

