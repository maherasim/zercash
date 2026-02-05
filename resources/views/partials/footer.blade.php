<footer id="contact" class="bg-white border-t border-gray-200 py-16 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <div class="md:col-span-1">
                <div class="mb-4">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Lumen" class="w-10 h-10" />
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Lumen Finance App, developed by Lumen.tech, is an innovative platform designed for future-oriented financial management and digital engagement.
                </p>
            </div>
            <div>
                <h3 class="text-gray-900 font-bold text-sm uppercase mb-4 relative pb-3">
                    LUMEN - SECTIONS
                    <div class="absolute bottom-0 left-0 w-12 h-px bg-blue-500"><div class="absolute -right-1 -top-1 w-2 h-2 bg-blue-500 rounded-full"></div></div>
                </h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('contact') }}" class="text-gray-600 hover:text-blue-600 text-sm transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-xs text-gray-400 group-hover:text-blue-600"></i><span>Contact us</span></a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-xs text-gray-400 group-hover:text-blue-600"></i><span>News & Feeds</span></a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-xs text-gray-400 group-hover:text-blue-600"></i><span>Multimedia & Stream</span></a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-xs text-gray-400 group-hover:text-blue-600"></i><span>Culture & History</span></a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-xs text-gray-400 group-hover:text-blue-600"></i><span>Services & Ads</span></a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-xs text-gray-400 group-hover:text-blue-600"></i><span>E-Commerce & Shops</span></a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-gray-900 font-bold text-sm uppercase mb-4 relative pb-3">
                    LUMEN - POLICY & TERMS
                    <div class="absolute bottom-0 left-0 w-12 h-px bg-blue-500"><div class="absolute -right-1 -top-1 w-2 h-2 bg-blue-500 rounded-full"></div></div>
                </h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('legal-notice') }}" class="text-gray-600 hover:text-blue-600 text-sm transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-xs text-gray-400 group-hover:text-blue-600"></i><span>Lumen Legal Notice</span></a></li>
                    <li><a href="{{ route('terms') }}" class="text-gray-600 hover:text-blue-600 text-sm transition-colors flex items-center gap-2 group"><i class="fas fa-chevron-right text-xs text-gray-400 group-hover:text-blue-600"></i><span>Lumen Terms & Conditions</span></a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-gray-900 font-bold text-sm uppercase mb-4 relative pb-3">
                    GET THE APP
                    <div class="absolute bottom-0 left-0 w-12 h-px border-b-2 border-dashed border-blue-500"><div class="absolute -right-1 -top-1 w-2 h-2 bg-blue-500 rounded-full"></div></div>
                </h3>
                <div class="space-y-3">
                    <a href="#" class="block rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-xl">
                        <img src="{{ asset('assets/images/googledownload.png') }}" alt="Get it on Google Play" class="w-[146px] bg-black rounded-xl h-[52px] object-contain" />
                    </a>
                    <a href="#" class="block rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-xl">
                        <img src="{{ asset('assets/images/appstoredownload.png') }}" alt="Download on the App Store" class="w-[156px] bg-black rounded-xl h-[52px] object-contain" />
                    </a>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-200 pt-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-600 text-sm">
                    Copyright @ 2025 <a href="#" class="text-blue-600 hover:text-blue-700 transition-colors font-semibold">lumen.tech</a>. All Rights Reserved.
                </p>
                <div class="flex items-center gap-4 text-sm">
                    <a href="{{ route('legal-notice') }}" class="text-gray-600 hover:text-blue-600 transition-colors">Lumen Legal Notice</a>
                    <span class="text-gray-300">|</span>
                    <a href="{{ route('terms') }}" class="text-gray-600 hover:text-blue-600 transition-colors">Lumen Terms & Condition</a>
                    <span class="text-gray-300">|</span>
                    <a href="{{ route('contact') }}" class="text-gray-600 hover:text-blue-600 transition-colors">Contact Lumen</a>
                </div>
            </div>
        </div>
    </div>
</footer>
