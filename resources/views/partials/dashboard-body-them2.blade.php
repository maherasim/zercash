<body class="min-h-screen dark:text-white text-gray-900 font-sans transition-colors duration-300">
    <!-- Header -->
    <header class="bg-white dark:bg-dark-800 border-b border-gray-200 dark:border-white/10 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center gap-3">
                    <a href="{{ route('home') }}">
                        <div class="w-10 h-10 rounded-2xl overflow-hidden">
                            <img src="{{ asset('them2/assets/img/logo.svg') }}" alt="Logo" class="w-full h-full object-contain">
                        </div>
                    </a>
                </div>
                <div class="flex items-center gap-3 sm:gap-6">
                    <div class="relative" id="langDropdownContainer">
                        <button id="langDropdownBtn" class="flex items-center gap-1.5 px-2 py-1.5 rounded-lg hover:bg-gray-100 dark:hover:bg-white/5 transition-all">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                            </svg>
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">EN</span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div id="langDropdown" class="hidden absolute right-0 top-full mt-2 w-32 bg-white dark:bg-dark-700 rounded-xl shadow-xl border dark:border-white/10 border-gray-200 py-1 z-50">
                            <button class="w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-white/5">English</button>
                            <button class="w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-white/5">Deutsch</button>
                            <button class="w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-white/5">Kurdî</button>
                        </div>
                    </div>
                    <button onclick="toggleMobileCart()" class="relative flex items-center gap-2 lg:hidden">
                        <div class="relative">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <span class="absolute -top-2 -right-2 w-5 h-5 bg-red-500 text-white rounded-full text-xs flex items-center justify-center font-bold">4</span>
                        </div>
                    </button>
                    <div class="relative hidden lg:flex items-center gap-2">
                        <div class="relative">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <span class="absolute -top-2 -right-2 w-5 h-5 bg-red-500 text-white rounded-full text-xs flex items-center justify-center font-bold">4</span>
                        </div>
                        <span class="text-xs text-gray-400 dark:text-gray-500">Enterprise Plan</span>
                    </div>
                    <button onclick="openModal('billingModal')" class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg hover:bg-gray-100 dark:hover:bg-white/5 transition-all">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300 hidden sm:block">Billing</span>
                    </button>
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300 hidden sm:block">John Doe</span>
                        <div class="w-9 h-9 rounded-full bg-emerald-500 flex items-center justify-center text-white text-sm font-semibold">JD</div>
                    </div>
                    <a href="#" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white text-sm font-medium rounded-full transition-all" onclick="event.preventDefault(); if(confirm('Logout?')){ sessionStorage.removeItem('isLoggedIn'); sessionStorage.removeItem('userEmail'); window.location.href='{{ route('home') }}'; }">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8">
        @include('partials.dashboard-main-them2')
    </main>

    <!-- Mobile Cart Overlay -->
    <div id="cartOverlay" onclick="toggleMobileCart()" class="lg:hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-30 hidden"></div>

    <!-- Footer -->
    <footer class="glass-card mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-xl overflow-hidden">
                        <img src="{{ asset('them2/assets/img/logo.svg') }}" alt="Logo" class="w-full h-full object-contain">
                    </div>
                    <span class="text-sm dark:text-gray-400 text-gray-600">2024 YekBun. All rights reserved.</span>
                </div>
                <div class="flex items-center gap-6">
                    <a href="{{ route('legal-notice') }}" class="text-sm dark:text-gray-400 text-gray-600 dark:hover:text-white hover:text-gray-900 transition-all">Privacy</a>
                    <a href="{{ route('terms') }}" class="text-sm dark:text-gray-400 text-gray-600 dark:hover:text-white hover:text-gray-900 transition-all">Terms</a>
                    <a href="{{ route('contact') }}" class="text-sm dark:text-gray-400 text-gray-600 dark:hover:text-white hover:text-gray-900 transition-all">Support</a>
                </div>
            </div>
        </div>
    </footer>

    @include('partials.dashboard-modals-them2')
    @include('partials.dashboard-scripts-them2')
</body>
