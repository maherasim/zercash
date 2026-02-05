<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Lumen</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Genos:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <style>
      * {
        font-family: "Genos", sans-serif;
      }

      :root {
        --card-bg: #ffffff;
      }

      /* 
       * Outer Gray Background Shape CSS
       * This creates the gray rounded panel with notch effect on top-right corner
       */

      /* Main container - creates the gray background shape */
      .outer-gray-container {
        border-radius: 12.27px;
        position: relative;
        display: inline-block;
      }

      /* Gray background shape using ::before pseudo-element */
      .outer-gray-container::before {
        content: "";
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        --r: 17px;
        --s: 17px;
        border-radius: var(--r);
        --_m: /calc(2 * var(--r)) calc(2 * var(--r)) radial-gradient(
            #000 70%,
            #0000 72%
          ) no-repeat;
        mask: right calc(var(--s) + var(--r)) top 0 var(--_m),
          right calc(var(--s) + var(--r)) var(--_m),
          radial-gradient(var(--s) at 100% 0, #0000 99%, #000 calc(100% + 1px))
            calc(-1 * var(--r)) var(--r) no-repeat,
          conic-gradient(
            at calc(100% - var(--s) - 2 * var(--r))
              calc(var(--s) + 2 * var(--r)),
            #0000 25%,
            #000 0
          );
        background-color: #ffffff;
        z-index: 0;
      }

      /* Ensure all direct children are above the background */
      .outer-gray-container > * {
        position: relative;
        z-index: 1;
      }

      /* Custom card content */
      .custom-card {
        background: transparent;
        box-sizing: border-box;
        position: relative;
      }

      /* 3. Medal Positioning */
      /* This ensures the medal always stays in the top-right notch 
         regardless of the card's width/height. */
      .medal-overlay {
        position: absolute;
        top: 12px;
        right: 12px;
        z-index: 20;
        pointer-events: none;
      }

      /* 4. Layout Container for the Sidebar */
      .sidebar-stack {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1.5rem; /* Space between each card */
        width: 100%;
        padding: 1rem;
      }

      /* 5. Background Image Helper */
      /* Use this if your cards have decorative background SVGs like Subtract.svg */
      .bg-shape-img {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      }

      /* Pricing Toggle Cards */
      .pricing-toggle-card {
        transition: all 0.3s ease;
      }

      .pricing-toggle-card.active {
        background-color: #ffffff;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
          0 2px 4px -1px rgba(0, 0, 0, 0.06);
      }

      .pricing-toggle-card:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 8px -1px rgba(0, 0, 0, 0.1),
          0 4px 6px -1px rgba(0, 0, 0, 0.06);
      }

      /* Dashboard Plan Toggle Animation */
      .dashboard-toggle-wrapper {
        position: relative;
        display: inline-flex;
        background: #f3f4f6;
        border-radius: 12px;
        padding: 4px;
        overflow: hidden;
      }

      .dashboard-toggle-wrapper .dashboard-toggle-option {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: center;
        padding: 8px 12px;
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
        background: transparent;
        border: none;
        outline: none;
      }

      .dashboard-toggle-wrapper .dashboard-toggle-option.active {
        background: white;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      }

      .dashboard-toggle-wrapper .dashboard-toggle-slider {
        position: absolute;
        top: 4px;
        left: 4px;
        height: calc(100% - 8px);
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transition: left 0.3s cubic-bezier(0.4, 0, 0.2, 1),
          width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: 1;
      }

      /* Playlist Toggle Animation */
      .playlist-toggle-wrapper {
        position: relative;
        display: inline-flex;
        background: #22c55e;
        border-radius: 9999px;
        padding: 2px;
        overflow: hidden;
        height: 24px;
      }

      .playlist-toggle-wrapper .toggle-option {
        position: relative;
        z-index: 2;
        padding: 2px 6px;
        font-size: 10px;
        font-weight: 500;
        border-radius: 9999px;
        cursor: pointer;
        transition: color 0.3s ease;
        background: transparent;
        border: none;
        outline: none;
        display: flex;
        align-items: center;
      }

      .playlist-toggle-wrapper .toggle-option.active {
        color: #374151;
      }

      .playlist-toggle-wrapper .toggle-option:not(.active) {
        color: white;
      }

      .playlist-toggle-wrapper .toggle-slider {
        position: absolute;
        top: 2px;
        left: 2px;
        height: calc(100% - 4px);
        width: 50px;
        background: white;
        border-radius: 9999px;
        transition: left 0.3s cubic-bezier(0.4, 0, 0.2, 1),
          width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: 1;
      }

      /* Responsive adjustments */
      @media (min-width: 1024px) {
        .playlist-toggle-wrapper {
          padding: 2px;
          height: 20px;
        }
        .playlist-toggle-wrapper .toggle-option {
          padding: 1px 4px;
          font-size: 8px;
        }
        .playlist-toggle-wrapper .toggle-slider {
          top: 2px;
          height: calc(100% - 4px);
          width: 38px;
        }
      }

      @media (min-width: 1280px) {
        .playlist-toggle-wrapper {
          padding: 2px;
          height: 22px;
        }
        .playlist-toggle-wrapper .toggle-option {
          padding: 2px 5px;
          font-size: 9px;
        }
        .playlist-toggle-wrapper .toggle-slider {
          top: 2px;
          height: calc(100% - 4px);
          width: 44px;
        }
      }

      @media (min-width: 1536px) {
        .playlist-toggle-wrapper {
          padding: 2px;
          height: 26px;
        }
        .playlist-toggle-wrapper .toggle-option {
          padding: 2px 8px;
          font-size: 10px;
        }
        .playlist-toggle-wrapper .toggle-slider {
          top: 2px;
          height: calc(100% - 4px);
          width: 52px;
        }
      }

      /* Header scroll effect - rounded with gaps */
      header {
        transition: all 0.3s ease-in-out;
        border-radius: 0;
        left: 0;
        right: 0;
      }

      header.scrolled {
        left: 1rem;
        right: 1rem;
        top: 0.5rem;
        border-radius: 9999px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
          0 2px 4px -1px rgba(0, 0, 0, 0.06);
      }

      @media (max-width: 768px) {
        header.scrolled {
          left: 0.75rem;
          right: 0.75rem;
        }
      }

      /* Custom scrollbar styles */
      .scrollbar-thin::-webkit-scrollbar {
        width: 6px;
      }

      .scrollbar-thin::-webkit-scrollbar-track {
        background: transparent;
      }

      .scrollbar-thin::-webkit-scrollbar-thumb {
        background: #d1d5db;
        border-radius: 3px;
      }

      .scrollbar-thin::-webkit-scrollbar-thumb:hover {
        background: #9ca3af;
      }

      /* Hide scrollbar for Firefox */
      .scrollbar-thin {
        scrollbar-width: thin;
        scrollbar-color: #d1d5db transparent;
      }

    </style>
    <svg width="0" height="0" style="position: absolute">
      <defs>
        <clipPath id="card-shape" clipPathUnits="objectBoundingBox">
          <path
            d="M 0,0.1 
                   C 0,0.03 0.03,0 0.1,0 
                   L 0.6,0 
                   C 0.68,0 0.72,0.02 0.75,0.08 
                   A 0.25,0.25 0 0 0 0.92,0.25 
                   C 0.98,0.28 1,0.32 1,0.4 
                   L 1,0.9 
                   C 1,0.97 0.97,1 0.9,1 
                   L 0.1,1 
                   C 0.03,1 0,0.97 0,0.9 
                   Z"
          />
        </clipPath>
        <clipPath id="folder-clip" clipPathUnits="objectBoundingBox">
          <path
            d="M 0.1,0 
                   L 0.7,0 
                   C 0.74,0, 0.75,0.02, 0.75,0.1 
                   L 0.75,0.18 
                   C 0.75,0.26, 0.76,0.28, 0.82,0.28 
                   L 0.92,0.28 
                   C 0.98,0.28, 1,0.3, 1,0.38 
                   L 1,0.9 
                   C 1,0.98, 0.98,1, 0.92,1 
                   L 0.08,1 
                   C 0.02,1, 0,0.98, 0,0.9 
                   L 0,0.1 
                   C 0,0.02, 0.02,0, 0.08,0 
                   Z"
          />
        </clipPath>
        <clipPath
          id="fixed-top-rounded-bottom"
          clipPathUnits="objectBoundingBox"
        >
          <path
            d="M 0.1,0 
                   L 0.65,0 
                   C 0.72,0, 0.75,0.02, 0.75,0.08 
                   L 0.75,0.1 
                   C 0.75,0.18, 0.78,0.22, 0.85,0.22 
                   L 0.92,0.22 
                   C 0.98,0.22, 1,0.25, 1,0.32 
                   L 1,0.9 
                   C 1,0.96, 0.96,1, 0.9,1 
                   L 0.1,1 
                   C 0.04,1, 0,0.96, 0,0.9 
                   L 0,0.1 
                   C 0,0.04, 0.04,0, 0.1,0 Z"
          />
        </clipPath>
      </defs>
    </svg>
  </head>
  <body style="font-family: 'Genos', sans-serif;background-color: #f2f2f2; ">
    <!-- Header -->
    <header
      class="fixed  top-0 left-0 right-0 bg-white border-b border-gray-200 z-50 shadow-sm transition-all duration-300 ease-in-out"
    >
      <nav
        class="max-w-[95%] mx-auto px-4 py-4 flex items-center justify-between"
      >
        <!-- Left Side: Logo -->
        <div class="flex items-center gap-2 group cursor-pointer">
          <a href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="Lumen" class="w-10 h-10" />
          </a>
        </div>

        <!-- Right Side: Navigation Links in Light Grey Pill Container -->
        <div
          class="hidden md:flex items-center gap-0 bg-gray-100 rounded-full px-2 overflow-visible"
        >
          <!-- Language Selector -->
          <div class="relative">
            <button
              id="language-btn"
              class="flex items-center gap-2 text-gray-700 hover:text-blue-600 transition-colors duration-300 px-4 py-2 rounded-full"
            >
              <i class="fas fa-globe text-sm"></i>
              <span class="text-sm font-medium" id="current-lang">EN</span>
              <i class="fas fa-chevron-down text-xs"></i>
            </button>

            <!-- Language Dropdown -->
            <div
              id="language-dropdown"
              class="hidden absolute right-0  w-40 bg-white rounded-xl shadow-2xl border border-gray-200 overflow-hidden z-50"
            >
              <a
                href="#"
                class="language-option block px-4 py-2 hover:bg-gray-50 transition-colors text-sm font-medium text-gray-700"
                data-lang="EN"
              >
                <div class="flex items-center justify-between">
                  <span>English</span>
                  <i
                    class="fas fa-check text-blue-600 hidden"
                    data-check="EN"
                  ></i>
                </div>
              </a>
              <a
                href="#"
                class="language-option block px-4 py-2 hover:bg-gray-50 transition-colors text-sm font-medium text-gray-700"
                data-lang="DE"
              >
                <div class="flex items-center justify-between">
                  <span>Deutsch</span>
                  <i
                    class="fas fa-check text-blue-600 hidden"
                    data-check="DE"
                  ></i>
                </div>
              </a>
              <a
                href="#"
                class="language-option block px-4 py-2 hover:bg-gray-50 transition-colors text-sm font-medium text-gray-700"
                data-lang="FR"
              >
                <div class="flex items-center justify-between">
                  <span>Français</span>
                  <i
                    class="fas fa-check text-blue-600 hidden"
                    data-check="FR"
                  ></i>
                </div>
              </a>
              <a
                href="#"
                class="language-option block px-4 py-2 hover:bg-gray-50 transition-colors text-sm font-medium text-gray-700"
                data-lang="ES"
              >
                <div class="flex items-center justify-between">
                  <span>Español</span>
                  <i
                    class="fas fa-check text-blue-600 hidden"
                    data-check="ES"
                  ></i>
                </div>
              </a>
            </div>
          </div>
          <!-- Vertical Separator -->
          <div class="w-px bg-gray-300 mx-1"></div>
          <!-- Cart Button -->
          <button
            onclick="showCart()"
            class="relative flex items-center gap-2 text-gray-700 hover:text-blue-600 transition-colors duration-300 px-3 py-2 rounded-full overflow-visible"
          >
            <i class="fas fa-shopping-cart text-sm"></i>
            <span class="text-sm font-medium">Cart</span>
            <span
              id="header-cart-count"
              class="absolute top-1 -right-[2px] bg-red-500 text-white text-xs font-bold rounded-full w-4 h-4 flex items-center justify-center"
              >0</span
            >
          </button>
          <!-- Vertical Separator -->
          <div class="w-px h-6 bg-gray-300 mx-1"></div>
          <!-- User Info -->
          <div class="flex items-center gap-2 px-3 py-1">
            <div class="text-right hidden lg:block">
              <div class="text-sm font-semibold text-gray-900" id="user-name">
                John Doe
              </div>
              <div class="text-xs text-gray-600" id="account-type">
                Free Plan
              </div>
            </div>
            <div
              class="w-8 h-8 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full flex items-center justify-center text-white font-semibold text-xs"
              id="user-avatar"
            >
              JD
            </div>
          </div>
          <!-- Vertical Separator -->
          <div class="w-px h-6 bg-gray-300 mx-1"></div>
          <!-- Logout Button -->
          <button
            id="logout-btn"
            class="bg-gradient-to-r from-pink-500 to-red-500 hover:from-pink-600 hover:to-red-600 text-white text-sm font-bold px-6 py-2 rounded-full transition-all duration-300 hover:scale-105 flex items-center gap-2"
          >
            <i class="fas fa-sign-out-alt text-xs"></i>
            <span>Logout</span>
          </button>
        </div>

        <!-- Mobile Menu Button (Right Side) -->
        <button
          id="mobile-menu-btn"
          class="block lg:hidden text-gray-700 hover:text-blue-600 transition-colors"
        >
          <i class="fas fa-bars text-xl"></i>
        </button>
      </nav>

      <!-- Mobile Menu -->
      <div
        id="mobile-menu"
        class="hidden md:hidden bg-white border-t border-gray-200"
      >
        <div class="max-w-7xl mx-auto px-6 py-4 space-y-4">
          <div class="pt-2 border-t border-gray-200">
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center gap-3">
                <div
                  class="w-10 h-10 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full flex items-center justify-center text-white font-semibold"
                  id="mobile-user-avatar"
                >
                  JD
                </div>
                <div>
                  <div
                    class="text-sm font-semibold text-white"
                    id="mobile-user-name"
                  >
                    John Doe
                  </div>
                  <div class="text-xs text-gray-600" id="mobile-account-type">
                    Free Plan
                  </div>
                </div>
              </div>
            </div>
            <button
              id="mobile-logout-btn"
              class="w-full bg-gradient-to-r from-pink-500 to-red-500 hover:from-pink-600 hover:to-red-600 text-white text-sm font-bold px-6 py-2 rounded-full transition-all duration-300 text-center"
            >
              <i class="fas fa-sign-out-alt mr-2"></i>Logout
            </button>
          </div>
          <div class="pt-2 border-t border-gray-200">
            <button
              id="mobile-language-btn"
              class="flex items-center gap-2 text-gray-700 hover:text-blue-600 transition-colors duration-300 py-2"
            >
              <i class="fas fa-globe text-sm"></i>
              <span class="text-sm font-medium" id="mobile-current-lang"
                >EN</span
              >
            </button>
          </div>
        </div>
      </div>
    </header>

    <!-- Dashboard Content -->
    <!-- Sidebar Overlay for Medium Devices -->
    <div
      id="sidebar-overlay"
      class="hidden fixed inset-0 bg-black bg-opacity-50 z-40"
    ></div>

    <!-- Medium Device Sidebar (Overlay from Right) -->
    <div
      id="sidebar-md"
      class="block lg:hidden fixed right-0 top-0 h-full z-50 w-80 transform translate-x-full transition-transform duration-300 ease-in-out space-y-2 bg-gray-100 rounded-2xl overflow-y-auto p-4"
    >
      <!-- Close Button for Medium Devices -->
      <button
        id="sidebar-close"
        class="absolute top-4 right-4 text-gray-700 hover:text-gray-900 z-10"
      >
        <i class="fas fa-times text-xl"></i>
      </button>

      <!-- Navbar Buttons for Small Devices Only -->
      <div class="md:hidden flex flex-col gap-3 mb-6 pt-8">
        <!-- Language Selector -->
        <div class="relative">
          <button
            id="sidebar-language-btn"
            class="w-full flex items-center justify-between gap-2 text-gray-700 hover:text-blue-600 transition-colors duration-300 px-4 py-2 rounded-full bg-white border border-gray-200"
          >
            <div class="flex items-center gap-2">
              <i class="fas fa-globe text-sm"></i>
              <span class="text-sm font-medium" id="sidebar-current-lang"
                >EN</span
              >
            </div>
            <i class="fas fa-chevron-down text-xs"></i>
          </button>

          <!-- Language Dropdown -->
          <div
            id="sidebar-language-dropdown"
            class="hidden absolute left-0 right-0 mt-2 w-full bg-white rounded-xl shadow-2xl border border-gray-200 overflow-hidden z-50"
          >
            <a
              href="#"
              class="sidebar-language-option block px-4 py-3 hover:bg-gray-50 transition-colors text-sm font-medium text-gray-700"
              data-lang="EN"
            >
              <div class="flex items-center justify-between">
                <span>English</span>
                <i
                  class="fas fa-check text-blue-600 hidden"
                  data-check="EN"
                ></i>
              </div>
            </a>
            <a
              href="#"
              class="sidebar-language-option block px-4 py-3 hover:bg-gray-50 transition-colors text-sm font-medium text-gray-700"
              data-lang="DE"
            >
              <div class="flex items-center justify-between">
                <span>Deutsch</span>
                <i
                  class="fas fa-check text-blue-600 hidden"
                  data-check="DE"
                ></i>
              </div>
            </a>
            <a
              href="#"
              class="sidebar-language-option block px-4 py-3 hover:bg-gray-50 transition-colors text-sm font-medium text-gray-700"
              data-lang="FR"
            >
              <div class="flex items-center justify-between">
                <span>Français</span>
                <i
                  class="fas fa-check text-blue-600 hidden"
                  data-check="FR"
                ></i>
              </div>
            </a>
            <a
              href="#"
              class="sidebar-language-option block px-4 py-3 hover:bg-gray-50 transition-colors text-sm font-medium text-gray-700"
              data-lang="ES"
            >
              <div class="flex items-center justify-between">
                <span>Español</span>
                <i
                  class="fas fa-check text-blue-600 hidden"
                  data-check="ES"
                ></i>
              </div>
            </a>
          </div>
        </div>

        <!-- Cart Button -->
        <button
          onclick="showCart()"
          class="relative w-full flex items-center justify-between gap-2 text-gray-700 hover:text-blue-600 transition-colors duration-300 px-4 py-2 rounded-full bg-white border border-gray-200 overflow-visible"
        >
          <div class="flex items-center gap-2">
            <i class="fas fa-shopping-cart text-sm"></i>
            <span class="text-sm font-medium">Cart</span>
          </div>
          <span
            id="sidebar-cart-count"
            class="bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center"
            >0</span
          >
        </button>

        <!-- User Info -->
        <div
          class="flex items-center justify-between gap-3 px-4 py-2 bg-white border border-gray-200 rounded-full"
        >
          <div class="flex items-center gap-3">
            <div
              class="w-8 h-8 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full flex items-center justify-center text-white font-semibold text-xs"
              id="sidebar-user-avatar"
            >
              JD
            </div>
            <div class="text-left">
              <div
                class="text-sm font-semibold text-gray-900"
                id="sidebar-user-name"
              >
                John Doe
              </div>
              <div class="text-xs text-gray-600" id="sidebar-account-type">
                Free Plan
              </div>
            </div>
          </div>
        </div>

        <!-- Logout Button -->
        <button
          id="sidebar-logout-btn"
          class="w-full bg-gradient-to-r from-pink-500 to-red-500 hover:from-pink-600 hover:to-red-600 text-white text-sm font-bold px-6 py-2 rounded-full transition-all duration-300 hover:scale-105 flex items-center justify-center gap-2"
        >
          <i class="fas fa-sign-out-alt text-xs"></i>
          <span>Logout</span>
        </button>
      </div>

      <!-- Profile Header -->
      <div class="relative top-2 left-2 items-start justify-between">
        <img src="{{ asset('assets/images/medal.svg') }}" alt="Medal" class="w-9 h-11" />
      </div>
      <div class="bg-gray-100 rounded-2xl">
        <div class="relative flex justify-center mb-4">
          <div class="relative">
            <img
              src="https://i.pravatar.cc/150?img=12"
              alt="Profile"
              class="lg:w-[149px] lg:h-[149px] xl:w-[249px] xl:h-[249px] rounded-full object-cover"
            />
          </div>
        </div>
        <h2 class="text-2xl font-bold text-gray-900 text-center mb-2">
          Username
        </h2>
        <div class="flex items-center justify-center gap-2 text-gray-600">
          <i class="fas fa-flag text-sm"></i>
          <span class="text-base">Hurban</span>
        </div>
      </div>

      <!-- Subscriptions -->
      <div class="bg-gray-100 rounded-2xl w-full overflow-hidden">
        <div class="space-y-1 -mt-16 w-full">
          <!-- EDUCATED Card -->
          <div class="my-auto">
            <div
              class="outer-gray-container lg:w-full lg:h-[14vh] xl:h-[16vh] lg:min-w-[184px] lg:min-h-[128px] xl:min-w-[204px] xl:min-h-[144px] mt-20 flex justify-center mx-auto"
            >
              <div class="custom-card w-full h-full">
                <div class="flex items-center justify-between">
                  <h3
                    class="text-base font-medium lg:text-xs xl:text-sm mb-2 px-2"
                    style="color: #6b7280"
                  >
                    Subscribtions
                  </h3>
                  <img
                    src="{{ asset('assets/images/medal.svg') }}"
                    alt="Playlist Icon"
                    class="w-6 h-6 lg:w-6 lg:h-6 xl:w-6 xl:h-6"
                  />
                </div>
                <h4
                  class="text-2xl font-bold mb-1 lg:text-sm xl:text-[20px] mb-2 px-2"
                  style="color: #1f2937"
                >
                  EDUCATED
                </h4>
                <div
                  class="flex flex-wrap gap-2 lg:gap-2 mb-1 justify-between px-2"
                >
                  <span
                    class="px-2 py-1 bg-green-500 text-white text-xs rounded-xl lg:text-[8px] lg:px-1 lg:py-0.5 xl:text-[10px] xl:px-1.5 xl:py-0.5"
                    >monthly</span
                  >
                  <span
                    class="px-2 py-1 bg-green-500 text-white text-xs rounded-xl lg:text-[8px] lg:px-1 lg:py-0.5 xl:text-[10px] xl:px-1.5 xl:py-0.5"
                    >Renew 25.01.2026</span
                  >
                </div>
                <div
                  class="flex flex-row items-stretch mb-1 gap-5 rounded-b-full lg:gap-0.5 px-1 pt-2"
                >
                  <div
                    class="px-3 py-2 bg-green-100 flex flex-col items-center justify-center gap-2 rounded-md rounded-bl-xl lg:px-1.5 lg:py-1 lg:gap-0.5 xl:px-2 xl:py-1.5 xl:gap-1 flex-1"
                  >
                    <div class="flex flex-row items-center lg:gap-0.5 xl:gap-1">
                      <img
                        src="{{ asset('assets/images/currency.svg') }}"
                        alt="Currency"
                        class="w-5 h-5 lg:w-3 lg:h-3 xl:w-4 xl:h-4"
                      />
                      <span
                        class="text-lg font-bold lg:text-xs xl:text-sm"
                        style="color: #1f2937"
                        >500.00</span
                      >
                    </div>
                    <p
                      class="text-[12px] font-medium lg:text-[8px] xl:text-[10px]"
                      style="color: #15803d"
                    >
                      5% CASHBACK
                    </p>
                  </div>
                  <div
                    style="background-color: #fee2e2"
                    class="flex flex-col items-center justify-center gap-2 px-3 py-2 rounded-md rounded-br-xl lg:px-1.5 lg:py-1 lg:gap-0.5 xl:px-2 xl:py-1.5 xl:gap-1 flex-1"
                  >
                    <span
                      class="text-xs font-medium lg:text-[8px] xl:text-[10px]"
                      style="color: #dc2626"
                      >Deactivated</span
                    >
                    <label
                      class="relative inline-flex items-center cursor-pointer"
                    >
                      <input type="checkbox" class="sr-only peer" />
                      <div
                        class="w-11 h-6 bg-red-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-red-500 lg:w-7 lg:h-4 lg:after:h-3 lg:after:w-3 xl:w-9 xl:h-5 xl:after:h-4 xl:after:w-4"
                      ></div>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <!-- ACADEMIC Card -->
            <div
              class="outer-gray-container lg:w-full lg:h-[14vh] xl:h-[16vh] lg:min-w-[184px] lg:min-h-[124px] xl:min-w-[214px] xl:min-h-[144px] mt-2 flex justify-center mx-auto"
            >
              <div class="custom-card w-full h-full">
                <div class="flex items-center justify-between">
                  <h3
                    class="text-base font-medium lg:text-xs xl:text-sm mb-2 px-2"
                    style="color: #6b7280"
                  >
                    Subscribtions
                  </h3>
                  <img
                    src="{{ asset('assets/images/medal.svg') }}"
                    alt="Playlist Icon"
                    class="w-6 h-6 lg:w-6 lg:h-6 xl:w-6 xl:h-6"
                  />
                </div>
                <h4
                  class="text-2xl font-bold mb-1 lg:text-sm xl:text-base mb-2 px-2"
                  style="color: #1f2937"
                >
                  ACADEMIC
                </h4>
                <div
                  class="flex flex-wrap gap-2 mb-1 lg:gap-1 mb-2 justify-between px-2"
                >
                  <span
                    class="px-2 py-1 bg-green-500 text-white text-xs rounded-xl lg:text-[8px] lg:px-1 lg:py-0.5 xl:text-[10px] xl:px-1.5 xl:py-0.5"
                    >yearly</span
                  >
                  <span
                    class="px-2 py-1 bg-green-500 text-white text-xs rounded-xl lg:text-[8px] lg:px-1 lg:py-0.5 xl:text-[10px] xl:px-1.5 xl:py-0.5"
                    >Renew 25.01.2026</span
                  >
                </div>
                <div
                  class="flex flex-row items-stretch mb-1 gap-1 rounded-b-full lg:gap-0.5 px-1"
                >
                  <div
                    class="px-3 py-2 bg-green-100 flex flex-col items-center justify-center gap-2 rounded-md rounded-bl-xl lg:px-1.5 lg:py-1 lg:gap-0.5 xl:px-2 xl:py-1.5 xl:gap-1 flex-1"
                  >
                    <div class="flex flex-row items-center lg:gap-0.5 xl:gap-1">
                      <img
                        src="{{ asset('assets/images/currency.svg') }}"
                        alt="Currency"
                        class="w-5 h-5 lg:w-3 lg:h-3 xl:w-4 xl:h-4"
                      />
                      <span
                        class="text-lg font-bold lg:text-xs xl:text-sm"
                        style="color: #1f2937"
                        >5000.00</span
                      >
                    </div>
                    <p
                      class="text-[12px] font-medium lg:text-[8px] xl:text-[10px]"
                      style="color: #15803d"
                    >
                      5% CASHBACK
                    </p>
                  </div>
                  <div
                    class="bg-green-100 flex flex-col items-center justify-center gap-2 px-3 py-2 rounded-md rounded-br-xl lg:px-1.5 lg:py-1 lg:gap-0.5 xl:px-2 xl:py-1.5 xl:gap-1 flex-1"
                  >
                    <span
                      class="text-xs font-medium lg:text-[8px] xl:text-[10px]"
                      style="color: #15803d"
                      >Activate It</span
                    >
                    <label
                      class="relative inline-flex items-center cursor-pointer"
                    >
                      <input type="checkbox" class="sr-only peer" />
                      <div
                        class="w-11 h-6 bg-gray-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500 lg:w-7 lg:h-4 lg:after:h-3 lg:after:w-3 xl:w-9 xl:h-5 xl:after:h-4 xl:after:w-4"
                      ></div>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <!-- CULTIVATED Card -->
            <div
              class="outer-gray-container lg:w-full lg:h-[8vh] xl:h-[9vh] lg:min-w-[184px] lg:min-h-[70px] xl:min-w-[214px] xl:min-h-[79px] mt-2 flex justify-center mx-auto"
            >
              <div class="custom-card w-full h-full px-2">
                <div class="flex items-center justify-between">
                  <h3
                    class="text-base font-medium lg:text-xs xl:text-sm mb-2"
                    style="color: #6b7280"
                  >
                    Subscribtions
                  </h3>
                  <img
                    src="{{ asset('assets/images/freemedal.svg') }}"
                    alt="Playlist Icon"
                    class="w-6 h-6 lg:w-6 lg:h-6 xl:w-6 xl:h-6"
                  />
                </div>
                <h4
                  class="text-2xl font-bold mb-1 lg:text-sm xl:text-base mb-1"
                  style="color: #1f2937"
                >
                  CULTIVATED
                </h4>
                <div class="flex justify-center mb-2 px-2">
                  <span
                    class="px-4 py-1 bg-green-500 text-white text-xs rounded-xl lg:text-[8px] lg:py-0.5 xl:text-[10px]"
                    >Free</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- My QR-Code -->
        <div class="p-3">
          <div
            class="outer-gray-container lg:w-full lg:h-[22vh] xl:h-[28vh] lg:min-w-[194px] lg:min-h-[204px] xl:min-w-[224px] xl:min-h-[264px] lg:px-[18px] xl:px-[20px] mt-2 mx-auto"
          >
            <div class="custom-card w-[270px] h-full px-2 lg:p-3 flex flex-col">
              <h3
                class="text-base font-medium lg:text-lg lg:font-bold text-gray-400 mb-2"
              >
                My QR-Code
              </h3>
              <img
                src="{{ asset('assets/images/qr.svg') }}"
                alt="QR Code"
                class="w-full object-contain lg:h-[14vh] xl:h-[18vh] lg:min-h-[130px] xl:min-h-[180px]"
              />
            </div>
          </div>
        </div>

        <!-- My Balance & My Cashback -->
        <div class="grid grid-cols-1 gap-4">
          <!-- My Balance -->
          <div
            class="outer-gray-container lg:w-full lg:h-[9vh] xl:h-[11vh] lg:min-w-[184px] lg:min-h-[84px] xl:min-w-[214px] xl:min-h-[99px] mx-auto"
          >
            <div
              class="custom-card w-[270px] h-full px-2 lg:py-1 flex flex-col"
            >
              <div class="flex items-center justify-between mb-2">
                <h3
                  class="text-base font-medium lg:text-xs xl:text-sm text-gray-400"
                >
                  My Balance
                </h3>
                <img
                  src="{{ asset('assets/images/wallet.svg') }}"
                  alt="Wallet"
                  class="w-6 h-6 lg:w-5 lg:h-5 xl:w-6 xl:h-6"
                />
              </div>
              <div class="flex flex-col items-center">
                <img
                  src="{{ asset('assets/images/currency.svg') }}"
                  alt="Currency"
                  class="w-10 h-10 lg:w-6 lg:h-6 xl:w-8 xl:h-8 mb-1"
                  style="
                    filter: brightness(0) saturate(100%) invert(77%) sepia(95%)
                      saturate(1352%) hue-rotate(5deg) brightness(102%)
                      contrast(101%);
                  "
                />
                <span
                  class="text-2xl font-bold lg:text-base xl:text-xl"
                  style="color: #1f2937"
                  >999.999.00</span
                >
              </div>
            </div>
          </div>

          <!-- My Cashback -->
          <div
            class="outer-gray-container lg:w-full lg:h-[9vh] xl:h-[11vh] lg:min-w-[184px] lg:min-h-[84px] xl:min-w-[214px] xl:min-h-[99px] mt-2 mx-auto"
          >
            <div
              class="custom-card w-[270px] h-full px-2 lg:py-1 flex flex-col"
            >
              <div class="flex items-center justify-between mb-2">
                <h3
                  class="text-base font-medium lg:text-xs xl:text-sm text-gray-400"
                >
                  My Cashback
                </h3>
                <img
                  src="{{ asset('assets/images/coin.svg') }}"
                  alt="Coin"
                  class="w-6 h-6 lg:w-5 lg:h-5 xl:w-6 xl:h-6"
                />
              </div>
              <div class="flex flex-col items-center">
                <img
                  src="{{ asset('assets/images/currency.svg') }}"
                  alt="Currency"
                  class="w-10 h-10 lg:w-6 lg:h-6 xl:w-8 xl:h-8 mb-1"
                  style="
                    filter: brightness(0) saturate(100%) invert(77%) sepia(95%)
                      saturate(1352%) hue-rotate(5deg) brightness(102%)
                      contrast(101%);
                  "
                />
                <span
                  class="text-2xl font-bold lg:text-base xl:text-xl"
                  style="color: #1f2937"
                  >999.999.00</span
                >
              </div>
            </div>
          </div>
        </div>

        <!-- My Playlist -->
        <div
          class="outer-gray-container mx-auto lg:w-full lg:h-[42vh] xl:h-[48vh] lg:min-w-[194px] lg:min-h-[394px] xl:min-w-[224px] xl:min-h-[444px] mt-2"
        >
          <div class="custom-card w-full h-full flex flex-col">
            <div
              class="flex items-center justify-between mb-4 lg:mb-4 xl:mb-4 drop-shadow-xl"
            >
              <h3
                class="text-lg font-bold lg:text-lg xl:text-lg pl-4"
                style="color: #9ca3af"
              >
                My Playlist
              </h3>
              <img
                src="{{ asset('assets/images/playlisticon.svg') }}"
                alt="Playlist Icon"
                class="w-6 h-6 lg:w-6 lg:h-6 xl:w-6 xl:h-6"
              />
            </div>
            <div
              class="space-y-3 lg:space-y-1 xl:space-y-3 flex flex-col items-center"
            >
              <!-- Free List -->
              <div
                class="outer-gray-container drop-shadow-2xl w-[90%] lg:w-[85%] xl:w-[90%]"
              >
                <div
                  class="custom-card px-2 py-1 flex flex-col w-full lg:w-full lg:h-auto mx-auto"
                >
                  <div class="flex items-center justify-between mb-2">
                    <h4
                      class="font-semibold text-gray-900 lg:text-sm xl:text-base"
                    >
                      Free List
                    </h4>
                    <div
                      class="w-6 h-6 lg:w-5 lg:h-5 bg-green-500 rounded-full flex items-center justify-center"
                    >
                      <img
                        src="{{ asset('assets/images/check.svg') }}"
                        alt="Playlist Icon"
                        class="w-6 h-6 lg:w-6 lg:h-6 xl:w-6 xl:h-6"
                      />
                    </div>
                  </div>
                  <p
                    class="text-xs lg:text-[10px] xl:text-xs font-bold text-gray-900 mb-2"
                  >
                    LIST TITLE
                  </p>
                  <div class="flex gap-2 lg:gap-1.5">
                    <span
                      class="px-2 py-1 lg:px-1.5 lg:py-0.5 bg-green-100 text-green-700 text-xs lg:text-[10px] rounded-xl"
                      >Free</span
                    >
                    <span
                      class="px-2 py-1 lg:px-1.5 lg:py-0.5 bg-green-100 text-green-700 text-xs lg:text-[10px] rounded-xl"
                      >25 Song</span
                    >
                  </div>
                </div>
              </div>

              <!-- Bronze List -->
              <div
                class="outer-gray-container drop-shadow-2xl w-[90%] lg:w-[85%] xl:w-[90%] mx-auto"
              >
                <div
                  class="custom-card px-2 py-1 flex flex-col w-full lg:w-full lg:h-auto"
                >
                  <div class="flex items-center justify-between mb-2">
                    <h4
                      class="font-semibold text-gray-900 lg:text-sm xl:text-base"
                    >
                      Bronze list
                    </h4>
                    <div
                      class="w-6 h-6 lg:w-5 lg:h-5 bg-green-500 rounded-full flex items-center justify-center"
                    >
                      <img
                        src="{{ asset('assets/images/check.svg') }}"
                        alt="Playlist Icon"
                        class="w-6 h-6 lg:w-6 lg:h-6 xl:w-6 xl:h-6"
                      />
                    </div>
                  </div>
                  <p
                    class="text-xs lg:text-[10px] xl:text-xs font-bold text-gray-900 mb-2"
                  >
                    LIST TITLE
                  </p>
                  <div class="flex gap-2 lg:gap-1.5">
                    <span
                      class="px-2 py-1 lg:px-1.5 lg:py-0.5 bg-green-100 text-green-700 text-xs lg:text-[10px] rounded-xl"
                      >Monthly</span
                    >
                    <span
                      class="px-2 py-1 lg:px-1.5 lg:py-0.5 bg-green-100 text-green-700 text-xs lg:text-[10px] rounded-xl"
                      >50 Song</span
                    >
                  </div>
                </div>
              </div>

              <!-- Silver List -->
              <div
                class="outer-gray-container drop-shadow-2xl w-[90%] lg:w-[85%] xl:w-[90%] mx-auto"
              >
                <div
                  class="custom-card px-2 py-1 flex flex-col w-full lg:w-full lg:h-auto"
                >
                  <div class="flex items-center justify-between mb-2">
                    <h4
                      class="font-semibold text-gray-900 lg:text-sm xl:text-base"
                    >
                      Silver list
                    </h4>
                    <img
                      src="{{ asset('assets/images/carticon.svg') }}"
                      alt="Shopping Cart"
                      class="w-6 h-6 lg:w-5 lg:h-5"
                    />
                  </div>
                  <p
                    class="text-xs lg:text-[10px] xl:text-xs font-bold text-gray-900 mb-2"
                  >
                    NO TITLE
                  </p>
                  <div class="flex gap-2 lg:gap-1.5">
                    <span
                      class="px-2 py-1 lg:px-1.5 lg:py-0.5 bg-red-100 text-red-700 text-xs lg:text-[10px] rounded-xl"
                      >Expired</span
                    >
                    <span
                      class="px-2 py-1 lg:px-1.5 lg:py-0.5 bg-green-100 text-green-700 text-xs lg:text-[10px] rounded-xl"
                      >50 Song</span
                    >
                  </div>
                </div>
              </div>

              <!-- Gold List -->
              <div
                class="outer-gray-container drop-shadow-2xl w-[90%] lg:w-[85%] xl:w-[90%] mx-auto"
              >
                <div
                  class="custom-card px-2 py-1 flex flex-col w-full lg:w-full lg:h-auto"
                >
                  <div class="flex items-center justify-between mb-2">
                    <h4
                      class="font-semibold text-gray-900 lg:text-sm xl:text-base"
                    >
                      Gold list
                    </h4>
                    <div
                      class="w-6 h-6 lg:w-5 lg:h-5 flex items-center justify-center relative"
                    >
                      <img
                        src="{{ asset('assets/images/carticon.svg') }}"
                        alt="Playlist Icon"
                        class="w-6 h-6 lg:w-6 lg:h-6 xl:w-6 xl:h-6"
                      />
                    </div>
                  </div>
                  <div class="flex items-center justify-between mb-1.5">
                    <p
                      class="text-xs lg:text-[10px] xl:text-xs font-bold text-gray-900 text-nowrap"
                    >
                      NO TITLE
                    </p>
                    <span
                      class="px-2 py-1 lg:px-1.5 lg:py-0.5 bg-green-100 text-green-700 text-xs lg:text-[10px] rounded-xl text-nowrap"
                      >100 Song</span
                    >
                  </div>
                  <div class="flex gap-1 bg-green-500 rounded-lg w-fit mx-auto">
                    <button
                      class="flex-1 bg-green-500 text-white text-xs lg:text-[10px] font-medium rounded-md"
                    >
                      Monthly
                    </button>
                    <button
                      class="flex-1 text-gray-700 text-xs lg:text-[10px] font-medium bg-white border border-green-500 rounded-md"
                    >
                      Yearly
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mx-auto pt-2 pt-20 bg-[#f2f2f2]">
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 lg:gap-3 xl:gap-4">
        <!-- Large/XL Device Sidebar (Static) -->
        <div
          id="sidebar-lg"
          class="hidden lg:block lg:col-span-1 space-y-2 border-2 border-white rounded-2xl mb-4 px-4 pb-6"
        >
          <!-- Profile Header -->
          <div class="relative top-2 left-2 items-start justify-between">
            <img src="{{ asset('assets/images/medal.svg') }}" alt="Medal" class="w-9 h-11" />
          </div>
          <div class="bg-gray-100 rounded-2xl">
            <div class="relative flex justify-center mb-4">
              <div class="relative">
                <img
                  src="https://i.pravatar.cc/150?img=12"
                  alt="Profile"
                  class="lg:w-[12vw] lg:h-[12vw] xl:w-[15vw] xl:h-[15vw] lg:min-w-[149px] lg:min-h-[149px] xl:min-w-[249px] xl:min-h-[249px] rounded-full object-cover"
                />
              </div>
            </div>
            <h2 class="text-2xl font-bold text-gray-900 text-center mb-2">
              Username
            </h2>
            <div class="flex items-center justify-center gap-2 text-gray-600">
              <i class="fas fa-flag text-sm"></i>
              <span class="text-base">Hurban</span>
            </div>
          </div>

          <!-- Subscriptions -->
          <div class="bg-gray-100 rounded-2xl w-full overflow-hidden">
            <div class="space-y-1 -mt-16 w-full">
              <!-- EDUCATED Card -->
              <div class="my-auto">
                <div
                  class="outer-gray-container lg:w-full lg:h-[14vh] xl:h-[16vh] lg:min-w-[184px] lg:min-h-[128px] xl:min-w-[204px] xl:min-h-[144px] hidden lg:block mt-20 flex justify-center mx-auto"
                >
                  <div class="custom-card w-full h-full">
                    <div class="flex items-center justify-between">
                      <h3
                        class="text-base font-medium lg:text-xs xl:text-sm mb-2 px-2"
                        style="color: #6b7280"
                      >
                        Subscribtions
                      </h3>
                      <img
                        src="{{ asset('assets/images/medal.svg') }}"
                        alt="Playlist Icon"
                        class="w-6 h-6 lg:w-6 lg:h-6 xl:w-6 xl:h-6"
                      />
                    </div>
                    <h4
                      class="text-2xl font-bold mb-1 lg:text-sm xl:text-[20px] mb-2 px-2"
                      style="color: #1f2937"
                    >
                      EDUCATED
                    </h4>
                    <div
                      class="flex flex-wrap gap-2 lg:gap-2 mb-1 justify-between px-2"
                    >
                      <span
                        class="px-2 py-1 bg-green-500 text-white text-xs rounded-xl lg:text-[8px] lg:px-1 lg:py-0.5 xl:text-[10px] xl:px-1.5 xl:py-0.5"
                        >monthly</span
                      >
                      <span
                        class="px-2 py-1 bg-green-500 text-white text-xs rounded-xl lg:text-[8px] lg:px-1 lg:py-0.5 xl:text-[10px] xl:px-1.5 xl:py-0.5"
                        >Renew 25.01.2026</span
                      >
                    </div>
                    <div
                      class="flex flex-row items-stretch mb-1 gap-5 rounded-b-full lg:gap-0.5 px-1 pt-2"
                    >
                      <div
                        class="px-3 py-2 bg-green-100 flex flex-col items-center justify-center gap-2 rounded-md rounded-bl-xl lg:px-1.5 lg:py-1 lg:gap-0.5 xl:px-2 xl:py-1.5 xl:gap-1 flex-1"
                      >
                        <div
                          class="flex flex-row items-center lg:gap-0.5 xl:gap-1"
                        >
                          <img
                            src="{{ asset('assets/images/currency.svg') }}"
                            alt="Currency"
                            class="w-5 h-5 lg:w-3 lg:h-3 xl:w-4 xl:h-4"
                          />
                          <span
                            class="text-lg font-bold lg:text-xs xl:text-sm"
                            style="color: #1f2937"
                            >500.00</span
                          >
                        </div>
                        <p
                          class="text-[12px] font-medium lg:text-[8px] xl:text-[10px]"
                          style="color: #15803d"
                        >
                          5% CASHBACK
                        </p>
                      </div>
                      <div
                        style="background-color: #fee2e2"
                        class="flex flex-col items-center justify-center gap-2 px-3 py-2 rounded-md rounded-br-xl lg:px-1.5 lg:py-1 lg:gap-0.5 xl:px-2 xl:py-1.5 xl:gap-1 flex-1"
                      >
                        <span
                          class="text-xs font-medium lg:text-[8px] xl:text-[10px]"
                          style="color: #dc2626"
                          >Deactivated</span
                        >
                        <label
                          class="relative inline-flex items-center cursor-pointer"
                        >
                          <input type="checkbox" class="sr-only peer" />
                          <div
                            class="w-11 h-6 bg-red-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-red-500 lg:w-7 lg:h-4 lg:after:h-3 lg:after:w-3 xl:w-9 xl:h-5 xl:after:h-4 xl:after:w-4"
                          ></div>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ACADEMIC Card -->
                <div
                  class="outer-gray-container lg:w-full lg:h-[14vh] xl:h-[16vh] lg:min-w-[184px] lg:min-h-[124px] xl:min-w-[214px] xl:min-h-[144px] hidden lg:block mt-2 flex justify-center mx-auto"
                >
                  <div class="custom-card w-full h-full">
                    <div class="flex items-center justify-between">
                      <h3
                        class="text-base font-medium lg:text-xs xl:text-sm mb-2 px-2"
                        style="color: #6b7280"
                      >
                        Subscribtions
                      </h3>
                      <img
                        src="{{ asset('assets/images/medal.svg') }}"
                        alt="Playlist Icon"
                        class="w-6 h-6 lg:w-6 lg:h-6 xl:w-6 xl:h-6"
                      />
                    </div>
                    <h4
                      class="text-2xl font-bold mb-1 lg:text-sm xl:text-base mb-2 px-2"
                      style="color: #1f2937"
                    >
                      ACADEMIC
                    </h4>
                    <div
                      class="flex flex-wrap gap-2 mb-1 lg:gap-1 mb-2 justify-between px-2"
                    >
                      <span
                        class="px-2 py-1 bg-green-500 text-white text-xs rounded-xl lg:text-[8px] lg:px-1 lg:py-0.5 xl:text-[10px] xl:px-1.5 xl:py-0.5"
                        >yearly</span
                      >
                      <span
                        class="px-2 py-1 bg-green-500 text-white text-xs rounded-xl lg:text-[8px] lg:px-1 lg:py-0.5 xl:text-[10px] xl:px-1.5 xl:py-0.5"
                        >Renew 25.01.2026</span
                      >
                    </div>
                    <div
                      class="flex flex-row items-stretch mb-1 gap-1 rounded-b-full lg:gap-0.5 px-1"
                    >
                      <div
                        class="px-3 py-2 bg-green-100 flex flex-col items-center justify-center gap-2 rounded-md rounded-bl-xl lg:px-1.5 lg:py-1 lg:gap-0.5 xl:px-2 xl:py-1.5 xl:gap-1 flex-1"
                      >
                        <div
                          class="flex flex-row items-center lg:gap-0.5 xl:gap-1"
                        >
                          <img
                            src="{{ asset('assets/images/currency.svg') }}"
                            alt="Currency"
                            class="w-5 h-5 lg:w-3 lg:h-3 xl:w-4 xl:h-4"
                          />
                          <span
                            class="text-lg font-bold lg:text-xs xl:text-sm"
                            style="color: #1f2937"
                            >5000.00</span
                          >
                        </div>
                        <p
                          class="text-[12px] font-medium lg:text-[8px] xl:text-[10px]"
                          style="color: #15803d"
                        >
                          5% CASHBACK
                        </p>
                      </div>
                      <div
                        class="bg-green-100 flex flex-col items-center justify-center gap-2 px-3 py-2 rounded-md rounded-br-xl lg:px-1.5 lg:py-1 lg:gap-0.5 xl:px-2 xl:py-1.5 xl:gap-1 flex-1"
                      >
                        <span
                          class="text-xs font-medium lg:text-[8px] xl:text-[10px]"
                          style="color: #15803d"
                          >Activate It</span
                        >
                        <label
                          class="relative inline-flex items-center cursor-pointer"
                        >
                          <input type="checkbox" class="sr-only peer" />
                          <div
                            class="w-11 h-6 bg-gray-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500 lg:w-7 lg:h-4 lg:after:h-3 lg:after:w-3 xl:w-9 xl:h-5 xl:after:h-4 xl:after:w-4"
                          ></div>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- CULTIVATED Card -->
                <div
                  class="outer-gray-container lg:w-full lg:h-[8vh] xl:h-[9vh] lg:min-w-[184px] lg:min-h-[70px] xl:min-w-[214px] xl:min-h-[79px] hidden lg:block mt-2 flex justify-center mx-auto"
                >
                  <div class="custom-card w-full h-full px-2">
                    <div class="flex items-center justify-between">
                      <h3
                        class="text-base font-medium lg:text-xs xl:text-sm mb-2"
                        style="color: #6b7280"
                      >
                        Subscribtions
                      </h3>
                      <img
                        src="{{ asset('assets/images/freemedal.svg') }}"
                        alt="Playlist Icon"
                        class="w-6 h-6 lg:w-6 lg:h-6 xl:w-6 xl:h-6"
                      />
                    </div>
                    <h4
                      class="text-2xl font-bold mb-1 lg:text-sm xl:text-base mb-1"
                      style="color: #1f2937"
                    >
                      CULTIVATED
                    </h4>
                    <div class="flex justify-center mb-2 px-2">
                      <span
                        class="px-4 py-1 bg-green-500 text-white text-xs rounded-xl lg:text-[8px] lg:py-0.5 xl:text-[10px]"
                        >Free</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- My QR-Code -->
            <div class="p-3">
              <!-- Small screens: use background image -->
              <div
                class="mt-4 relative mx-auto rounded-2xl overflow-hidden bg-no-repeat bg-center bg-[url('{{ asset("assets/images/qrbg.svg") }}')] p-4 min-h-[200px] w-full max-w-[500px] bg-[length:320px] lg:hidden"
              >
                <h3 class="text-lg font-bold text-gray-400 mb-2">My QR-Code</h3>
                <img
                  src="{{ asset('assets/images/qr.svg') }}"
                  alt="QR Code"
                  class="w-full object-contain"
                />
              </div>
              <!-- lg and xl screens: use clip-path with card wrapper -->
              <div
                class="outer-gray-container lg:w-full lg:h-[22vh] xl:h-[28vh] lg:min-w-[194px] lg:min-h-[204px] xl:min-w-[224px] xl:min-h-[264px] lg:px-[18px] xl:px-[20px] hidden lg:block mt-2 mx-auto"
              >
                <div
                  class="custom-card w-full h-full lg:p-3 flex flex-col items-start"
                >
                  <h3 class="text-lg font-bold text-gray-400 mb-2">
                    My QR-Code
                  </h3>
                  <img
                    src="{{ asset('assets/images/qr.svg') }}"
                    alt="QR Code"
                    class="w-[200px] object-contain lg:h-[14vh] xl:h-[18vh] lg:min-h-[130px] xl:min-h-[180px] mt-5"
                  />
                </div>
              </div>
            </div>

            <!-- My Balance & My Cashback -->
            <div class="grid grid-cols-1 gap-4">
              <!-- My Balance - Small screens -->
              <div
                class="rounded-2xl overflow-hidden bg-no-repeat bg-center bg-[url('{{ asset("assets/images/small.svg") }}')] w-full max-w-[320px] bg-[length:320px] p-3 lg:hidden"
              >
                <div class="flex items-start justify-between px-4 pt-3">
                  <h3 class="text-base font-bold text-gray-400 text-nowrap">
                    My Balance
                  </h3>
                  <img
                    src="{{ asset('assets/images/wallet.svg') }}"
                    alt="Wallet"
                    class="w-8 h-8"
                    style="margin-top: -10px; margin-left: 120px"
                  />
                </div>
                <div class="flex flex-col px-4">
                  <img
                    src="{{ asset('assets/images/currency.svg') }}"
                    alt="Currency"
                    class="w-10 h-10 mb-1"
                    style="
                      filter: brightness(0) saturate(100%) invert(77%)
                        sepia(95%) saturate(1352%) hue-rotate(5deg)
                        brightness(102%) contrast(101%);
                    "
                  />
                  <span class="text-2xl font-bold" style="color: #1f2937"
                    >999.999.00</span
                  >
                </div>
              </div>

              <!-- My Balance - lg and xl screens -->
              <div
                class="outer-gray-container lg:w-full lg:h-[9vh] xl:h-[11vh] lg:min-w-[184px] lg:min-h-[84px] xl:min-w-[214px] xl:min-h-[99px] hidden lg:block mx-auto"
              >
                <div class="custom-card w-full h-full px-2 py-1 flex flex-col">
                  <div class="flex items-start justify-between mb-2">
                    <h3
                      class="text-base font-bold lg:text-xs xl:text-sm text-gray-400 text-nowrap"
                    >
                      My Balance
                    </h3>
                    <img
                      src="{{ asset('assets/images/wallet.svg') }}"
                      alt="Wallet"
                      class="lg:w-5 lg:h-5 xl:w-6 xl:h-6"
                      style="margin-top: -5px"
                    />
                  </div>
                  <div class="flex flex-col">
                    <img
                      src="{{ asset('assets/images/currency.svg') }}"
                      alt="Currency"
                      class="lg:w-6 lg:h-6 xl:w-8 xl:h-8 mb-1"
                      style="
                        filter: brightness(0) saturate(100%) invert(77%)
                          sepia(95%) saturate(1352%) hue-rotate(5deg)
                          brightness(102%) contrast(101%);
                      "
                    />
                    <span
                      class="text-2xl font-bold lg:text-base xl:text-xl"
                      style="color: #1f2937"
                      >999.999.00</span
                    >
                  </div>
                </div>
              </div>

              <!-- My Cashback - Small screens -->
              <div
                class="rounded-2xl overflow-hidden bg-no-repeat bg-center bg-[url('{{ asset("assets/images/small.svg") }}')] w-full max-w-[320px] bg-[length:320px] p-3 lg:hidden"
              >
                <div class="flex items-start justify-between px-4 pt-3">
                  <h3 class="text-base font-bold text-nowrap text-gray-400">
                    My Cashback
                  </h3>
                  <img
                    src="{{ asset('assets/images/coin.svg') }}"
                    alt="Coin"
                    class="w-8 h-8"
                    style="margin-top: -10px; margin-left: 120px"
                  />
                </div>
                <div class="flex flex-col px-4">
                  <img
                    src="{{ asset('assets/images/currency.svg') }}"
                    alt="Currency"
                    class="w-10 h-10 mb-1"
                    style="
                      filter: brightness(0) saturate(100%) invert(77%)
                        sepia(95%) saturate(1352%) hue-rotate(5deg)
                        brightness(102%) contrast(101%);
                    "
                  />
                  <span class="text-2xl font-bold" style="color: #1f2937"
                    >999.999.00</span
                  >
                </div>
              </div>

              <!-- My Cashback - lg and xl screens -->
              <div
                class="outer-gray-container lg:w-full lg:h-[9vh] xl:h-[11vh] lg:min-w-[184px] lg:min-h-[84px] xl:min-w-[214px] xl:min-h-[99px] hidden lg:block mt-2 mx-auto"
              >
                <div class="custom-card w-full h-full px-2 py-1 flex flex-col">
                  <div class="flex items-start justify-between mb-2">
                    <h3
                      class="text-base font-bold text-nowrap lg:text-xs xl:text-sm text-gray-400"
                    >
                      My Cashback
                    </h3>
                    <img
                      src="{{ asset('assets/images/coin.svg') }}"
                      alt="Coin"
                      class="lg:w-5 lg:h-5 xl:w-6 xl:h-6 z-10"
                      style="margin-top: -5px"
                    />
                  </div>
                  <div class="flex flex-col">
                    <img
                      src="{{ asset('assets/images/currency.svg') }}"
                      alt="Currency"
                      class="lg:w-6 lg:h-6 xl:w-8 xl:h-8 mb-1"
                      style="
                        filter: brightness(0) saturate(100%) invert(77%)
                          sepia(95%) saturate(1352%) hue-rotate(5deg)
                          brightness(102%) contrast(101%);
                      "
                    />
                    <span
                      class="text-2xl font-bold lg:text-base xl:text-xl"
                      style="color: #1f2937"
                      >999.999.00</span
                    >
                  </div>
                </div>
              </div>
            </div>

            <!-- My Playlist -->
            <!-- Small screens: use background image -->
            <div
              class="rounded-2xl overflow-hidden bg-no-repeat bg-center bg-[url('{{ asset("assets/images/playlist.svg") }}')] p-6 min-h-[400px] w-full bg-[length:224px] lg:hidden"
            >
              <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-bold" style="color: #9ca3af">
                  My Playlist
                </h3>
                <img
                  src="{{ asset('assets/images/wallet.svg') }}"
                  alt="Playlist Icon"
                  class="w-6 h-6"
                />
              </div>
              <div class="space-y-3">
                <!-- Free List -->
                <div
                  class="rounded-xl p-3 overflow-visible bg-no-repeat bg-center bg-[url('{{ asset("assets/images/plsm.svg") }}')] bg-[length:100%] w-full"
                >
                  <div class="flex items-center justify-between mb-2 px-6">
                    <h4 class="font-semibold text-gray-900">Free List</h4>
                    <div
                      class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center"
                    >
                      <i class="fas fa-check text-white text-xs"></i>
                    </div>
                  </div>
                  <p class="text-xs font-bold text-gray-900 mb-2 px-6">
                    LIST TITLE
                  </p>
                  <div class="flex gap-2 px-6">
                    <span
                      class="px-2 py-1 bg-green-100 text-green-700 text-xs rounded-xl"
                      >Free</span
                    >
                    <span
                      class="px-2 py-1 bg-green-100 text-green-700 text-xs rounded-xl"
                      >25 Song</span
                    >
                  </div>
                </div>
                <!-- Bronze List -->
                <div
                  class="rounded-xl p-3 overflow-hidden bg-no-repeat bg-center bg-[url('{{ asset("assets/images/plsm.svg") }}')] bg-[length:100%]"
                >
                  <div class="flex items-center justify-between mb-2 px-6">
                    <h4 class="font-semibold text-gray-900">Bronze list</h4>
                    <div
                      class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center"
                    >
                      <i class="fas fa-check text-white text-xs"></i>
                    </div>
                  </div>
                  <p class="text-xs font-bold text-gray-900 mb-2 px-6">
                    LIST TITLE
                  </p>
                  <div class="flex gap-2 px-6">
                    <span
                      class="px-2 py-1 bg-green-100 text-green-700 text-xs rounded-xl"
                      >Monthly</span
                    >
                    <span
                      class="px-2 py-1 bg-green-100 text-green-700 text-xs rounded-xl"
                      >50 Song</span
                    >
                  </div>
                </div>
                <!-- Silver List -->
                <div
                  class="rounded-xl p-3 overflow-hidden bg-no-repeat bg-center bg-[url('{{ asset("assets/images/plsm.svg") }}')] bg-[length:100%]"
                >
                  <div class="flex items-center justify-between mb-2 px-6">
                    <h4 class="font-semibold text-gray-900">Silver list</h4>
                    <img
                      src="{{ asset('assets/images/wallet.svg') }}"
                      alt="Shopping Cart"
                      class="w-6 h-6"
                    />
                  </div>
                  <p class="text-xs font-bold text-gray-900 mb-2 px-6">
                    NO TITLE
                  </p>
                  <div class="flex gap-2 px-6">
                    <span
                      class="px-2 py-1 bg-red-100 text-red-700 text-xs rounded-xl"
                      >Expired</span
                    >
                    <span
                      class="px-2 py-1 bg-green-100 text-green-700 text-xs rounded-xl"
                      >50 Song</span
                    >
                  </div>
                </div>
                <!-- Gold List -->
                <div
                  class="rounded-xl pt-3 px-3 pb-2 overflow-hidden bg-no-repeat bg-center bg-[url('{{ asset("assets/images/plsm.svg") }}')] bg-[length:100%]"
                >
                  <div class="flex items-center justify-between mb-2 px-6">
                    <h4 class="font-semibold text-gray-900">Gold list</h4>
                    <div
                      class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center relative"
                    >
                      <i class="fas fa-shopping-cart text-white text-xs"></i>
                      <i
                        class="fas fa-plus text-white text-[8px] absolute -top-0.5 -right-0.5"
                      ></i>
                    </div>
                  </div>
                  <div class="flex items-center justify-between mb-1.5 px-6">
                    <p class="text-xs font-bold text-gray-900 text-nowrap">
                      NO TITLE
                    </p>
                    <span
                      class="px-2 py-1 bg-green-100 text-green-700 text-xs rounded-xl text-nowrap"
                      >100 Song</span
                    >
                  </div>
                  <div
                    class="flex gap-1 bg-green-100 rounded-lg p-1 w-fit mx-auto"
                  >
                    <button
                      class="flex-1 bg-green-500 text-white text-xs font-medium py-1.5 rounded-md"
                    >
                      Monthly
                    </button>
                    <button
                      class="flex-1 text-gray-700 text-xs font-medium bg-white border border-green-500 py-1.5 rounded-md"
                    >
                      Yearly
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- lg and xl screens: use clip-path with card wrapper -->
            <div
              class="outer-gray-container mx-auto lg:w-full lg:h-[42vh] xl:h-[48vh] lg:min-w-[194px] lg:min-h-[394px] xl:min-w-[224px] xl:min-h-[444px] hidden lg:block mt-2"
            >
              <div class="custom-card w-full h-full flex flex-col">
                <div
                  class="flex items-center justify-between mb-4 lg:mb-4 xl:mb-4 drop-shadow-xl"
                >
                  <h3
                    class="text-lg font-bold lg:text-lg xl:text-lg pl-4"
                    style="color: #9ca3af"
                  >
                    My Playlist
                  </h3>
                  <img
                    src="{{ asset('assets/images/playlisticon.svg') }}"
                    alt="Playlist Icon"
                    class="w-6 h-6 lg:w-6 lg:h-6 xl:w-6 xl:h-6"
                  />
                </div>
                <div
                  class="space-y-3 lg:space-y-1 xl:space-y-3 flex flex-col items-center"
                >
                  <!-- Free List -->
                  <div
                    class="outer-gray-container drop-shadow-2xl w-[90%] lg:w-[85%] xl:w-[90%]"
                  >
                    <div
                      class="custom-card px-2 py-1 flex flex-col lg:w-full lg:h-auto"
                    >
                      <div class="flex items-center justify-between mb-2">
                        <h4
                          class="font-semibold text-gray-900 lg:text-sm xl:text-base"
                        >
                          Free List
                        </h4>
                        <div
                          class="w-6 h-6 lg:w-5 lg:h-5 bg-green-500 rounded-full flex items-center justify-center"
                        >
                          <img
                            src="{{ asset('assets/images/check.svg') }}"
                            alt="Playlist Icon"
                            class="w-6 h-6 lg:w-6 lg:h-6 xl:w-6 xl:h-6"
                          />
                        </div>
                      </div>
                      <p
                        class="text-xs lg:text-[10px] xl:text-xs font-bold text-gray-900 mb-2"
                      >
                        LIST TITLE
                      </p>
                      <div class="flex gap-2 lg:gap-1.5">
                        <span
                          class="px-2 py-1 lg:px-1.5 lg:py-0.5 bg-green-100 text-green-700 text-xs lg:text-[10px] rounded-xl"
                          >Free</span
                        >
                        <span
                          class="px-2 py-1 lg:px-1.5 lg:py-0.5 bg-green-100 text-green-700 text-xs lg:text-[10px] rounded-xl"
                          >25 Song</span
                        >
                      </div>
                    </div>
                  </div>

                  <!-- Bronze List -->
                  <div
                    class="outer-gray-container drop-shadow-2xl w-[90%] lg:w-[85%] xl:w-[90%] mx-auto"
                  >
                    <div
                      class="custom-card px-2 py-1 flex flex-col lg:w-full lg:h-auto"
                    >
                      <div class="flex items-center justify-between mb-2">
                        <h4
                          class="font-semibold text-gray-900 lg:text-sm xl:text-base"
                        >
                          Bronze list
                        </h4>
                        <div
                          class="w-6 h-6 lg:w-5 lg:h-5 bg-green-500 rounded-full flex items-center justify-center"
                        >
                          <img
                            src="{{ asset('assets/images/check.svg') }}"
                            alt="Playlist Icon"
                            class="w-6 h-6 lg:w-6 lg:h-6 xl:w-6 xl:h-6"
                          />
                        </div>
                      </div>
                      <p
                        class="text-xs lg:text-[10px] xl:text-xs font-bold text-gray-900 mb-2"
                      >
                        LIST TITLE
                      </p>
                      <div class="flex gap-2 lg:gap-1.5">
                        <span
                          class="px-2 py-1 lg:px-1.5 lg:py-0.5 bg-green-100 text-green-700 text-xs lg:text-[10px] rounded-xl"
                          >Monthly</span
                        >
                        <span
                          class="px-2 py-1 lg:px-1.5 lg:py-0.5 bg-green-100 text-green-700 text-xs lg:text-[10px] rounded-xl"
                          >50 Song</span
                        >
                      </div>
                    </div>
                  </div>

                  <!-- Silver List -->
                  <div
                    class="outer-gray-container drop-shadow-2xl w-[90%] lg:w-[85%] xl:w-[90%] mx-auto"
                  >
                    <div
                      class="custom-card px-2 py-1 flex flex-col lg:w-full lg:h-auto"
                    >
                      <div class="flex items-center justify-between mb-2">
                        <h4
                          class="font-semibold text-gray-900 lg:text-sm xl:text-base"
                        >
                          Silver list
                        </h4>
                        <img
                          src="{{ asset('assets/images/carticon.svg') }}"
                          alt="Shopping Cart"
                          class="w-6 h-6 lg:w-5 lg:h-5"
                        />
                      </div>
                      <p
                        class="text-xs lg:text-[10px] xl:text-xs font-bold text-gray-900 mb-2"
                      >
                        NO TITLE
                      </p>
                      <div class="flex gap-2 lg:gap-1.5">
                        <span
                          class="px-2 py-1 lg:px-1.5 lg:py-0.5 bg-red-100 text-red-700 text-xs lg:text-[10px] rounded-xl"
                          >Expired</span
                        >
                        <span
                          class="px-2 py-1 lg:px-1.5 lg:py-0.5 bg-green-100 text-green-700 text-xs lg:text-[10px] rounded-xl"
                          >50 Song</span
                        >
                      </div>
                    </div>
                  </div>

                  <!-- Gold List -->
                  <div
                    class="outer-gray-container drop-shadow-2xl w-[90%] lg:w-[85%] xl:w-[90%] mx-auto"
                  >
                    <div
                      class="custom-card px-2 py-1 flex flex-col lg:w-full lg:h-auto"
                    >
                      <div class="flex items-center justify-between mb-2">
                        <h4
                          class="font-semibold text-gray-900 lg:text-sm xl:text-base"
                        >
                          Gold list
                        </h4>
                        <div
                          class="w-6 h-6 lg:w-5 lg:h-5 flex items-center justify-center relative"
                        >
                          <img
                            src="{{ asset('assets/images/carticon.svg') }}"
                            alt="Playlist Icon"
                            class="w-6 h-6 lg:w-6 lg:h-6 xl:w-6 xl:h-6"
                          />
                        </div>
                      </div>
                      <div class="flex items-center justify-between mb-1.5">
                        <p
                          class="text-xs lg:text-[10px] xl:text-xs font-bold text-gray-900 text-nowrap"
                        >
                          NO TITLE
                        </p>
                        <span
                          class="px-2 py-1 lg:px-1.5 lg:py-0.5 bg-green-100 text-green-700 text-xs lg:text-[10px] rounded-xl text-nowrap"
                          >100 Song</span
                        >
                      </div>
                      <div
                        class="flex gap-1 bg-green-500 rounded-lg w-fit mx-auto"
                      >
                        <button
                          class="flex-1 bg-green-500 text-white text-xs lg:text-[10px] font-medium rounded-md"
                        >
                          Monthly
                        </button>
                        <button
                          class="flex-1 text-gray-700 text-xs lg:text-[10px] font-medium bg-white border border-green-500 rounded-md"
                        >
                          Yearly
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Main Content -->
        <div class="lg:col-span-3 pb-6">
          @include('partials.dashboard-main-them2')
        </div>
        <!--  -->
      </div>
    </div>

    <!-- Cart Modal -->
    <div
      id="cart-modal"
      class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4"
    >
      <div
        class="bg-white rounded-2xl shadow-2xl max-w-7xl w-full max-h-[90vh] overflow-hidden flex flex-col"
      >
        <!-- Header -->
        <div
          class="p-4 border-b border-gray-200 flex items-center justify-between bg-white"
        >
          <h2 class="text-2xl font-bold text-gray-900">Shopping Cart</h2>
          <button
            onclick="closeCart()"
            class="text-gray-400 hover:text-gray-600"
          >
            <i class="fas fa-times text-xl"></i>
          </button>
        </div>

        <!-- Main Content - Two Column Layout -->
        <div class="flex-1 overflow-y-auto">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-6">
            <!-- Left Panel -->
            <div class="space-y-6">
              <!-- Please choice Section -->
              <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">
                  Please choice
                </h3>
                <p class="text-gray-600 text-sm mb-4">Pay online or Pay Cash</p>
                <div class="grid grid-cols-2 gap-4">
                  <!-- My Balance Card -->
                  <div class="outer-gray-container drop-shadow-2xl">
                    <div class="custom-card px-4 py-1 flex flex-row gap-4">
                      <div class="flex items-center justify-between mb-3">
                        <img
                          src="{{ asset('assets/images/monthly.svg') }}"
                          alt="Currency"
                          class="w-[60px] h-[92px]"
                        />
                      </div>
                      <div class="flex flex-col">
                        <div>
                          <h4 class="text-lg font-bold text-gray-900 mb-1">
                            My Balance
                          </h4>
                        </div>
                        <div class="flex flex-row justify-between items-center">
                          <img
                            src="{{ asset('assets/images/currency.svg') }}"
                            alt="Currency"
                            class="w-[24px] h-[24px]"
                          />
                        </div>
                        <div
                          class="flex flex-row justify-between items-center gap-16"
                        >
                          <p class="text-lg font-normal">999.999.00</p>
                          <img
                            src="{{ asset('assets/images/cart1.svg') }}"
                            alt="Zer"
                            class="w-[24px] h-[24px]"
                          />
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Pay In Store Card -->
                  <div class="outer-gray-container drop-shadow-2xl">
                    <div class="custom-card px-4 py-1 flex flex-row gap-4">
                      <div class="flex items-center justify-between mb-3">
                        <img
                          src="{{ asset('assets/images/pay.svg') }}"
                          alt="Currency"
                          class="w-[90px] h-[90px]"
                        />
                      </div>
                      <div class="flex flex-col justify-between">
                        <div>
                          <h4 class="text-lg font-bold text-gray-900 mb-1">
                            Pay In Store
                          </h4>
                        </div>
                        <p class="text-xs font-normal text-gray-600">
                          Select on of our Payment Methode
                        </p>
                        <div
                          class="flex flex-row justify-end items-center gap-2"
                        >
                          <img
                            src="{{ asset('assets/images/cart1.svg') }}"
                            alt="Cart"
                            class="w-[24px] h-[24px]"
                          />
                          <img
                            src="{{ asset('assets/images/cart2.svg') }}"
                            alt="Currency"
                            class="w-[24px] h-[24px]"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Bank Transfer Card -->
                  <div class="outer-gray-container drop-shadow-2xl">
                    <div class="custom-card px-4 py-1 flex flex-row gap-4">
                      <div class="flex items-center justify-between mb-3">
                        <img
                          src="{{ asset('assets/images/pay.svg') }}"
                          alt="Currency"
                          class="w-[90px] h-[90px]"
                        />
                      </div>
                      <div class="flex flex-col">
                        <div>
                          <h4 class="text-lg font-bold text-gray-900 mb-1">
                            Bank Transfer
                          </h4>
                        </div>
                        <p class="text-xs font-normal text-gray-600">
                          Select on of our Payment Methode
                        </p>
                        <div
                          class="flex flex-row justify-end items-center gap-2"
                        >
                          <img
                            src="{{ asset('assets/images/cart3.svg') }}"
                            alt="Cart"
                            class="w-[24px] h-[24px]"
                          />
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- PayPal Card -->
                  <div class="outer-gray-container drop-shadow-2xl">
                    <div class="custom-card px-4 py-1 flex flex-row gap-4">
                      <div class="flex items-center justify-between mb-3">
                        <img
                          src="{{ asset('assets/images/pay.svg') }}"
                          alt="Currency"
                          class="w-[90px] h-[90px]"
                        />
                      </div>
                      <div class="flex flex-col">
                        <div>
                          <h4 class="text-lg font-bold text-gray-900 mb-1">
                            PayPal
                          </h4>
                        </div>
                        <p class="text-xs font-normal text-gray-600">
                          Select on of our Payment Methode
                        </p>
                        <div
                          class="flex flex-row justify-end items-center gap-2"
                        >
                          <img
                            src="{{ asset('assets/images/cart2.svg') }}"
                            alt="Currency"
                            class="w-[24px] h-[24px]"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Partner Shops Section -->
              <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">
                  Partner Shops
                </h3>
                <p class="text-gray-600 text-sm mb-4">Shops in your area</p>
                <div
                  class="grid grid-cols-2 gap-4 max-h-[400px] overflow-y-auto"
                >
                  <!-- Partner Shop Cards -->
                  <div class="outer-gray-container rounded-2xl">
                    <div class="custom-card p-0 overflow-visible">
                      <div class="relative">
                        <img
                          src="{{ asset('assets/images/part1.svg') }}"
                          alt="Partner Shop"
                          class="w-full h-32 object-cover rounded-t-2xl"
                        />
                        <div
                          class="absolute top-2 right-2 bg-white/90 backdrop-blur-sm text-red-500 font-semibold px-2 py-1 rounded-full flex items-center gap-1 shadow-md z-10"
                        >
                          <i class="fas fa-heart text-sm"></i>
                          <span class="text-gray-900 font-bold text-xs"
                            >950</span
                          >
                        </div>
                        <div class="absolute -bottom-8 left-3 z-20">
                          <div class="relative">
                            <div
                              class="w-16 h-16 rounded-3xl border border-white overflow-hidden"
                            >
                              <img
                                src="{{ asset('assets/images/part11.svg') }}"
                                alt="Shop Logo"
                                class="w-[83px] object-contain"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-3 pt-6">
                        <div class="flex-1 min-w-0 ml-20">
                          <div class="flex items-center gap-1 mb-1">
                            <h3
                              class="text-sm font-bold text-gray-900 truncate"
                            >
                              SuperMarchent Shop
                            </h3>
                            <i
                              class="fas fa-check-circle text-green-500 text-xs"
                            ></i>
                          </div>
                          <div
                            class="flex flex-wrap items-center gap-2 text-xs"
                          >
                            <div class="flex items-center gap-1 text-gray-700">
                              <img
                                src="{{ asset('assets/images/flag.svg') }}"
                                alt="Country"
                                class="w-3 h-3"
                              />
                              <span class="text-[10px] font-semibold"
                                >Rojava</span
                              >
                            </div>
                            <div
                              class="flex items-center gap-1 text-orange-500 font-semibold"
                            >
                              <i class="fas fa-star text-xs"></i>
                              <span class="text-[10px] font-semibold">5.0</span>
                              <span class="text-gray-500 text-[10px]"
                                >(3K)</span
                              >
                            </div>
                          </div>
                          <div class="mt-2">
                            <span
                              class="px-2 py-0.5 rounded-full bg-green-500 text-white text-[8px] font-semibold"
                            >
                              SHOP OPEN
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Repeat shop cards -->
                  <div class="outer-gray-container rounded-2xl">
                    <div class="custom-card p-0 overflow-visible">
                      <div class="relative">
                        <img
                          src="{{ asset('assets/images/part1.svg') }}"
                          alt="Partner Shop"
                          class="w-full h-32 object-cover rounded-t-2xl"
                        />
                        <div
                          class="absolute top-2 right-2 bg-white/90 backdrop-blur-sm text-red-500 font-semibold px-2 py-1 rounded-full flex items-center gap-1 shadow-md z-10"
                        >
                          <i class="fas fa-heart text-sm"></i>
                          <span class="text-gray-900 font-bold text-xs"
                            >950</span
                          >
                        </div>
                        <div class="absolute -bottom-8 left-3 z-20">
                          <div class="relative">
                            <div
                              class="w-16 h-16 rounded-3xl border border-white overflow-hidden"
                            >
                              <img
                                src="{{ asset('assets/images/part11.svg') }}"
                                alt="Shop Logo"
                                class="w-[83px] object-contain"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-3 pt-6">
                        <div class="flex-1 min-w-0 ml-20">
                          <div class="flex items-center gap-1 mb-1">
                            <h3
                              class="text-sm font-bold text-gray-900 truncate"
                            >
                              SuperMarchent Shop
                            </h3>
                            <i
                              class="fas fa-check-circle text-green-500 text-xs"
                            ></i>
                          </div>
                          <div
                            class="flex flex-wrap items-center gap-2 text-xs"
                          >
                            <div class="flex items-center gap-1 text-gray-700">
                              <img
                                src="{{ asset('assets/images/flag.svg') }}"
                                alt="Country"
                                class="w-3 h-3"
                              />
                              <span class="text-[10px] font-semibold"
                                >Rojava</span
                              >
                            </div>
                            <div
                              class="flex items-center gap-1 text-orange-500 font-semibold"
                            >
                              <i class="fas fa-star text-xs"></i>
                              <span class="text-[10px] font-semibold">5.0</span>
                              <span class="text-gray-500 text-[10px]"
                                >(3K)</span
                              >
                            </div>
                          </div>
                          <div class="mt-2">
                            <span
                              class="px-2 py-0.5 rounded-full bg-green-500 text-white text-[8px] font-semibold"
                            >
                              SHOP OPEN
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="outer-gray-container rounded-2xl">
                    <div class="custom-card p-0 overflow-visible">
                      <div class="relative">
                        <img
                          src="{{ asset('assets/images/part1.svg') }}"
                          alt="Partner Shop"
                          class="w-full h-32 object-cover rounded-t-2xl"
                        />
                        <div
                          class="absolute top-2 right-2 bg-white/90 backdrop-blur-sm text-red-500 font-semibold px-2 py-1 rounded-full flex items-center gap-1 shadow-md z-10"
                        >
                          <i class="fas fa-heart text-sm"></i>
                          <span class="text-gray-900 font-bold text-xs"
                            >950</span
                          >
                        </div>
                        <div class="absolute -bottom-8 left-3 z-20">
                          <div class="relative">
                            <div
                              class="w-16 h-16 rounded-3xl border border-white overflow-hidden"
                            >
                              <img
                                src="{{ asset('assets/images/part11.svg') }}"
                                alt="Shop Logo"
                                class="w-[83px] object-contain"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-3 pt-6">
                        <div class="flex-1 min-w-0 ml-20">
                          <div class="flex items-center gap-1 mb-1">
                            <h3
                              class="text-sm font-bold text-gray-900 truncate"
                            >
                              SuperMarchent Shop
                            </h3>
                            <i
                              class="fas fa-check-circle text-green-500 text-xs"
                            ></i>
                          </div>
                          <div
                            class="flex flex-wrap items-center gap-2 text-xs"
                          >
                            <div class="flex items-center gap-1 text-gray-700">
                              <img
                                src="{{ asset('assets/images/flag.svg') }}"
                                alt="Country"
                                class="w-3 h-3"
                              />
                              <span class="text-[10px] font-semibold"
                                >Rojava</span
                              >
                            </div>
                            <div
                              class="flex items-center gap-1 text-orange-500 font-semibold"
                            >
                              <i class="fas fa-star text-xs"></i>
                              <span class="text-[10px] font-semibold">5.0</span>
                              <span class="text-gray-500 text-[10px]"
                                >(3K)</span
                              >
                            </div>
                          </div>
                          <div class="mt-2">
                            <span
                              class="px-2 py-0.5 rounded-full bg-green-500 text-white text-[8px] font-semibold"
                            >
                              SHOP OPEN
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="outer-gray-container rounded-2xl">
                    <div class="custom-card p-0 overflow-visible">
                      <div class="relative">
                        <img
                          src="{{ asset('assets/images/part1.svg') }}"
                          alt="Partner Shop"
                          class="w-full h-32 object-cover rounded-t-2xl"
                        />
                        <div
                          class="absolute top-2 right-2 bg-white/90 backdrop-blur-sm text-red-500 font-semibold px-2 py-1 rounded-full flex items-center gap-1 shadow-md z-10"
                        >
                          <i class="fas fa-heart text-sm"></i>
                          <span class="text-gray-900 font-bold text-xs"
                            >950</span
                          >
                        </div>
                        <div class="absolute -bottom-8 left-3 z-20">
                          <div class="relative">
                            <div
                              class="w-16 h-16 rounded-3xl border border-white overflow-hidden"
                            >
                              <img
                                src="{{ asset('assets/images/part11.svg') }}"
                                alt="Shop Logo"
                                class="w-[83px] object-contain"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-3 pt-6">
                        <div class="flex-1 min-w-0 ml-20">
                          <div class="flex items-center gap-1 mb-1">
                            <h3
                              class="text-sm font-bold text-gray-900 truncate"
                            >
                              SuperMarchent Shop
                            </h3>
                            <i
                              class="fas fa-check-circle text-green-500 text-xs"
                            ></i>
                          </div>
                          <div
                            class="flex flex-wrap items-center gap-2 text-xs"
                          >
                            <div class="flex items-center gap-1 text-gray-700">
                              <img
                                src="{{ asset('assets/images/flag.svg') }}"
                                alt="Country"
                                class="w-3 h-3"
                              />
                              <span class="text-[10px] font-semibold"
                                >Rojava</span
                              >
                            </div>
                            <div
                              class="flex items-center gap-1 text-orange-500 font-semibold"
                            >
                              <i class="fas fa-star text-xs"></i>
                              <span class="text-[10px] font-semibold">5.0</span>
                              <span class="text-gray-500 text-[10px]"
                                >(3K)</span
                              >
                            </div>
                          </div>
                          <div class="mt-2">
                            <span
                              class="px-2 py-0.5 rounded-full bg-green-500 text-white text-[8px] font-semibold"
                            >
                              SHOP OPEN
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="outer-gray-container rounded-2xl">
                    <div class="custom-card p-0 overflow-visible">
                      <div class="relative">
                        <img
                          src="{{ asset('assets/images/part1.svg') }}"
                          alt="Partner Shop"
                          class="w-full h-32 object-cover rounded-t-2xl"
                        />
                        <div
                          class="absolute top-2 right-2 bg-white/90 backdrop-blur-sm text-red-500 font-semibold px-2 py-1 rounded-full flex items-center gap-1 shadow-md z-10"
                        >
                          <i class="fas fa-heart text-sm"></i>
                          <span class="text-gray-900 font-bold text-xs"
                            >950</span
                          >
                        </div>
                        <div class="absolute -bottom-8 left-3 z-20">
                          <div class="relative">
                            <div
                              class="w-16 h-16 rounded-3xl border border-white overflow-hidden"
                            >
                              <img
                                src="{{ asset('assets/images/part11.svg') }}"
                                alt="Shop Logo"
                                class="w-[83px] object-contain"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-3 pt-6">
                        <div class="flex-1 min-w-0 ml-20">
                          <div class="flex items-center gap-1 mb-1">
                            <h3
                              class="text-sm font-bold text-gray-900 truncate"
                            >
                              SuperMarchent Shop
                            </h3>
                            <i
                              class="fas fa-check-circle text-green-500 text-xs"
                            ></i>
                          </div>
                          <div
                            class="flex flex-wrap items-center gap-2 text-xs"
                          >
                            <div class="flex items-center gap-1 text-gray-700">
                              <img
                                src="{{ asset('assets/images/flag.svg') }}"
                                alt="Country"
                                class="w-3 h-3"
                              />
                              <span class="text-[10px] font-semibold"
                                >Rojava</span
                              >
                            </div>
                            <div
                              class="flex items-center gap-1 text-orange-500 font-semibold"
                            >
                              <i class="fas fa-star text-xs"></i>
                              <span class="text-[10px] font-semibold">5.0</span>
                              <span class="text-gray-500 text-[10px]"
                                >(3K)</span
                              >
                            </div>
                          </div>
                          <div class="mt-2">
                            <span
                              class="px-2 py-0.5 rounded-full bg-green-500 text-white text-[8px] font-semibold"
                            >
                              SHOP OPEN
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="outer-gray-container rounded-2xl">
                    <div class="custom-card p-0 overflow-visible">
                      <div class="relative">
                        <img
                          src="{{ asset('assets/images/part1.svg') }}"
                          alt="Partner Shop"
                          class="w-full h-32 object-cover rounded-t-2xl"
                        />
                        <div
                          class="absolute top-2 right-2 bg-white/90 backdrop-blur-sm text-red-500 font-semibold px-2 py-1 rounded-full flex items-center gap-1 shadow-md z-10"
                        >
                          <i class="fas fa-heart text-sm"></i>
                          <span class="text-gray-900 font-bold text-xs"
                            >950</span
                          >
                        </div>
                        <div class="absolute -bottom-8 left-3 z-20">
                          <div class="relative">
                            <div
                              class="w-16 h-16 rounded-3xl border border-white overflow-hidden"
                            >
                              <img
                                src="{{ asset('assets/images/part11.svg') }}"
                                alt="Shop Logo"
                                class="w-[83px] object-contain"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-3 pt-6">
                        <div class="flex-1 min-w-0 ml-20">
                          <div class="flex items-center gap-1 mb-1">
                            <h3
                              class="text-sm font-bold text-gray-900 truncate"
                            >
                              SuperMarchent Shop
                            </h3>
                            <i
                              class="fas fa-check-circle text-green-500 text-xs"
                            ></i>
                          </div>
                          <div
                            class="flex flex-wrap items-center gap-2 text-xs"
                          >
                            <div class="flex items-center gap-1 text-gray-700">
                              <img
                                src="{{ asset('assets/images/flag.svg') }}"
                                alt="Country"
                                class="w-3 h-3"
                              />
                              <span class="text-[10px] font-semibold"
                                >Rojava</span
                              >
                            </div>
                            <div
                              class="flex items-center gap-1 text-orange-500 font-semibold"
                            >
                              <i class="fas fa-star text-xs"></i>
                              <span class="text-[10px] font-semibold">5.0</span>
                              <span class="text-gray-500 text-[10px]"
                                >(3K)</span
                              >
                            </div>
                          </div>
                          <div class="mt-2">
                            <span
                              class="px-2 py-0.5 rounded-full bg-green-500 text-white text-[8px] font-semibold"
                            >
                              SHOP OPEN
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Right Panel -->
            <div class="space-y-6">
              <!-- My Cart Section -->
              <div>
                <div class="flex items-center justify-between mb-4">
                  <div>
                    <h3 class="text-xl font-bold text-gray-900">My Cart</h3>
                    <p class="text-gray-600 text-sm">Total Items: 3</p>
                  </div>
                  <button
                    class="text-blue-600 text-sm font-medium flex items-center gap-1"
                  >
                    Show All
                    <i class="fas fa-chevron-down text-xs"></i>
                  </button>
                </div>
                <div id="cart-items" class="space-y-3">
                  <!-- Cart items will be populated here -->
                </div>
              </div>

              <!-- Payment Details Section -->
              <div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                  Payment Details
                </h3>
                <div class="space-y-2 mb-4">
                  <div class="flex justify-between text-sm">
                    <span class="text-gray-700">Account Upgrade:</span>
                    <span class="font-semibold text-gray-900">R 50.00</span>
                  </div>
                  <div class="flex justify-between text-sm">
                    <span class="text-gray-700">Discount 0%:</span>
                    <span class="font-semibold text-gray-900">R 0.00</span>
                  </div>
                  <div class="flex justify-between text-sm">
                    <span class="text-gray-700">Subtotal Net:</span>
                    <span class="font-semibold text-gray-900">R 50.00</span>
                  </div>
                  <div class="flex justify-between text-sm">
                    <span class="text-gray-700 flex items-center gap-1">
                      YekBun 10%:
                      <i class="fas fa-info-circle text-green-500 text-xs"></i>
                    </span>
                    <span class="font-semibold text-gray-900">R 4.00</span>
                  </div>
                  <div
                    class="flex justify-between text-lg font-bold pt-2 border-t border-gray-200"
                  >
                    <span class="text-gray-900">To Pay:</span>
                    <span class="text-green-600" id="cart-total">R 54.00</span>
                  </div>
                </div>

                <!-- Checkout Button -->
                <button
                  onclick="checkout()"
                  class="w-full bg-green-500 hover:bg-green-600 text-white py-4 rounded-lg font-semibold transition-colors flex items-center justify-between px-6 mb-3"
                >
                  <div class="flex flex-col items-start">
                    <span class="text-2xl font-bold">R 54.00</span>
                    <span class="text-xs font-normal">Zer Payment</span>
                  </div>
                  <span class="text-lg">Checkout</span>
                </button>

                <!-- Cashback Info -->
                <div
                  class="flex items-center gap-2 text-green-600 text-sm font-medium"
                >
                  <img
                    src="{{ asset('assets/images/currency.svg') }}"
                    alt="Currency"
                    class="w-4 h-4"
                  />
                  <span>R 25.00 Cashback after Checkout</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer id="contact" class="bg-white border-t border-gray-200 py-6 px-6 ">
      <div class="max-w-7xl mx-auto">
        <!-- Bottom Copyright Bar -->
        <div class="">
          <div
            class="flex flex-col md:flex-row justify-between items-center gap-4"
          >
            <!-- Left: Copyright -->
            <p class="text-gray-600 text-sm">
              Copyright @ 2025
              <a
                href="#"
                class="text-blue-600 hover:text-blue-700 transition-colors font-semibold"
                >lumen.tech</a
              >. All Rights Reserved.
            </p>

            <!-- Right: Legal Links -->
            <div class="flex items-center gap-4 text-sm">
              <a
                href="{{ route('legal-notice') }}"
                class="text-gray-600 hover:text-blue-600 transition-colors"
                >Lumen Legal Notice</a
              >
              <span class="text-gray-300">|</span>
              <a
                href="{{ route('terms') }}"
                class="text-gray-600 hover:text-blue-600 transition-colors"
                >Lumen Terms & Condition</a
              >
              <span class="text-gray-300">|</span>
              <a
                href="{{ route('contact') }}"
                class="text-gray-600 hover:text-blue-600 transition-colors"
                >Contact Lumen</a
              >
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script>
      // Check if user is logged in
      if (!sessionStorage.getItem("isLoggedIn")) {
        window.location.href = "{{ route('login') }}";
      }

      // User data
      let userData = {
        name: "John Doe",
        balance: 250,
        accountType: "Free",
        subscriptionActive: true,
        cart: [],
      };

      // Load user data
      const savedData = localStorage.getItem("userData");
      if (savedData) {
        userData = JSON.parse(savedData);
      }

      // Update UI
      function updateUI() {
        const zerBalance = document.getElementById("zer-balance");
        if (zerBalance) {
          zerBalance.textContent = userData.balance + " Zer";
        }

        const currentAccountType = document.getElementById(
          "current-account-type"
        );
        if (currentAccountType) {
          currentAccountType.textContent = userData.accountType;
        }

        const accountType = document.getElementById("account-type");
        if (accountType) {
          accountType.textContent = userData.accountType + " Plan";
        }

        const cartCount = document.getElementById("cart-count");
        if (cartCount) {
          cartCount.textContent = userData.cart.length;
        }

        const headerCartCount = document.getElementById("header-cart-count");
        if (headerCartCount) {
          headerCartCount.textContent = userData.cart.length;
          if (userData.cart.length === 0) {
            headerCartCount.style.display = "none";
          } else {
            headerCartCount.style.display = "flex";
          }
        }

        // Update sidebar cart count
        const sidebarCartCount = document.getElementById("sidebar-cart-count");
        if (sidebarCartCount) {
          sidebarCartCount.textContent = userData.cart.length;
          if (userData.cart.length === 0) {
            sidebarCartCount.style.display = "none";
          } else {
            sidebarCartCount.style.display = "flex";
          }
        }

        const subscriptionStatus = document.getElementById(
          "subscription-status"
        );
        if (subscriptionStatus) {
          subscriptionStatus.innerHTML = userData.subscriptionActive
            ? '<i class="fas fa-check-circle"></i> Active'
            : '<i class="fas fa-pause-circle"></i> Inactive';
          subscriptionStatus.className = userData.subscriptionActive
            ? "px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-semibold"
            : "px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-semibold";
        }

        const subscriptionBtn = document.getElementById("subscription-btn");
        if (subscriptionBtn) {
          subscriptionBtn.innerHTML = userData.subscriptionActive
            ? '<i class="fas fa-pause"></i> Deactivate Subscription'
            : '<i class="fas fa-play"></i> Activate Subscription';
          subscriptionBtn.className = userData.subscriptionActive
            ? "w-full bg-red-500 hover:bg-red-600 text-white py-2 rounded-lg font-semibold transition-colors"
            : "w-full bg-green-500 hover:bg-green-600 text-white py-2 rounded-lg font-semibold transition-colors";
        }
      }

      // Upgrade Account
      function upgradeAccount(plan, cost) {
        if (userData.balance < cost) {
          showAlert(
            "error",
            "You have no enough balance to upgrade your account. Please purchase more Zer credits."
          );
          return;
        }

        if (confirm(`Upgrade to ${plan} plan for ${cost} Zer?`)) {
          userData.balance -= cost;
          userData.accountType = plan;
          localStorage.setItem("userData", JSON.stringify(userData));
          updateUI();
          showAlert("success", `Account upgraded to ${plan} successfully!`);
        }
      }

      // Add to Cart
      function addToCart(item, price) {
        userData.cart.push({ item, price });
        localStorage.setItem("userData", JSON.stringify(userData));
        updateUI();
        showAlert("success", `${item} added to cart!`);
      }

      // Show Cart
      function showCart() {
        const modal = document.getElementById("cart-modal");
        const cartItems = document.getElementById("cart-items");
        const cartTotal = document.getElementById("cart-total");

        if (userData.cart.length === 0) {
          cartItems.innerHTML =
            '<p class="text-center text-gray-500 py-8">Your cart is empty</p>';
          cartTotal.textContent = "R 0.00";
        } else {
          // Sample cart items matching the image
          cartItems.innerHTML = `
            <!-- Gold list -->
            <div class="flex items-start gap-3 p-3 border border-gray-200 rounded-lg bg-white">
              <img src="{{ asset('assets/images/g14.svg') }}" alt="Gold list" class="w-12 h-12 flex-shrink-0">
              <div class="flex-1">
                <h4 class="font-semibold text-gray-900 text-sm mb-1">Gold list</h4>
                <p class="text-gray-600 text-xs mb-2">Upgrade your Playlist & get 100....</p>
                <div class="flex items-center gap-2">
                  <span class="text-sm font-bold text-gray-900">R 475.00</span>
                  <span class="text-xs text-gray-400 line-through">R 500.00</span>
                  <span class="text-xs text-green-600 font-medium">R 25.00</span>
                        </div>
                    </div>
            </div>
            
            <!-- Gold -->
            <div class="flex items-start gap-3 p-3 border border-gray-200 rounded-lg bg-white">
              <img src="{{ asset('assets/images/coins.svg') }}" alt="Gold" class="w-12 h-12 flex-shrink-0">
              <div class="flex-1">
                <h4 class="font-semibold text-gray-900 text-sm mb-1">Gold</h4>
                <div class="flex items-center gap-2">
                  <span class="text-sm font-bold text-gray-900">R 5000.00</span>
                  <span class="text-xs text-gray-600">€ 49.99</span>
                </div>
              </div>
            </div>
            
            <!-- Silver Stream -->
            <div class="flex items-start gap-3 p-3 border border-gray-200 rounded-lg bg-white">
              <img src="{{ asset('assets/images/g16.svg') }}" alt="Silver Stream" class="w-12 h-12 flex-shrink-0">
              <div class="flex-1">
                <h4 class="font-semibold text-gray-900 text-sm mb-1">Silver Stream</h4>
                <p class="text-gray-600 text-xs mb-2">2000 Min</p>
                <div class="flex items-center gap-2">
                  <span class="text-sm font-bold text-gray-900">R 475.00</span>
                  <span class="text-xs text-gray-400 line-through">R 500.00</span>
                  <span class="text-xs text-green-600 font-medium">R 25.00</span>
                </div>
              </div>
            </div>
            
            <!-- Academic Access -->
            <div class="flex items-start gap-3 p-3 border border-gray-200 rounded-lg bg-white">
              <img src="{{ asset('assets/images/academic.svg') }}" alt="Academic Access" class="w-12 h-12 flex-shrink-0">
              <div class="flex-1">
                <div class="flex items-center justify-between mb-1">
                  <h4 class="font-semibold text-gray-900 text-sm">Academic Access</h4>
                  <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="sr-only peer" checked>
                    <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-green-500"></div>
                  </label>
                </div>
                <p class="text-gray-600 text-xs mb-2">Monthly Auto Renew</p>
                <div class="flex items-center gap-2">
                  <span class="text-sm font-bold text-gray-900">R 475.00</span>
                  <span class="text-xs text-gray-400 line-through">R 500.00</span>
                  <span class="text-xs text-green-600 font-medium">R 25.00</span>
                </div>
              </div>
            </div>
          `;

          // Update total
          cartTotal.textContent = "R 54.00";
        }

        modal.classList.remove("hidden");
      }

      // Close Cart
      function closeCart() {
        document.getElementById("cart-modal").classList.add("hidden");
      }

      // Remove from Cart
      function removeFromCart(index) {
        userData.cart.splice(index, 1);
        localStorage.setItem("userData", JSON.stringify(userData));
        updateUI();
        showCart();
      }

      // Checkout
      function checkout() {
        if (userData.cart.length === 0) {
          showAlert("error", "Your cart is empty");
          return;
        }
        // Redirect to checkout page
        window.location.href = "{{ route('checkout') }}";
      }

      // Toggle Subscription
      function toggleSubscription() {
        userData.subscriptionActive = !userData.subscriptionActive;
        localStorage.setItem("userData", JSON.stringify(userData));
        updateUI();

        if (userData.subscriptionActive) {
          showAlert("success", "Subscription activated successfully!");
        } else {
          showAlert("success", "Subscription deactivated successfully!");
        }
      }

      // Show Alert
      function showAlert(type, message) {
        const alert = document.createElement("div");
        alert.className = `alert ${
          type === "success" ? "bg-green-500" : "bg-red-500"
        } text-white px-6 py-4 rounded-lg shadow-xl flex items-center gap-3`;
        alert.innerHTML = `
                <i class="fas ${
                  type === "success"
                    ? "fa-check-circle"
                    : "fa-exclamation-circle"
                } text-xl"></i>
                <span>${message}</span>
            `;

        document.body.appendChild(alert);

        setTimeout(() => {
          alert.style.animation = "slideInRight 0.3s ease-out reverse";
          setTimeout(() => alert.remove(), 300);
        }, 3000);
      }

      // Logout
      const logoutBtn = document.getElementById("logout-btn");
      const mobileLogoutBtn = document.getElementById("mobile-logout-btn");

      function handleLogout() {
        if (confirm("Are you sure you want to logout?")) {
          sessionStorage.removeItem("isLoggedIn");
          sessionStorage.removeItem("userEmail");
          window.location.href = "{{ route('home') }}";
        }
      }

      if (logoutBtn) {
        logoutBtn.addEventListener("click", handleLogout);
      }
      if (mobileLogoutBtn) {
        mobileLogoutBtn.addEventListener("click", handleLogout);
      }

      // Update mobile user info
      function updateMobileUserInfo() {
        const mobileUserName = document.getElementById("mobile-user-name");
        const mobileAccountType = document.getElementById(
          "mobile-account-type"
        );
        const mobileUserAvatar = document.getElementById("mobile-user-avatar");

        if (mobileUserName) mobileUserName.textContent = userData.name;
        if (mobileAccountType)
          mobileAccountType.textContent = userData.accountType + " Plan";
        if (mobileUserAvatar) {
          const initials = userData.name
            .split(" ")
            .map((n) => n[0])
            .join("")
            .toUpperCase();
          mobileUserAvatar.textContent = initials;
        }
      }

      // Sidebar Toggle for Medium Devices
      const mobileMenuBtn = document.getElementById("mobile-menu-btn");
      const sidebarMd = document.getElementById("sidebar-md");
      const sidebarOverlay = document.getElementById("sidebar-overlay");
      const sidebarClose = document.getElementById("sidebar-close");

      function openSidebar() {
        if (sidebarMd && sidebarOverlay) {
          // Remove translate-x-full to slide it in from right
          sidebarMd.classList.remove("translate-x-full");
          sidebarMd.classList.add("translate-x-0");
          // Show overlay
          sidebarOverlay.classList.remove("hidden");
        }
      }

      function closeSidebar() {
        if (sidebarMd && sidebarOverlay) {
          // Slide sidebar out to the right
          sidebarMd.classList.add("translate-x-full");
          sidebarMd.classList.remove("translate-x-0");
          // Hide overlay
          sidebarOverlay.classList.add("hidden");
        }
      }

      if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener("click", openSidebar);
      }

      if (sidebarClose) {
        sidebarClose.addEventListener("click", closeSidebar);
      }

      if (sidebarOverlay) {
        sidebarOverlay.addEventListener("click", closeSidebar);
      }

      // Dashboard Pricing Toggle Functionality
      document.addEventListener("DOMContentLoaded", function () {
        const toggleWrapper = document.getElementById("dashboard-plan-toggle");
        const monthlyCard = document.getElementById("dashboard-monthly-card");
        const yearlyCard = document.getElementById("dashboard-yearly-card");
        const slider = toggleWrapper ? toggleWrapper.querySelector(".dashboard-toggle-slider") : null;
        const dashboardPriceElements = document.querySelectorAll(
          ".dashboard-price-value"
        );

        let isYearly = false;

        function updateToggleState() {
          if (isYearly) {
            // Yearly is active
            monthlyCard.classList.remove("active");
            yearlyCard.classList.add("active");
            
            // Move slider to yearly position
            if (slider && monthlyCard && yearlyCard) {
              const wrapperPadding = 4;
              slider.style.left = (monthlyCard.offsetWidth + wrapperPadding) + "px";
              slider.style.width = yearlyCard.offsetWidth + "px";
            }
          } else {
            // Monthly is active
            monthlyCard.classList.add("active");
            yearlyCard.classList.remove("active");
            
            // Move slider to monthly position
            if (slider && monthlyCard) {
              slider.style.left = "4px";
              slider.style.width = monthlyCard.offsetWidth + "px";
            }
          }

          // Update prices
          dashboardPriceElements.forEach((priceEl) => {
            if (isYearly) {
              priceEl.textContent = priceEl.getAttribute("data-yearly");
            } else {
              priceEl.textContent = priceEl.getAttribute("data-monthly");
            }
          });
        }

        if (monthlyCard && yearlyCard) {
          // Initialize slider width and position
          if (slider) {
            setTimeout(() => {
              slider.style.left = "4px";
              slider.style.width = monthlyCard.offsetWidth + "px";
            }, 0);
          }

          monthlyCard.addEventListener("click", function () {
            isYearly = false;
            updateToggleState();
          });

          yearlyCard.addEventListener("click", function () {
            isYearly = true;
            updateToggleState();
          });

          // Initialize (monthly is default)
          updateToggleState();
        }

        // Playlist Monthly/Yearly Toggle (Upgrade Music Playlist cards)
        const playlistToggleGroups = document.querySelectorAll(
          "[data-playlist-toggle]"
        );

        function setPlaylistPeriod(toggleGroup, period) {
          const card = toggleGroup.closest("[data-playlist-card]");
          if (!card) return;

          const priceEl = card.querySelector("[data-playlist-price]");
          if (!priceEl) return;

          const monthlyBtn = toggleGroup.querySelector(
            '[data-period="monthly"]'
          );
          const yearlyBtn = toggleGroup.querySelector('[data-period="yearly"]');
          const slider = toggleGroup.querySelector(".toggle-slider");

          // Update button active states
          if (monthlyBtn && yearlyBtn) {
            if (period === "yearly") {
              yearlyBtn.classList.add("active");
              monthlyBtn.classList.remove("active");
              toggleGroup.classList.add("yearly");
            } else {
              monthlyBtn.classList.add("active");
              yearlyBtn.classList.remove("active");
              toggleGroup.classList.remove("yearly");
            }
          }

          // Update slider position and width
          if (slider && monthlyBtn && yearlyBtn) {
            const activeBtn = period === "yearly" ? yearlyBtn : monthlyBtn;
            const wrapperPadding =
              parseInt(window.getComputedStyle(toggleGroup).paddingLeft) || 3;

            if (period === "yearly") {
              slider.style.left =
                monthlyBtn.offsetWidth + wrapperPadding + "px";
              slider.style.width = yearlyBtn.offsetWidth + "px";
            } else {
              slider.style.left = wrapperPadding + "px";
              slider.style.width = monthlyBtn.offsetWidth + "px";
            }
          }

          // Update price text
          const attr = period === "yearly" ? "data-yearly" : "data-monthly";
          const nextPrice = priceEl.getAttribute(attr);
          if (nextPrice) priceEl.textContent = nextPrice;
        }

        playlistToggleGroups.forEach((toggleGroup) => {
          const monthlyBtn = toggleGroup.querySelector(
            '[data-period="monthly"]'
          );
          const yearlyBtn = toggleGroup.querySelector('[data-period="yearly"]');
          const slider = toggleGroup.querySelector(".toggle-slider");

          // Set initial slider width and position
          if (slider && monthlyBtn) {
            setTimeout(() => {
              const wrapperPadding =
                parseInt(window.getComputedStyle(toggleGroup).paddingLeft) || 3;
              slider.style.left = wrapperPadding + "px";
              slider.style.width = monthlyBtn.offsetWidth + "px";
            }, 0);
          }

          if (monthlyBtn) {
            monthlyBtn.addEventListener("click", () => {
              setPlaylistPeriod(toggleGroup, "monthly");
            });
          }
          if (yearlyBtn) {
            yearlyBtn.addEventListener("click", () => {
              setPlaylistPeriod(toggleGroup, "yearly");
            });
          }

          // Initialize (monthly default)
          setPlaylistPeriod(toggleGroup, "monthly");
        });
      });

      // Sidebar Language Dropdown
      const sidebarLanguageBtn = document.getElementById(
        "sidebar-language-btn"
      );
      const sidebarLanguageDropdown = document.getElementById(
        "sidebar-language-dropdown"
      );
      const sidebarLanguageOptions = document.querySelectorAll(
        ".sidebar-language-option"
      );

      if (sidebarLanguageBtn && sidebarLanguageDropdown) {
        sidebarLanguageBtn.addEventListener("click", function (e) {
          e.stopPropagation();
          sidebarLanguageDropdown.classList.toggle("hidden");
        });

        // Close dropdown when clicking outside
        document.addEventListener("click", function (e) {
          if (
            sidebarLanguageDropdown &&
            !sidebarLanguageDropdown.contains(e.target) &&
            !sidebarLanguageBtn.contains(e.target)
          ) {
            sidebarLanguageDropdown.classList.add("hidden");
          }
        });

        // Handle language selection
        sidebarLanguageOptions.forEach((option) => {
          option.addEventListener("click", function (e) {
            e.preventDefault();
            const lang = this.getAttribute("data-lang");
            const sidebarCurrentLang = document.getElementById(
              "sidebar-current-lang"
            );
            const currentLang = document.getElementById("current-lang");

            // Update sidebar language display
            if (sidebarCurrentLang) {
              sidebarCurrentLang.textContent = lang;
            }
            // Update header language display
            if (currentLang) {
              currentLang.textContent = lang;
            }

            // Update checkmarks
            document.querySelectorAll("[data-check]").forEach((check) => {
              check.classList.add("hidden");
            });
            const selectedCheck = document.querySelector(
              `[data-check="${lang}"]`
            );
            if (selectedCheck) {
              selectedCheck.classList.remove("hidden");
            }

            // Hide dropdown
            sidebarLanguageDropdown.classList.add("hidden");
          });
        });
      }

      // Sidebar Logout Button
      const sidebarLogoutBtn = document.getElementById("sidebar-logout-btn");
      if (sidebarLogoutBtn) {
        sidebarLogoutBtn.addEventListener("click", function () {
          if (confirm("Are you sure you want to logout?")) {
            sessionStorage.removeItem("isLoggedIn");
            localStorage.removeItem("userData");
            window.location.href = "{{ route('login') }}";
          }
        });
      }

      // Update Sidebar User Info
      function updateSidebarUserInfo() {
        const sidebarUserName = document.getElementById("sidebar-user-name");
        const sidebarAccountType = document.getElementById(
          "sidebar-account-type"
        );
        const sidebarUserAvatar = document.getElementById(
          "sidebar-user-avatar"
        );

        if (sidebarUserName) sidebarUserName.textContent = userData.name;
        if (sidebarAccountType)
          sidebarAccountType.textContent = userData.accountType + " Plan";
        if (sidebarUserAvatar) {
          const initials = userData.name
            .split(" ")
            .map((n) => n[0])
            .join("")
            .toUpperCase();
          sidebarUserAvatar.textContent = initials;
        }
      }

      // Initialize
      updateUI();
      updateMobileUserInfo();
      updateSidebarUserInfo();

      // Header scroll effect
      const header = document.querySelector("header");

      if (header) {
        window.addEventListener("scroll", () => {
          const currentScroll = window.pageYOffset || window.scrollY;

          if (currentScroll > 50) {
            header.classList.add("scrolled");
          } else {
            header.classList.remove("scrolled");
          }
        });

        // Check on page load in case page is already scrolled
        if (window.pageYOffset > 50 || window.scrollY > 50) {
          header.classList.add("scrolled");
        }
      }
    </script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
  </body>
</html>
