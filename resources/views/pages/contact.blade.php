@extends('layouts.app')
@section('title', 'Contact Us')
@section('body_attrs', 'class="bg-gray-50"')

@section('content')
<section class="py-16 px-6 pt-24">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Get in Touch</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Have a question or need help? We're here to assist you. Reach out to us through any of the following methods.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white rounded-2xl shadow-xl p-6 hover:shadow-2xl transition-shadow">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-envelope text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Email Us</h3>
                    <p class="text-gray-600 text-sm mb-3">Send us an email and we'll get back to you within 24 hours.</p>
                    <a href="mailto:support@lumen.tech" class="text-blue-600 hover:text-blue-700 font-semibold inline-flex items-center gap-2">support@lumen.tech <i class="fas fa-arrow-right text-xs"></i></a>
                </div>
                <div class="bg-white rounded-2xl shadow-xl p-6 hover:shadow-2xl transition-shadow">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-phone text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Call Us</h3>
                    <p class="text-gray-600 text-sm mb-3">Speak directly with our support team during business hours.</p>
                    <a href="tel:+1234567890" class="text-blue-600 hover:text-blue-700 font-semibold inline-flex items-center gap-2">+1 (234) 567-8900 <i class="fas fa-arrow-right text-xs"></i></a>
                </div>
                <div class="bg-white rounded-2xl shadow-xl p-6 hover:shadow-2xl transition-shadow">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-map-marker-alt text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Visit Us</h3>
                    <p class="text-gray-600 text-sm mb-3">Our office is open Monday to Friday, 9 AM - 6 PM.</p>
                    <address class="text-gray-700 not-italic">123 Business Street<br>Suite 100<br>City, State 12345<br>United States</address>
                </div>
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Follow Us</h3>
                    <div class="flex items-center gap-4">
                        <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-blue-600 rounded-full flex items-center justify-center text-gray-600 hover:text-white transition-all duration-300 hover:scale-110"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-blue-400 rounded-full flex items-center justify-center text-gray-600 hover:text-white transition-all duration-300 hover:scale-110"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-pink-600 rounded-full flex items-center justify-center text-gray-600 hover:text-white transition-all duration-300 hover:scale-110"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-blue-700 rounded-full flex items-center justify-center text-gray-600 hover:text-white transition-all duration-300 hover:scale-110"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Send us a Message</h2>
                    <form id="contact-form" class="space-y-6" action="#" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first-name" class="block text-gray-700 font-medium mb-2">First Name <span class="text-red-500">*</span></label>
                                <input type="text" id="first-name" name="first_name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all" placeholder="John" />
                            </div>
                            <div>
                                <label for="last-name" class="block text-gray-700 font-medium mb-2">Last Name <span class="text-red-500">*</span></label>
                                <input type="text" id="last-name" name="last_name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all" placeholder="Doe" />
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email Address <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all" placeholder="john.doe@example.com" />
                        </div>
                        <div>
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all" placeholder="+1 (234) 567-8900" />
                        </div>
                        <div>
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Subject <span class="text-red-500">*</span></label>
                            <select id="subject" name="subject" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all">
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="support">Technical Support</option>
                                <option value="billing">Billing Question</option>
                                <option value="feature">Feature Request</option>
                                <option value="bug">Report a Bug</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message <span class="text-red-500">*</span></label>
                            <textarea id="message" name="message" rows="6" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all resize-none" placeholder="Tell us how we can help you..."></textarea>
                        </div>
                        <div class="flex items-start gap-3">
                            <input type="checkbox" id="privacy" name="privacy" required class="mt-1 w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" />
                            <label for="privacy" class="text-sm text-gray-600">I agree to the <a href="{{ route('terms') }}" class="text-blue-600 hover:underline">Terms & Conditions</a> and <a href="{{ route('legal-notice') }}" class="text-blue-600 hover:underline">Privacy Policy</a></label>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <i class="fas fa-paper-plane mr-2"></i> Send Message
                        </button>
                    </form>
                    <div id="success-message" class="hidden mt-6 bg-green-50 border border-green-200 rounded-lg p-4">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-600 text-xl"></i>
                            <div>
                                <h3 class="font-semibold text-green-900">Message Sent Successfully!</h3>
                                <p class="text-sm text-green-700">We'll get back to you within 24 hours.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-16">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-2">Frequently Asked Questions</h2>
                <p class="text-gray-600">Quick answers to common questions</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="font-bold text-gray-900 mb-2 flex items-center gap-2"><i class="fas fa-question-circle text-blue-600"></i> How do I reset my password?</h3>
                    <p class="text-gray-600 text-sm">You can reset your password by clicking on "Forgot Password" on the login page. We'll send you a reset link via email.</p>
                </div>
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="font-bold text-gray-900 mb-2 flex items-center gap-2"><i class="fas fa-question-circle text-blue-600"></i> How do I purchase Zer credits?</h3>
                    <p class="text-gray-600 text-sm">You can purchase Zer credits from the Charge Zer page or directly from your dashboard. Multiple payment methods are accepted.</p>
                </div>
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="font-bold text-gray-900 mb-2 flex items-center gap-2"><i class="fas fa-question-circle text-blue-600"></i> Can I upgrade my account?</h3>
                    <p class="text-gray-600 text-sm">Yes! You can upgrade your account at any time from your dashboard. Simply select the plan you want and use your Zer credits to upgrade.</p>
                </div>
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="font-bold text-gray-900 mb-2 flex items-center gap-2"><i class="fas fa-question-circle text-blue-600"></i> What payment methods do you accept?</h3>
                    <p class="text-gray-600 text-sm">We accept all major credit cards, PayPal, and bank transfers. All payments are processed securely through our payment gateway.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    var submitBtn = this.querySelector('button[type="submit"]');
    var originalText = submitBtn.innerHTML;
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Sending...';
    var that = this;
    setTimeout(function() {
        document.getElementById('success-message').classList.remove('hidden');
        that.reset();
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
        setTimeout(function() { document.getElementById('success-message').classList.add('hidden'); }, 5000);
        document.getElementById('success-message').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }, 1500);
});
</script>
@endpush
@endsection
