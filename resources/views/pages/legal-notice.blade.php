@extends('layouts.app')
@section('title', 'Legal Notice')
@section('body_attrs', 'class="bg-gray-50"')

@section('content')
<section class="py-16 px-6 mt-20">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Legal Notice</h1>
            <p class="text-gray-600">Last updated: January 2025</p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 space-y-8">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3"><i class="fas fa-building text-blue-600"></i> Company Information</h2>
                <div class="space-y-2 text-gray-700">
                    <p><strong>Company Name:</strong> Lumen Technologies</p>
                    <p><strong>Legal Entity:</strong> Lumen.tech</p>
                    <p><strong>Registered Address:</strong> [Your Company Address]</p>
                    <p><strong>Email:</strong> legal@lumen.tech</p>
                    <p><strong>Phone:</strong> [Your Phone Number]</p>
                </div>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3"><i class="fas fa-user-shield text-blue-600"></i> Responsible for Content</h2>
                <p class="text-gray-700 leading-relaxed">The content of this website is the responsibility of Lumen Technologies. All information provided on this website is for general informational purposes only. While we strive to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose.</p>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3"><i class="fas fa-copyright text-blue-600"></i> Intellectual Property Rights</h2>
                <p class="text-gray-700 leading-relaxed mb-4">All content on this website, including but not limited to text, graphics, logos, icons, images, audio clips, digital downloads, data compilations, and software, is the property of Lumen Technologies or its content suppliers and is protected by international copyright laws.</p>
                <p class="text-gray-700 leading-relaxed">The compilation of all content on this website is the exclusive property of Lumen Technologies and is protected by international copyright laws.</p>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3"><i class="fas fa-exclamation-triangle text-blue-600"></i> Limitation of Liability</h2>
                <p class="text-gray-700 leading-relaxed">Lumen Technologies shall not be liable for any direct, indirect, incidental, special, consequential, or punitive damages resulting from the use or inability to use the website or services, even if Lumen Technologies has been advised of the possibility of such damages.</p>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3"><i class="fas fa-external-link-alt text-blue-600"></i> External Links</h2>
                <p class="text-gray-700 leading-relaxed">Our website may contain links to external websites that are not provided or maintained by or in any way affiliated with Lumen Technologies. We are not responsible for the content of external websites linked from our site.</p>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3"><i class="fas fa-shield-alt text-blue-600"></i> Data Protection</h2>
                <p class="text-gray-700 leading-relaxed">The protection of your personal data is important to us. For detailed information about how we collect, use, and protect your personal data, please refer to our Privacy Policy.</p>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3"><i class="fas fa-gavel text-blue-600"></i> Governing Law</h2>
                <p class="text-gray-700 leading-relaxed">These terms and conditions are governed by and construed in accordance with the laws of [Your Jurisdiction]. Any disputes relating to these terms and conditions shall be subject to the exclusive jurisdiction of the courts of [Your Jurisdiction].</p>
            </div>
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-2">Questions about this Legal Notice?</h3>
                <p class="text-gray-700 mb-4">If you have any questions about this Legal Notice, please contact us at:</p>
                <div class="flex items-center gap-2 text-blue-600">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:legal@lumen.tech" class="hover:underline">legal@lumen.tech</a>
                </div>
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
