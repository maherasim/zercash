@extends('layouts.app')
@section('title', 'Lumen - Money made simple, for everyone')
@section('content')
    <!-- Hero Section -->
    <section
      class="pt-32 h-screen md:px-6 relative overflow-hidden video-background-section"
      style="background-color: #f1f2ff"
    >
      <!-- Video -->
      <video
        autoplay
        muted
        loop
        playsinline
        class="video-background absolute inset-0 w-full h-full object-cover"
      >
        <source src="{{ asset('assets/images/video.mp4') }}" type="video/mp4" />
      </video>

      <div class="video-overlay absolute inset-0"></div>

      <!-- Content -->
      <div class="max-w-7xl mx-auto mt-20 relative z-10 text-center">
        <h1 class="text-3xl md:text-[70px] font-bold text-white mb-10">
          Discover YekBûn
        </h1>
      </div>

      <!-- Bottom Image -->
      <img
        src="{{ asset('assets/images/Black.png') }}"
        alt="Lumen App Screen"
        class="fixed bottom-0 left-1/2 -translate-x-1/2 h-[80vh] object-contain z-10"
      />
    </section>

    <!-- Mobile Mockups Section -->
    <section
      class="py-20 px-6 relative overflow-hidden"
      style="background-color: #f1f2ff"
    >
      <div class="max-w-7xl mx-auto bg-white rounded-[60px] py-10 px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <!-- Left Side: Image with Gradient Circle -->
          <div
            class="relative flex justify-center lg:justify-start animate-on-scroll slide-in-left float-animation"
            style="animation-delay: 0.2s"
          >
            <!-- Gradient Circle Background -->
            <div class="absolute inset-0 flex items-center justify-center">
              <div
                class="w-96 h-96 md:w-[450px] md:h-[450px] rounded-full bg-gradient-to-b from-[#dee5fd] to-[#3e66f3] opacity-60"
              ></div>
            </div>
            <!-- Image -->
            <div class="relative mx-auto z-10">
              <img
                src="{{ asset('assets/images/Black1.png') }}"
                alt="YekBûn App Screens"
                class="w-full max-w-md ml-4 md:max-w-lg object-contain"
              />
            </div>
          </div>

          <!-- Right Side: Text Content and Buttons -->
          <div
            class="flex flex-col justify-center space-y-6 animate-on-scroll slide-in-right float-animation"
            style="animation-delay: 0.4s"
          >
            <!-- Headline -->
            <h2
              class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight"
            >
              Seamless User Experience Across All Features Of YekBûn
            </h2>

            <!-- Description -->
            <p class="text-lg text-gray-600 leading-relaxed max-w-2xl">
              We designed YekBûn to deliver an intuitive and engaging user
              journey — from quick setup and profile management to sharing
              posts, images, and videos. Every feature is built for simplicity,
              speed, and connection, making it easier than ever for users to
              interact, express themselves, and explore Kurdish culture within
              one unified platform.
            </p>

            <!-- Download Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 pt-4">
              <!-- Google Play Button -->
              <a
                href="#"
                class="inline-block bg-black rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-xl"
              >
                <img
                  src="{{ asset('assets/images/googledownload.png') }}"
                  alt="Get it on Google Play"
                  class="w-full h-full object-contain"
                />
              </a>

              <!-- App Store Button -->
              <a
                href="#"
                class="inline-block bg-black rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-xl"
              >
                <img
                  src="{{ asset('assets/images/appstoredownload.png') }}"
                  alt="Download on the App Store"
                  class="w-full h-full object-contain"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Statistics Section -->
    <section id="pricing" class="py-20 px-6" style="background-color: #f1f2ff">
      <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12 animate-on-scroll fade-in-up">
          <!-- Title -->
          <h2
            class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-8"
          >
            Pricing
          </h2>

          <!-- Toggle Switch -->
          <div class="flex items-center justify-center gap-4 mb-12">
            <span id="monthly-label" class="text-blue-600 font-medium"
              >Pay Monthly</span
            >
            <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" id="pricing-toggle" class="sr-only peer" />
              <div
                class="w-14 h-7 bg-gray-300 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-blue-600"
              ></div>
            </label>
            <span id="yearly-label" class="text-gray-600 font-medium"
              >Pay Yearly</span
            >
          </div>
        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
          <!-- Cultivated Card -->
          <div
            class="animate-on-scroll fade-in-up"
            style="animation-delay: 0.2s"
          >
            <div
              class="relative pricing-card-cut-corner"
              style="
                background-image: url('{{ asset("assets/images/pricing.png") }}');
                background-size: 100% 100%;
                background-repeat: no-repeat;
                border-radius: 10px;
                background-position: center;
              "
            >
              <div class="p-8 flex flex-col flex-grow h-full">
                <!-- Badge with Cultivated -->
                <div class="">
                  <img
                    src="{{ asset('assets/images/cultivated.svg') }}"
                    alt="Cultivated"
                    class="w-[260px] h-[87px] relative -top-12 -left-16"
                  />
                </div>

                <!-- Price Display -->
                <div class="mb-6 -mt-12">
                  <div class="flex items-baseline gap-2 mb-4">
                    <img
                      src="{{ asset('assets/images/currency.svg') }}"
                      alt="Naira"
                      class="w-[44px] h-[44px]"
                    />
                    <span
                      class="text-6xl text-gray-900 price-value"
                      data-monthly="19.99"
                      data-yearly="199.99"
                      >19.99</span
                    >
                  </div>
                  <p class="text-gray-700 text-sm leading-relaxed">
                    For individual use with 30 summaries a month, no ads, and
                    basic features.
                  </p>
                </div>

                <!-- Feature Icons Row -->
                <div class="flex flex-wrap gap-3 mb-6">
                  <div
                    class="w-12 h-12 bg-[#feeee9] rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/cultivated/1.svg') }}"
                      alt="Feature Icon 1"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-12 h-12 bg-[#feeee9] rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/cultivated/2.svg') }}"
                      alt="Feature Icon 2"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-12 h-12 bg-[#feeee9] rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/cultivated/3.svg') }}"
                      alt="Feature Icon 3"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-12 h-12 bg-[#feeee9] rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/cultivated/4.svg') }}"
                      alt="Feature Icon 4"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-12 h-12 bg-[#feeee9] rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/cultivated/5.svg') }}"
                      alt="Feature Icon 5"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-12 h-12 bg-[#feeee9] rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/cultivated/6.svg') }}"
                      alt="Feature Icon 6"
                      class="w-8 h-8"
                    />
                  </div>
                </div>

                <!-- Features List -->
                <ul class="space-y-3 mb-8 flex-grow">
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-red-500"></i>
                    <span class="text-gray-700 text-sm">Follow Users</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-red-500"></i>
                    <span class="text-gray-700 text-sm">Enjoy Music</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-red-500"></i>
                    <span class="text-gray-700 text-sm">Enjoy Videos</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-red-500"></i>
                    <span class="text-gray-700 text-sm">Standard Wallet</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-red-500"></i>
                    <span class="text-gray-700 text-sm">Get cashback</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-red-500"></i>
                    <span class="text-gray-700 text-sm">and more</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Educated Card -->
          <div
            class="animate-on-scroll fade-in-up"
            style="animation-delay: 0.4s"
          >
            <div
              class="relative pricing-card-cut-corner"
              style="
                background-image: url('{{ asset("assets/images/pricing.png") }}');
                background-size: 100% 100%;
                background-repeat: no-repeat;
                background-position: center;
                border-radius: 10px;
              "
            >
              <!-- RECOMMENDED Badge -->

              <div class="p-8 flex flex-col flex-grow h-full">
                <!-- Badge with Educated -->
                <div class="">
                  <img
                    src="{{ asset('assets/images/educated.svg') }}"
                    alt="Educated"
                    class="w-[260px] h-[87px] relative -top-12 -left-16"
                  />
                </div>

                <!-- Price Display -->
                <div class="mb-6 -mt-12">
                  <div class="flex items-baseline gap-2 mb-4">
                    <img
                      src="{{ asset('assets/images/currency.svg') }}"
                      alt="Naira"
                      class="w-[44px] h-[44px]"
                    />
                    <span
                      class="text-6xl text-gray-900 price-value"
                      data-monthly="49.99"
                      data-yearly="499.99"
                      >49.99</span
                    >
                  </div>
                  <p class="text-gray-700 text-sm leading-relaxed">
                    Unlimited summaries, customization, quick support, and app
                    integrations for professionals.
                  </p>
                </div>

                <!-- Feature Icons Row -->
                <div class="flex flex-wrap gap-3 mb-6">
                  <div
                    class="w-[44px] h-[44px] bg-yellow-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/educated/1.svg') }}"
                      alt="Feature Icon 1"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-[44px] h-[44px] bg-yellow-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/educated/2.svg') }}"
                      alt="Feature Icon 2"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-[44px] h-[44px] bg-yellow-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/educated/3.svg') }}"
                      alt="Feature Icon 3"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-[44px] h-[44px] bg-yellow-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/educated/4.svg') }}"
                      alt="Feature Icon 4"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-[44px] h-[44px] bg-yellow-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/educated/5.svg') }}"
                      alt="Feature Icon 5"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-[44px] h-[44px] bg-yellow-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/educated/6.svg') }}"
                      alt="Feature Icon 6"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-[44px] h-[44px] bg-yellow-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/educated/7.svg') }}"
                      alt="Feature Icon 7"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-[44px] h-[44px] bg-yellow-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/educated/8.svg') }}"
                      alt="Feature Icon 8"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-[44px] h-[44px] bg-yellow-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/educated/9.svg') }}"
                      alt="Feature Icon 9"
                      class="w-8 h-8"
                    />
                  </div>
                </div>

                <!-- Features List -->
                <ul class="space-y-3 mb-8 flex-grow">
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-yellow-500"></i>
                    <span class="text-gray-700 text-sm">Follow Users</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-yellow-500"></i>
                    <span class="text-gray-700 text-sm">Enjoy Music</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-yellow-500"></i>
                    <span class="text-gray-700 text-sm">Enjoy Videos</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-yellow-500"></i>
                    <span class="text-gray-700 text-sm">Create Channel</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-yellow-500"></i>
                    <span class="text-gray-700 text-sm">Text Comments</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-yellow-500"></i>
                    <span class="text-gray-700 text-sm">Voice Comment</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-yellow-500"></i>
                    <span class="text-gray-700 text-sm">Business Wallet</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-yellow-500"></i>
                    <span class="text-gray-700 text-sm">Get cashback</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-yellow-500"></i>
                    <span class="text-gray-700 text-sm">and more</span>
                  </li>
                </ul>

                <!-- CTA Button -->
                <!-- <button
                  class="w-full bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-xl font-semibold transition-all duration-300 hover:scale-105 flex items-center justify-center gap-2 mt-auto"
                >
                  Get Started
                  <div
                    class="w-6 h-6 bg-white rounded-full flex items-center justify-center"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-3 h-3 text-blue-500"
                                        fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                                        stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M7 17L17 7M7 7h10v10"
                                    />
                                </svg>
                            </div>
                </button> -->
              </div>
            </div>
          </div>

          <!-- Academic Card -->
          <div
            class="animate-on-scroll fade-in-up"
            style="animation-delay: 0.6s"
          >
            <div
              class="relative pricing-card-cut-corner"
              style="
                background-image: url('{{ asset("assets/images/pricing.png") }}');
                background-size: 100% 100%;
                background-repeat: no-repeat;
                background-position: center;
                border-radius: 10px;
              "
            >
              <div class="p-8 flex flex-col flex-grow h-full">
                <!-- Badge with Academic -->
                <div class="">
                  <img
                    src="{{ asset('assets/images/academic.svg') }}"
                    alt="Academic"
                    class="w-[260px] h-[97px] relative -top-12 -left-16"
                  />
                </div>

                <!-- Price Display -->
                <div class="mb-6 -mt-12">
                  <div class="flex items-baseline gap-2 mb-4">
                    <img
                      src="{{ asset('assets/images/currency.svg') }}"
                      alt="Naira"
                      class="w-[44px] h-[44px]"
                    />
                    <span
                      class="text-6xl text-gray-900 price-value"
                      data-monthly="99.99"
                      data-yearly="999.99"
                      >99.99</span
                    >
                  </div>
                  <p class="text-gray-700 text-sm leading-relaxed">
                    Team-focused with priority support, API access, and advanced
                    security options.
                  </p>
                </div>

                <!-- Feature Icons Row -->
                <div class="flex flex-wrap gap-3 mb-6">
                  <div
                    class="w-[44px] h-[44px] bg-green-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/academic/1.svg') }}"
                      alt="Feature Icon 1"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-[44px] h-[44px] bg-green-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/academic/2.svg') }}"
                      alt="Feature Icon 2"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-[44px] h-[44px] bg-green-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/academic/3.svg') }}"
                      alt="Feature Icon 3"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-[44px] h-[44px] bg-green-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/academic/4.svg') }}"
                      alt="Feature Icon 4"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-[44px] h-[44px] bg-green-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/academic/5.svg') }}"
                      alt="Feature Icon 5"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-[44px] h-[44px] bg-green-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/academic/6.svg') }}"
                      alt="Feature Icon 6"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-[44px] h-[44px] bg-green-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/academic/7.svg') }}"
                      alt="Feature Icon 7"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-[44px] h-[44px] bg-green-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/academic/8.svg') }}"
                      alt="Feature Icon 8"
                      class="w-8 h-8"
                    />
                  </div>
                  <div
                    class="w-[44px] h-[44px] bg-green-100 rounded-lg flex items-center justify-center"
                  >
                    <img
                      src="{{ asset('assets/images/academic/9.svg') }}"
                      alt="Feature Icon 9"
                      class="w-8 h-8"
                    />
                  </div>
                </div>

                <!-- Features List -->
                <ul class="space-y-3 mb-8 flex-grow">
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-blue-500"></i>
                    <span class="text-gray-700 text-sm">Follow Users</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-blue-500"></i>
                    <span class="text-gray-700 text-sm">Enjoy Music</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-blue-500"></i>
                    <span class="text-gray-700 text-sm">Enjoy Videos</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-blue-500"></i>
                    <span class="text-gray-700 text-sm">Create Channel</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-blue-500"></i>
                    <span class="text-gray-700 text-sm">Text Comments</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-blue-500"></i>
                    <span class="text-gray-700 text-sm">Voice Comment</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-blue-500"></i>
                    <span class="text-gray-700 text-sm">Business Wallet</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-blue-500"></i>
                    <span class="text-gray-700 text-sm">Get cashback</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <i class="fas fa-check text-blue-500"></i>
                    <span class="text-gray-700 text-sm">and more</span>
                  </li>
                </ul>

                <!-- CTA Button -->
                <!-- <button
                  class="w-full bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-xl font-semibold transition-all duration-300 hover:scale-105 flex items-center justify-center gap-2 mt-auto"
                >
                  Start From Here
                  <div
                    class="w-6 h-6 bg-white rounded-full flex items-center justify-center"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="w-3 h-3 text-blue-500"
                                                fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                                                stroke-width="2"
                    >
                      <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10" />
                                </div>
                </button> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      class="py-20 px-6 relative overflow-hidden"
      style="background-color: #f1f2ff"
    >
      <div class="max-w-7xl mx-auto bg-white rounded-[60px] py-10 px-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <!-- left Side: Text Content and Buttons -->
          <div
            class="flex flex-col justify-center space-y-6 animate-on-scroll slide-in-right float-animation"
            style="animation-delay: 0.4s"
          >
            <!-- Headline -->
            <h2
              class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight"
            >
              Immersive Music Experience with YekBûn Sound Platform
            </h2>

            <!-- Description -->
            <p class="text-lg text-gray-600 leading-relaxed max-w-2xl">
              Discover Kurdish music like never before with YekBûn’s built-in
              sound player. Stream songs, create personal playlists, and follow
              your favorite artists — all within one elegant and easy-to-use
              interface. Designed for smooth performance and deep cultural
              connection, YekBûn brings the rhythm of Kurdish heritage directly
              to your hands.
            </p>

            <!-- Download Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 pt-4">
              <!-- Google Play Button -->
              <a
                href="#"
                class="inline-block rounded-xl bg-black transition-all duration-300 hover:scale-105 hover:shadow-xl"
              >
                <img
                  src="{{ asset('assets/images/googledownload.png') }}"
                  alt="Get it on Google Play"
                  class="w-full h-full object-contain"
                />
              </a>

              <!-- App Store Button -->
              <a
                href="#"
                class="inline-block bg-black rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-xl"
              >
                <img
                  src="{{ asset('assets/images/appstoredownload.png') }}"
                  alt="Download on the App Store"
                  class="w-full h-full object-contain"
                />
              </a>
            </div>
          </div>
          <div
            class="relative flex justify-center lg:justify-start animate-on-scroll slide-in-left float-animation"
            style="animation-delay: 0.2s"
          >
            <!-- Gradient Circle Background -->
            <div class="absolute inset-0 flex items-center justify-center">
              <div
                class="w-96 h-96 md:w-[450px] md:h-[450px] rounded-full bg-gradient-to-r from-[#3d64ee] to-[#b9c7fb] opacity-60"
              ></div>
            </div>
            <!-- Image -->
            <div class="relative mx-auto z-10">
              <img
                src="{{ asset('assets/images/section4.png') }}"
                alt="YekBûn App Screens"
                class="w-full max-w-md ml-4 md:max-w-lg object-contain"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Charge Zer Section -->
    <section id="charge-zer" class="py-20 px-6 bg-white">
      <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12 animate-on-scroll fade-in-up">
          <h2
            class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-4"
          >
            Charge Zer
          </h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Purchase Zer credits to power your Lumen account
          </p>
        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 bg-transparent">
          <!-- Bronze Card -->
          <div
            class="animate-on-scroll fade-in-up bg-transparent"
            style="animation-delay: 0.2s"
          >
            <div
              class="charge-zer-card p-8 transition-all duration-300 hover:scale-105 h-full flex flex-col"
              style="
                background-image: url('{{ asset("assets/images/cardbg.png") }}');
                background-size: 100% 100%;
                background-repeat: no-repeat;
                background-position: center;
              "
            >
              <!-- Header with Coins -->
              <div class="flex items-center gap-4 mb-6">
                <div class="relative">
                  <img
                    src="{{ asset('assets/images/coin.png') }}"
                    alt="Coins"
                    class="w-16 h-16 object-contain"
                  />
                </div>
                <div class="flex flex-col">
                  <h3 class="text-2xl font-bold text-gray-900">Bronze</h3>
                  <p class="text-2xl font-bold text-green-600">€49.99</p>
                </div>
              </div>

              <!-- Zer Amount -->
              <div class="mb-6">
                <div class="flex items-baseline gap-2">
                  <img
                    src="{{ asset('assets/images/currency.svg') }}"
                    alt="Zer Currency"
                    class="w-12 h-12"
                  />
                  <span class="text-5xl font-extrabold text-amber-700"
                    >5.000</span
                  >
                </div>
              </div>

              <!-- Description -->
              <p class="text-gray-600 text-sm mb-8 leading-relaxed flex-grow">
                Zer is YekBûn's virtual currency for unlocking premium features,
                account upgrades, and exclusive digital goods.
              </p>

              <!-- Horizontal Line -->
              <div class="border-t border-green-200 mb-6"></div>

              <!-- Feature Icons -->
              <div class="flex gap-3 justify-center flex-nowrap">
                <div
                  class="w-10 h-10 bg-[#f7ece0] rounded-lg flex items-center justify-center flex-shrink-0"
                >
                  <img
                    src="{{ asset('assets/images/bronze/1.svg') }}"
                    alt="Feature Icon 1"
                    class="w-6 h-6"
                  />
                </div>
                <div
                  class="w-10 h-10 bg-[#f7ece0] rounded-lg flex items-center justify-center flex-shrink-0"
                >
                  <img
                    src="{{ asset('assets/images/bronze/2.svg') }}"
                    alt="Feature Icon 2"
                    class="w-6 h-6"
                  />
                </div>
                <div
                  class="w-10 h-10 bg-[#f7ece0] rounded-lg flex items-center justify-center flex-shrink-0"
                >
                  <img
                    src="{{ asset('assets/images/bronze/3.svg') }}"
                    alt="Feature Icon 3"
                    class="w-6 h-6"
                  />
                </div>
                <div
                  class="w-10 h-10 bg-[#f7ece0] rounded-lg flex items-center justify-center flex-shrink-0"
                >
                  <img
                    src="{{ asset('assets/images/bronze/4.svg') }}"
                    alt="Feature Icon 4"
                    class="w-6 h-6"
                  />
                </div>
                <div
                  class="w-10 h-10 bg-[#f7ece0] rounded-lg flex items-center justify-center flex-shrink-0"
                >
                  <img
                    src="{{ asset('assets/images/bronze/5.svg') }}"
                    alt="Feature Icon 5"
                    class="w-6 h-6"
                  />
                </div>
                <div
                  class="w-10 h-10 bg-[#f7ece0] rounded-lg flex items-center justify-center flex-shrink-0"
                >
                  <img
                    src="{{ asset('assets/images/bronze/6.svg') }}"
                    alt="Feature Icon 6"
                    class="w-6 h-6"
                  />
                </div>
              </div>
            </div>
          </div>

          <!-- Silver Card -->
          <div
            class="animate-on-scroll fade-in-up"
            style="animation-delay: 0.4s"
          >
            <div
              class="charge-zer-card p-8 transition-all duration-300 hover:scale-105 h-full flex flex-col"
              style="
                background-image: url('{{ asset("assets/images/cardbg.png") }}');
                background-size: 100% 100%;
                background-repeat: no-repeat;
                background-position: center;
              "
            >
              <!-- Header with Coins -->
              <div class="flex items-center gap-4 mb-6">
                <div class="relative">
                  <img
                    src="{{ asset('assets/images/coin.png') }}"
                    alt="Coins"
                    class="w-16 h-16 object-contain"
                  />
                </div>
                <div class="flex flex-col">
                  <h3 class="text-2xl font-bold text-gray-900">Silver</h3>
                  <p class="text-2xl font-bold text-green-600">€49.99</p>
                </div>
              </div>

              <!-- Zer Amount -->
              <div class="mb-6">
                <div class="flex items-baseline gap-2">
                  <img
                    src="{{ asset('assets/images/currency.svg') }}"
                    alt="Zer Currency"
                    class="w-12 h-12"
                  />
                  <span class="text-5xl font-extrabold text-gray-600"
                    >5.000</span
                  >
                </div>
              </div>

              <!-- Description -->
              <p class="text-gray-600 text-sm mb-8 leading-relaxed flex-grow">
                Zer is YekBûn's virtual currency for unlocking premium features,
                account upgrades, and exclusive digital goods.
              </p>

              <!-- Horizontal Line -->
              <div class="border-t border-green-200 mb-6"></div>

              <!-- Feature Icons -->
              <div class="flex gap-3 justify-center flex-nowrap">
                <div
                  class="w-10 h-10 bg-[#f6f6f6] rounded-lg flex items-center justify-center flex-shrink-0"
                >
                  <img
                    src="{{ asset('assets/images/silver/1.svg') }}"
                    alt="Feature Icon 1"
                    class="w-6 h-6"
                  />
                </div>
                <div
                  class="w-10 h-10 bg-[#f6f6f6] rounded-lg flex items-center justify-center flex-shrink-0"
                >
                  <img
                    src="{{ asset('assets/images/silver/2.svg') }}"
                    alt="Feature Icon 2"
                    class="w-6 h-6"
                  />
                </div>
                <div
                  class="w-10 h-10 bg-[#f6f6f6] rounded-lg flex items-center justify-center flex-shrink-0"
                >
                  <img
                    src="{{ asset('assets/images/silver/3.svg') }}"
                    alt="Feature Icon 3"
                    class="w-6 h-6"
                  />
                </div>
                <div
                  class="w-10 h-10 bg-[#f6f6f6] rounded-lg flex items-center justify-center flex-shrink-0"
                >
                  <img
                    src="{{ asset('assets/images/silver/4.svg') }}"
                    alt="Feature Icon 4"
                    class="w-6 h-6"
                  />
                </div>
                <div
                  class="w-10 h-10 bg-[#f6f6f6] rounded-lg flex items-center justify-center flex-shrink-0"
                >
                  <img
                    src="{{ asset('assets/images/silver/5.svg') }}"
                    alt="Feature Icon 5"
                    class="w-6 h-6"
                  />
                </div>
                <div
                  class="w-10 h-10 bg-[#f6f6f6] rounded-lg flex items-center justify-center flex-shrink-0"
                >
                  <img
                    src="{{ asset('assets/images/silver/6.svg') }}"
                    alt="Feature Icon 6"
                    class="w-6 h-6"
                  />
                </div>
              </div>
            </div>
          </div>

          <!-- Gold Card -->
          <div
            class="animate-on-scroll fade-in-up"
            style="animation-delay: 0.6s"
          >
            <div
              class="charge-zer-card p-8 transition-all duration-300 hover:scale-105 h-full flex flex-col"
              style="
                background-image: url('{{ asset("assets/images/cardbg.png") }}');
                background-size: 100% 100%;
                background-repeat: no-repeat;
                background-position: center;
              "
            >
              <!-- Header with Coins -->
              <div class="flex items-center gap-4 mb-6">
                <div class="relative">
                  <img
                    src="{{ asset('assets/images/coin.png') }}"
                    alt="Coins"
                    class="w-16 h-16 object-contain"
                  />
                </div>
                <div class="flex flex-col">
                  <h3 class="text-2xl font-bold text-gray-900">Gold</h3>
                  <p class="text-2xl font-bold text-green-600">€49.99</p>
                </div>
              </div>

              <!-- Zer Amount -->
              <div class="mb-6">
                <div class="flex items-baseline gap-2">
                  <img
                    src="{{ asset('assets/images/currency.svg') }}"
                    alt="Zer Currency"
                    class="w-12 h-12"
                  />
                  <span class="text-5xl font-extrabold text-yellow-500"
                    >5.000</span
                  >
                </div>
              </div>

              <!-- Description -->
              <p class="text-gray-600 text-sm mb-8 leading-relaxed flex-grow">
                Zer is YekBûn's virtual currency for unlocking premium features,
                account upgrades, and exclusive digital goods.
              </p>

              <!-- Horizontal Line -->
              <div class="border-t border-green-200 mb-6"></div>

              <!-- Feature Icons -->
              <div class="flex gap-3 justify-center flex-nowrap">
                <div
                  class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0"
                  style="background-color: #fdf4db"
                >
                  <img
                    src="{{ asset('assets/images/gold/1.svg') }}"
                    alt="Feature Icon 1"
                    class="w-6 h-6"
                  />
                </div>
                <div
                  class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0"
                  style="background-color: #fdf4db"
                >
                  <img
                    src="{{ asset('assets/images/gold/2.svg') }}"
                    alt="Feature Icon 2"
                    class="w-6 h-6"
                  />
                </div>
                <div
                  class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0"
                  style="background-color: #fdf4db"
                >
                  <img
                    src="{{ asset('assets/images/gold/3.svg') }}"
                    alt="Feature Icon 3"
                    class="w-6 h-6"
                  />
                </div>
                <div
                  class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0"
                  style="background-color: #fdf4db"
                >
                  <img
                    src="{{ asset('assets/images/gold/4.svg') }}"
                    alt="Feature Icon 4"
                    class="w-6 h-6"
                  />
                </div>
                <div
                  class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0"
                  style="background-color: #fdf4db"
                >
                  <img
                    src="{{ asset('assets/images/gold/5.svg') }}"
                    alt="Feature Icon 5"
                    class="w-6 h-6"
                  />
                </div>
                <div
                  class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0"
                  style="background-color: #fdf4db"
                >
                  <img
                    src="{{ asset('assets/images/gold/6.svg') }}"
                    alt="Feature Icon 6"
                    class="w-6 h-6"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="max-w-7xl mx-auto relative z-10">
        <div
          class="bg-white rounded-3xl p-12 shadow-xl animate-on-scroll fade-in-up"
        >
          <!-- Heading -->
          <h2
            class="text-4xl md:text-5xl font-bold text-gray-900 text-center mb-6"
          >
            What is Zercash
          </h2>

          <!-- Description -->
          <p
            class="text-lg text-gray-700 text-center mb-12 max-w-2xl mx-auto leading-relaxed"
          >
            Zer is Lumen's virtual currency that allows you to access premium
            features, upgrade your account, and unlock advanced financial tools.
            Use Zer to enhance your financial management experience.
          </p>

          <!-- Feature Highlights -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Instant Access -->
            <div
              class="flex items-center gap-4 animate-on-scroll fade-in-up"
              style="animation-delay: 0.2s"
            >
              <div
                class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0"
              >
                <img
                  src="{{ asset('assets/images/instantaccess.svg') }}"
                  alt="Instant Access"
                  class="w-10 h-10"
                />
              </div>
              <div class="flex flex-col">
                <h3 class="text-xl font-bold text-gray-900 mb-1">
                  Instant Access
                </h3>
                <p class="text-gray-600 text-sm">
                  Get access to premium features
                </p>
              </div>
            </div>

            <!-- Secure Transactions -->
            <div
              class="flex items-center gap-4 animate-on-scroll fade-in-up"
              style="animation-delay: 0.4s"
            >
              <div
                class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0"
              >
                <img
                  src="{{ asset('assets/images/secure.svg') }}"
                  alt="Secure Transactions"
                  class="w-10 h-10"
                />
              </div>
              <div class="flex flex-col">
                <h3 class="text-xl font-bold text-gray-900 mb-1">
                  Secure Transactions
                </h3>
                <p class="text-gray-600 text-sm">
                  Bank-level security for all purchases
                </p>
              </div>
            </div>

            <!-- Get Cashback -->
            <div
              class="flex items-center gap-4 animate-on-scroll fade-in-up"
              style="animation-delay: 0.6s"
            >
              <div
                class="w-16 h-16 bg-orange-100 rounded-xl flex items-center justify-center flex-shrink-0"
              >
                <img
                  src="{{ asset('assets/images/get.svg') }}"
                  alt="Get Cashback"
                  class="w-10 h-10"
                />
              </div>
              <div class="flex flex-col">
                <h3 class="text-xl font-bold text-gray-900 mb-1">
                  Get Cashback
                </h3>
                <p class="text-gray-600 text-sm">
                  Bank-level security for all purchases
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Immersive Music Experience Section -->
    <section
      class="py-20 px-6 relative overflow-hidden"
      style="background-color: #f1f2ff"
    >
      <div class="max-w-7xl mx-auto">
        <div class="bg-white rounded-[30px] p-12 shadow-xl">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Side: Mobile Phones Image -->
            <div
              class="flex justify-center lg:justify-start animate-on-scroll slide-in-left float-animation"
              style="animation-delay: 0.2s"
            >
              <div class="relative">
                <img
                  src="{{ asset('assets/images/section5.png') }}"
                  alt="YekBûn Sound Platform Mobile App"
                  class="w-full max-w-lg object-contain"
                />
              </div>
            </div>

            <!-- Right Side: Text Content and Download Buttons -->
            <div class="animate-on-scroll slide-in-right float-animation">
              <!-- Headline -->
              <h2
                class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight"
              >
                Immersive Music Experience With YekBûn Sound Platform
              </h2>

              <!-- Description -->
              <p class="text-lg text-gray-600 leading-relaxed max-w-2xl mb-8">
                Discover Kurdish music like never before with YekBûn's built-in
                sound player. Stream songs, create personal playlists, and
                follow your favorite artists — all within one elegant and
                easy-to-use interface. Designed for smooth performance and deep
                cultural connection, YekBûn brings the rhythm of Kurdish
                heritage directly to your hands.
              </p>

              <!-- Download Buttons -->
              <div class="flex flex-col sm:flex-row gap-4">
                <!-- Google Play Button -->
                <a
                  href="#"
                  class="inline-block rounded-xl bg-black transition-all duration-300 hover:scale-105 hover:shadow-xl"
                >
                  <img
                    src="{{ asset('assets/images/googledownload.png') }}"
                    alt="Get it on Google Play"
                    class="h-12 object-contain"
                  />
                </a>

                <!-- App Store Button -->
                <a
                  href="#"
                  class="inline-block bg-black rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-xl"
                >
                  <img
                    src="{{ asset('assets/images/appstoredownload.png') }}"
                    alt="Download on the App Store"
                    class="h-12 object-contain"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Interactive Social Feed Section -->
    <section class="py-20 px-6 relative overflow-hidden">
      <div
        class="max-w-7xl mx-auto relative rounded-[30px] bg-gray-900 overflow-hidden"
      >
        <!-- Background Map -->
        <div class="absolute inset-0 opacity-20">
          <img
            src="{{ asset('assets/images/Vector.png') }}"
            alt="World Map"
            class="w-full h-full object-cover"
          />
        </div>

        <div
          class="w-full flex flex-col lg:flex-row gap-10 justify-between relative z-10 px-10"
        >
          <div class="w-full lg:w-1/2 py-20">
            <!-- Left Side: Text Content and Download Buttons -->
            <div class="text-white animate-on-scroll fade-in-up">
              <!-- Headline -->
              <h2
                class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight"
              >
                Interactive Social Feed For Sharing Culture & Moments
              </h2>

              <!-- Description -->
              <p class="text-lg text-white/90 leading-relaxed mb-8 max-w-2xl">
                YekBûn's feed connects users through stories, images, and
                emotions. Share your thoughts, celebrate Kurdish culture, and
                interact with others through likes, comments, and reactions.
                Every post brings people closer — creating a dynamic and
                respectful space for communication, creativity, and community
                engagement.
              </p>

              <!-- Download Buttons -->
              <div class="flex flex-col sm:flex-row gap-4">
                <!-- Google Play Button -->
                <a
                  href="#"
                  class="inline-block rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-xl"
                >
                  <img
                    src="{{ asset('assets/images/googledownload.png') }}"
                    alt="Get it on Google Play"
                    class="w-full h-full object-contain"
                  />
                </a>

                <!-- App Store Button -->
                <a
                  href="#"
                  class="inline-block rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-xl"
                >
                  <img
                    src="{{ asset('assets/images/appstoredownload.png') }}"
                    alt="Download on the App Store"
                    class="w-full h-full object-contain"
                  />
                </a>
              </div>
            </div>

            <!-- Right Side: Mobile Phone Mockup -->
          </div>
          <div
            class="lg:w-1/2 lg:absolute bottom-0 -right-16 -translate-x-1/2 animate-on-scroll fade-in-up"
            style="animation-delay: 0.2s"
          >
            <div class="relative bottom-0 justify-center flex">
              <img
                src="{{ asset('assets/images/Rectangle 1.png') }}"
                alt="YekBûn Social Feed Mobile App"
                class="w-full max-w-sm md:max-w-md object-contain"
                style="object-position: bottom"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Comprehensive Footer -->
    <footer id="contact" class="bg-white border-t border-gray-200 py-16 px-6">
      <div class="max-w-7xl mx-auto">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
          <!-- Column 1: Logo and Description -->
          <div class="md:col-span-1">
            <div class="mb-4">
              <img src="{{ asset('assets/images/logo.svg') }}" alt="Lumen" class="w-10 h-10" />
            </div>
            <p class="text-gray-600 text-sm leading-relaxed">
              Lumen Finance App, developed by Lumen.tech, is an innovative
              platform designed for future-oriented financial management and
              digital engagement.
            </p>
          </div>

          <!-- Column 2: LUMEN - SECTIONS -->
          <div>
            <h3
              class="text-gray-900 font-bold text-sm uppercase mb-4 relative pb-3"
            >
              LUMEN - SECTIONS
              <div class="absolute bottom-0 left-0 w-12 h-px bg-blue-500">
                <div
                  class="absolute -right-1 -top-1 w-2 h-2 bg-blue-500 rounded-full"
                ></div>
              </div>
            </h3>
            <ul class="space-y-3">
              <li>
                <a
                  href="contact.html"
                  class="text-gray-600 hover:text-blue-600 text-sm transition-colors flex items-center gap-2 group"
                >
                  <i
                    class="fas fa-chevron-right text-xs text-gray-400 group-hover:text-blue-600"
                  ></i>
                  <span>Contact us</span>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-600 hover:text-blue-600 text-sm transition-colors flex items-center gap-2 group"
                >
                  <i
                    class="fas fa-chevron-right text-xs text-gray-400 group-hover:text-blue-600"
                  ></i>
                  <span>News & Feeds</span>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-600 hover:text-blue-600 text-sm transition-colors flex items-center gap-2 group"
                >
                  <i
                    class="fas fa-chevron-right text-xs text-gray-400 group-hover:text-blue-600"
                  ></i>
                  <span>Multimedia & Stream</span>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-600 hover:text-blue-600 text-sm transition-colors flex items-center gap-2 group"
                >
                  <i
                    class="fas fa-chevron-right text-xs text-gray-400 group-hover:text-blue-600"
                  ></i>
                  <span>Culture & History</span>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-600 hover:text-blue-600 text-sm transition-colors flex items-center gap-2 group"
                >
                  <i
                    class="fas fa-chevron-right text-xs text-gray-400 group-hover:text-blue-600"
                  ></i>
                  <span>Services & Ads</span>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-600 hover:text-blue-600 text-sm transition-colors flex items-center gap-2 group"
                >
                  <i
                    class="fas fa-chevron-right text-xs text-gray-400 group-hover:text-blue-600"
                  ></i>
                  <span>E-Commerce & Shops</span>
                </a>
              </li>
            </ul>
          </div>

          <!-- Column 3: LUMEN - POLICY & TERMS -->
          <div>
            <h3
              class="text-gray-900 font-bold text-sm uppercase mb-4 relative pb-3"
            >
              LUMEN - POLICY & TERMS
              <div class="absolute bottom-0 left-0 w-12 h-px bg-blue-500">
                <div
                  class="absolute -right-1 -top-1 w-2 h-2 bg-blue-500 rounded-full"
                ></div>
              </div>
            </h3>
            <ul class="space-y-3">
              <li>
                <a
                  href="legal-notice.html"
                  class="text-gray-600 hover:text-blue-600 text-sm transition-colors flex items-center gap-2 group"
                >
                  <i
                    class="fas fa-chevron-right text-xs text-gray-400 group-hover:text-blue-600"
                  ></i>
                  <span>Lumen Legal Notice</span>
                </a>
              </li>
              <li>
                <a
                  href="terms.html"
                  class="text-gray-600 hover:text-blue-600 text-sm transition-colors flex items-center gap-2 group"
                >
                  <i
                    class="fas fa-chevron-right text-xs text-gray-400 group-hover:text-blue-600"
                  ></i>
                  <span>Lumen Terms & Conditions</span>
                </a>
              </li>
            </ul>
          </div>

          <!-- Column 4: GET THE APP -->
          <div>
            <h3
              class="text-gray-900 font-bold text-sm uppercase mb-4 relative pb-3"
            >
              GET THE APP
              <div
                class="absolute bottom-0 left-0 w-12 h-px border-b-2 border-dashed border-blue-500"
              >
                <div
                  class="absolute -right-1 -top-1 w-2 h-2 bg-blue-500 rounded-full"
                ></div>
              </div>
            </h3>
            <div class="space-y-3">
              <!-- Google Play Button -->
              <a
                href="#"
                class="block rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-xl"
              >
                <img
                  src="{{ asset('assets/images/googledownload.png') }}"
                  alt="Get it on Google Play"
                  class="w-[146px] bg-black rounded-xl h-[52px] object-contain"
                />
              </a>

              <!-- App Store Button -->
              <a
                href="#"
                class="block rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-xl"
              >
                <img
                  src="{{ asset('assets/images/appstoredownload.png') }}"
                  alt="Download on the App Store"
                  class="w-[156px] bg-black rounded-xl h-[52px] object-contain"
                />
              </a>
            </div>
          </div>
        </div>

        <!-- Bottom Copyright Bar -->
        <div class="border-t border-gray-200 pt-6">
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
                href="legal-notice.html"
                class="text-gray-600 hover:text-blue-600 transition-colors"
                >Lumen Legal Notice</a
              >
              <span class="text-gray-300">|</span>
              <a
                href="terms.html"
                class="text-gray-600 hover:text-blue-600 transition-colors"
                >Lumen Terms & Condition</a
              >
              <span class="text-gray-300">|</span>
              <a
                href="contact.html"
                class="text-gray-600 hover:text-blue-600 transition-colors"
                >Contact Lumen</a
              >
            </div>
          </div>
        </div>
      </div>
    </footer>


@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.getElementById("pricing-toggle");
    const monthlyLabel = document.getElementById("monthly-label");
    const yearlyLabel = document.getElementById("yearly-label");
    const priceElements = document.querySelectorAll(".price-value");
    if (toggle) {
        toggle.addEventListener("change", function () {
            const isYearly = this.checked;
            if (isYearly) {
                monthlyLabel.classList.remove("text-blue-600"); monthlyLabel.classList.add("text-gray-600");
                yearlyLabel.classList.remove("text-gray-600"); yearlyLabel.classList.add("text-blue-600");
            } else {
                monthlyLabel.classList.remove("text-gray-600"); monthlyLabel.classList.add("text-blue-600");
                yearlyLabel.classList.remove("text-blue-600"); yearlyLabel.classList.add("text-gray-600");
            }
            priceElements.forEach(function(priceEl) {
                priceEl.textContent = isYearly ? priceEl.getAttribute("data-yearly") : priceEl.getAttribute("data-monthly");
            });
        });
        monthlyLabel.classList.add("text-blue-600");
        yearlyLabel.classList.remove("text-blue-600");
    }
});
</script>
@endpush
