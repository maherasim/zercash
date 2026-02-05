@extends('layouts.app')
@section('title', 'Payment')
@section('body_attrs', 'class="bg-gray-50"')

@section('content')
<section class="py-12 px-6 pt-24">
    <div class="max-w-4xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Payment</h1>
            <p class="text-gray-600">Complete your purchase securely</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Payment Method</h2>
                    <div class="space-y-3">
                        <label class="flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-blue-500 transition-colors payment-method">
                            <input type="radio" name="payment-method" value="card" class="mr-3" checked />
                            <div class="flex items-center gap-3">
                                <i class="fas fa-credit-card text-2xl text-blue-600"></i>
                                <div><div class="font-semibold text-gray-900">Credit/Debit Card</div><div class="text-sm text-gray-600">Visa, Mastercard, Amex</div></div>
                            </div>
                        </label>
                        <label class="flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-blue-500 transition-colors payment-method">
                            <input type="radio" name="payment-method" value="paypal" class="mr-3" />
                            <div class="flex items-center gap-3">
                                <i class="fab fa-paypal text-2xl text-blue-600"></i>
                                <div><div class="font-semibold text-gray-900">PayPal</div><div class="text-sm text-gray-600">Pay with your PayPal account</div></div>
                            </div>
                        </label>
                        <label class="flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-blue-500 transition-colors payment-method">
                            <input type="radio" name="payment-method" value="bank" class="mr-3" />
                            <div class="flex items-center gap-3">
                                <i class="fas fa-university text-2xl text-blue-600"></i>
                                <div><div class="font-semibold text-gray-900">Bank Transfer</div><div class="text-sm text-gray-600">Direct bank transfer</div></div>
                            </div>
                        </label>
                    </div>
                </div>
                <div id="card-details" class="bg-white rounded-2xl shadow-xl p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Card Details</h2>
                    <form id="payment-form" class="space-y-4">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Card Number</label>
                            <div class="relative">
                                <input type="text" id="card-number" placeholder="1234 5678 9012 3456" maxlength="19" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" required />
                                <i class="fas fa-credit-card absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            </div>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Cardholder Name</label>
                            <input type="text" id="card-name" placeholder="John Doe" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" required />
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Expiry Date</label>
                                <input type="text" id="card-expiry" placeholder="MM/YY" maxlength="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" required />
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">CVV</label>
                                <input type="text" id="card-cvv" placeholder="123" maxlength="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" required />
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <input type="checkbox" id="save-card" class="mt-1 w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" />
                            <label for="save-card" class="text-sm text-gray-600">Save card for future purchases</label>
                        </div>
                    </form>
                </div>
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 flex items-start gap-3">
                    <i class="fas fa-shield-alt text-blue-600 text-xl mt-1"></i>
                    <div>
                        <div class="font-semibold text-blue-900 mb-1">Secure Payment</div>
                        <div class="text-sm text-blue-700">Your payment information is encrypted and secure. We never store your full card details.</div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-xl p-6 sticky top-24">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Order Summary</h2>
                    <div id="payment-items" class="space-y-3 mb-4"></div>
                    <div class="border-t border-gray-200 pt-4 space-y-2 mb-6">
                        <div class="flex justify-between text-gray-600"><span>Subtotal</span><span id="payment-subtotal">$0</span></div>
                        <div class="flex justify-between text-gray-600"><span>Tax</span><span id="payment-tax">$0</span></div>
                        <div class="flex justify-between text-gray-600"><span>Shipping</span><span class="text-green-600">Free</span></div>
                        <div class="border-t border-gray-200 pt-2">
                            <div class="flex justify-between text-lg font-bold text-gray-900"><span>Total</span><span id="payment-total">$0</span></div>
                        </div>
                    </div>
                    <button type="button" onclick="processPayment()" class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <i class="fas fa-lock mr-2"></i> Pay Now
                    </button>
                    <div class="mt-4 text-center">
                        <a href="{{ route('checkout') }}" class="text-gray-600 hover:text-gray-900 text-sm inline-flex items-center gap-2"><i class="fas fa-arrow-left"></i> Back to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
var checkoutData = null;
var savedCheckoutData = sessionStorage.getItem('checkoutData');
if (savedCheckoutData) checkoutData = JSON.parse(savedCheckoutData);
else window.location.href = '{{ route('checkout') }}';

if (!sessionStorage.getItem('isLoggedIn')) window.location.href = '{{ route('login') }}';

function displayOrderItems() {
    var paymentItems = document.getElementById('payment-items');
    var subtotalEl = document.getElementById('payment-subtotal');
    var taxEl = document.getElementById('payment-tax');
    var totalEl = document.getElementById('payment-total');
    if (!checkoutData || !checkoutData.items || checkoutData.items.length === 0) {
        paymentItems.innerHTML = '<p class="text-center text-gray-500 py-4">No items</p>';
        return;
    }
    paymentItems.innerHTML = checkoutData.items.map(function(item) {
        return '<div class="flex items-center justify-between text-sm"><span class="text-gray-600">' + item.item + '</span><span class="font-semibold text-gray-900">$' + item.price + '</span></div>';
    }).join('');
    subtotalEl.textContent = '$' + checkoutData.subtotal.toFixed(2);
    taxEl.textContent = '$' + checkoutData.tax.toFixed(2);
    totalEl.textContent = '$' + checkoutData.total.toFixed(2);
}

document.querySelectorAll('input[name="payment-method"]').forEach(function(radio) {
    radio.addEventListener('change', function() {
        document.getElementById('card-details').classList.toggle('hidden', this.value !== 'card');
    });
});
document.getElementById('card-number').addEventListener('input', function(e) {
    var value = e.target.value.replace(/\s/g, '');
    e.target.value = (value.match(/.{1,4}/g) || []).join(' ');
});
document.getElementById('card-expiry').addEventListener('input', function(e) {
    var value = e.target.value.replace(/\D/g, '');
    if (value.length >= 2) value = value.substring(0, 2) + '/' + value.substring(2, 4);
    e.target.value = value;
});

function processPayment() {
    var form = document.getElementById('payment-form');
    if (document.querySelector('input[name="payment-method"]:checked').value === 'card' && !form.checkValidity()) {
        form.reportValidity();
        return;
    }
    var btn = document.querySelector('button[onclick="processPayment()"]');
    btn.disabled = true;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Processing...';
    setTimeout(function() {
        var userData = { balance: 250, cart: [] };
        var saved = localStorage.getItem('userData');
        if (saved) userData = JSON.parse(saved);
        checkoutData.items.forEach(function(item) { userData.balance += parseInt(item.item) || 0; });
        userData.cart = [];
        localStorage.setItem('userData', JSON.stringify(userData));
        sessionStorage.removeItem('checkoutData');
        alert('Payment successful! Your Zer credits have been added to your account.');
        window.location.href = '{{ route('dashboard') }}';
    }, 2000);
}
displayOrderItems();
</script>
@endpush
@endsection
