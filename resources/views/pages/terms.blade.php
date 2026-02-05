@extends('layouts.app')
@section('title', 'Terms & Conditions')
@section('body_attrs', 'class="bg-gray-50"')

@section('content')
<section class="py-16 px-6 mt-20">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Terms & Conditions</h1>
            <p class="text-gray-600">Last updated: January 2025</p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 space-y-8">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Welcome to Lumen</h2>
                <p class="text-gray-700 leading-relaxed">By accessing or using our services, you agree to be bound by these Terms and Conditions. Please read them carefully. We reserve the right to update these terms at any time, and your continued use of the service constitutes acceptance of any changes.</p>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Use of Service</h2>
                <p class="text-gray-700 leading-relaxed">You agree to use the Lumen platform only for lawful purposes and in accordance with these terms. You must not use the service in any way that could damage, disable, or impair the platform or interfere with any other party's use of the service.</p>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Account & Security</h2>
                <p class="text-gray-700 leading-relaxed">You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account. You must notify us immediately of any unauthorized use of your account.</p>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Payment & Zer Credits</h2>
                <p class="text-gray-700 leading-relaxed">Purchases of Zer credits and subscriptions are subject to our payment terms. All fees are non-refundable unless otherwise stated. Zer credits are virtual currency for use within the Lumen platform only.</p>
            </div>
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-2">Full Legal Center</h3>
                <p class="text-gray-700 mb-4">For the complete Lumen Legal Center including General Terms, Privacy, Finance, Wallet, Ads, Payment, and Child Protection policies, please visit our Legal Notice page.</p>
                <a href="{{ route('legal-notice') }}" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-semibold">
                    <i class="fas fa-external-link-alt"></i> View Legal Notice
                </a>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-semibold">
                <i class="fas fa-arrow-left"></i> Back to Home
            </a>
        </div>
    </div>
</section>
@endsection
