<header class="fixed top-0 left-0 right-0 bg-white border-b border-gray-200 z-50 shadow-sm">
    <nav class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center gap-2 group cursor-pointer">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="Lumen" class="w-10 h-10" />
        </a>

        <div class="hidden md:flex items-center gap-0 bg-gray-100 rounded-full px-2 py-1">
            <a href="{{ url('/') }}#pricing" class="flex items-center gap-2 text-gray-700 hover:text-blue-600 text-sm font-medium transition-colors duration-300 px-4 py-2 rounded-full">
                <i class="fas fa-tag text-xs"></i>
                <span>Pricing</span>
            </a>
            <a href="{{ url('/') }}#charge-zer" class="flex items-center gap-2 text-gray-700 hover:text-blue-600 text-sm font-medium transition-colors duration-300 px-4 py-2 rounded-full">
                <i class="fas fa-coins text-xs"></i>
                <span>Charge Zer</span>
            </a>
            <a href="{{ route('dashboard') }}" class="flex items-center gap-2 text-gray-700 hover:text-blue-600 text-sm font-medium transition-colors duration-300 px-4 py-2 rounded-full">
                <i class="fas fa-arrow-up text-xs"></i>
                <span>Upgrade account</span>
            </a>
            <div class="w-px h-6 bg-gray-300 mx-1"></div>
            <div class="relative">
                <button id="language-btn" class="flex items-center gap-2 text-gray-700 hover:text-blue-600 transition-colors duration-300 px-3 py-2 rounded-full">
                    <i class="fas fa-globe text-sm"></i>
                    <span class="text-sm font-medium" id="current-lang">EN</span>
                    <i class="fas fa-chevron-down text-xs"></i>
                </button>
                <div id="language-dropdown" class="hidden absolute right-0 mt-2 w-40 bg-white rounded-xl shadow-2xl border border-gray-200 overflow-hidden z-50">
                    <a href="#" class="language-option block px-4 py-3 hover:bg-gray-50 transition-colors text-sm font-medium text-gray-700" data-lang="EN">
                        <div class="flex items-center justify-between"><span>English</span><i class="fas fa-check text-blue-600 hidden" data-check="EN"></i></div>
                    </a>
                    <a href="#" class="language-option block px-4 py-3 hover:bg-gray-50 transition-colors text-sm font-medium text-gray-700" data-lang="DE">
                        <div class="flex items-center justify-between"><span>Deutsch</span><i class="fas fa-check text-blue-600 hidden" data-check="DE"></i></div>
                    </a>
                    <a href="#" class="language-option block px-4 py-3 hover:bg-gray-50 transition-colors text-sm font-medium text-gray-700" data-lang="FR">
                        <div class="flex items-center justify-between"><span>Français</span><i class="fas fa-check text-blue-600 hidden" data-check="FR"></i></div>
                    </a>
                    <a href="#" class="language-option block px-4 py-3 hover:bg-gray-50 transition-colors text-sm font-medium text-gray-700" data-lang="ES">
                        <div class="flex items-center justify-between"><span>Español</span><i class="fas fa-check text-blue-600 hidden" data-check="ES"></i></div>
                    </a>
                </div>
            </div>
            <div class="w-px h-6 bg-gray-300 mx-1"></div>
            <a href="{{ route('login') }}" class="bg-gradient-to-r from-pink-500 to-red-500 hover:from-pink-600 hover:to-red-600 text-white text-sm font-bold px-6 py-2 rounded-full transition-all duration-300 hover:scale-105">
                Log in
            </a>
        </div>

        <button id="mobile-menu-btn" class="md:hidden text-gray-700 hover:text-blue-600 transition-colors">
            <i class="fas fa-bars text-xl"></i>
        </button>
    </nav>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-6 py-4 space-y-4">
            <a href="{{ url('/') }}#pricing" class="block text-gray-700 hover:text-blue-600 text-sm font-medium transition-colors duration-300 py-2">Pricing</a>
            <a href="{{ url('/') }}#charge-zer" class="block text-gray-700 hover:text-blue-600 text-sm font-medium transition-colors duration-300 py-2">Charge Zer</a>
            <a href="{{ route('dashboard') }}" class="block text-gray-700 hover:text-blue-600 text-sm font-medium transition-colors duration-300 py-2">Upgrade account</a>
            <a href="{{ route('login') }}" class="block bg-gradient-to-r from-pink-500 to-red-500 hover:from-pink-600 hover:to-red-600 text-white text-sm font-bold px-6 py-2 rounded-full transition-all duration-300 text-center mt-4">Log in</a>
            <div class="pt-2 border-t border-gray-200">
                <button id="mobile-language-btn" class="flex items-center gap-2 text-gray-700 hover:text-blue-600 transition-colors duration-300 py-2">
                    <i class="fas fa-globe text-sm"></i>
                    <span class="text-sm font-medium" id="mobile-current-lang">EN</span>
                </button>
            </div>
        </div>
    </div>
</header>
