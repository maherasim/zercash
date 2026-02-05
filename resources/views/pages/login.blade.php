@extends('layouts.auth')
@section('title', 'Login')

@section('content')
<div class="video-background-section relative min-h-screen flex items-center justify-center overflow-hidden">
    <video autoplay muted loop playsinline class="video-background absolute inset-0 w-full h-full object-cover">
        <source src="{{ asset('assets/images/video.mp4') }}" type="video/mp4" />
    </video>
    <div class="video-overlay absolute inset-0" style="background: rgba(0, 0, 0, 0.4);"></div>

    <div class="relative z-10 w-full flex items-center justify-center px-6 py-12">
        <div class="max-w-md w-full">
            <div class="text-center mb-8">
                <div class="inline-flex items-center gap-2 mb-4">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Lumen" class="w-12 h-12" />
                </div>
                <h1 class="text-3xl font-bold text-white mb-2">Welcome Back</h1>
            </div>

            <div class="bg-white rounded-2xl shadow-2xl p-8">
                <form id="login-form" class="space-y-6">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">E-Mail Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" id="email" name="email" placeholder="your.email@example.com" value="{{ old('email') }}"
                                class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition-all" required />
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <input type="checkbox" id="terms" name="terms" class="mt-1 w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" required />
                        <label for="terms" class="text-sm text-gray-600">
                            By continuing you agree to our <a href="{{ route('terms') }}" target="_blank" class="text-indigo-600 font-semibold hover:underline">Terms of Service</a>
                        </label>
                    </div>
                    <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Continue
                    </button>
                </form>
            </div>

            <div class="text-center mt-6">
                <a href="{{ route('home') }}" class="text-white/80 hover:text-white text-sm inline-flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i>
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const email = document.getElementById('email').value;
    const terms = document.getElementById('terms').checked;
    if (!terms) {
        alert('Please agree to the Terms of Service to continue');
        return;
    }
    sessionStorage.setItem('loginEmail', email);
    window.location.href = '{{ route('otp') }}';
});
</script>
@endpush
@endsection
