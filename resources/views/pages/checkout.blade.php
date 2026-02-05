@extends('layouts.app')
@section('title', 'Checkout')
@section('body_attrs', 'class="bg-gray-50"')

@section('content')
<section class="py-12 px-6 pt-24">
    <div class="max-w-4xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Checkout</h1>
            <p class="text-gray-600">Review your order and proceed to payment</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Order Items</h2>
                    <div id="checkout-items" class="space-y-4"></div>
                </div>
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Shipping Information</h2>
                    <form id="shipping-form" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">First Name</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" required />
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Last Name</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" required />
                            </div>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Email Address</label>
                            <input type="email" id="checkout-email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" required />
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Phone Number</label>
                            <input type="tel" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" required />
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Address</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" required />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">City</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" required />
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">State</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" required />
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">ZIP Code</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" required />
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-xl p-6 sticky top-24">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Order Summary</h2>
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between text-gray-600"><span>Subtotal</span><span id="checkout-subtotal">$0</span></div>
                        <div class="flex justify-between text-gray-600"><span>Tax</span><span id="checkout-tax">$0</span></div>
                        <div class="flex justify-between text-gray-600"><span>Shipping</span><span class="text-green-600">Free</span></div>
                        <div class="border-t border-gray-200 pt-3">
                            <div class="flex justify-between text-lg font-bold text-gray-900"><span>Total</span><span id="checkout-total">$0</span></div>
                        </div>
                    </div>
                    <a href="{{ route('payment') }}" id="proceed-payment-btn" class="block w-full bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg text-center">
                        Proceed to Payment <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <div class="mt-4 text-center">
                        <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-gray-900 text-sm inline-flex items-center gap-2"><i class="fas fa-arrow-left"></i> Back to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
(function() {
    if (!sessionStorage.getItem('isLoggedIn')) {
        window.location.href = '{{ route('login') }}';
        return;
    }
    var userData = { cart: [] };
    var savedData = localStorage.getItem('userData');
    if (savedData) userData = JSON.parse(savedData);
    var userEmail = sessionStorage.getItem('userEmail') || '';
    if (userEmail) document.getElementById('checkout-email').value = userEmail;

    function displayCartItems() {
        var checkoutItems = document.getElementById('checkout-items');
        var subtotalEl = document.getElementById('checkout-subtotal');
        var taxEl = document.getElementById('checkout-tax');
        var totalEl = document.getElementById('checkout-total');
        if (userData.cart.length === 0) {
            checkoutItems.innerHTML = '<p class="text-center text-gray-500 py-8">Your cart is empty</p>';
            subtotalEl.textContent = '$0'; taxEl.textContent = '$0'; totalEl.textContent = '$0';
            return;
        }
        checkoutItems.innerHTML = userData.cart.map(function(item) {
            return '<div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg"><div class="flex items-center gap-4"><div class="w-16 h-16 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-lg flex items-center justify-center"><i class="fas fa-coins text-blue-600 text-xl"></i></div><div><h3 class="font-semibold text-gray-900">' + item.item + '</h3><p class="text-gray-600 text-sm">Zer Credits</p></div></div><div class="text-right"><p class="font-bold text-gray-900">$' + item.price + '</p></div></div>';
        }).join('');
        var subtotal = userData.cart.reduce(function(sum, item) { return sum + item.price; }, 0);
        var tax = subtotal * 0.1;
        var total = subtotal + tax;
        subtotalEl.textContent = '$' + subtotal.toFixed(2);
        taxEl.textContent = '$' + tax.toFixed(2);
        totalEl.textContent = '$' + total.toFixed(2);
    }

    document.getElementById('proceed-payment-btn').addEventListener('click', function(e) {
        var form = document.getElementById('shipping-form');
        if (!form.checkValidity()) { e.preventDefault(); form.reportValidity(); return; }
        if (userData.cart.length === 0) { e.preventDefault(); alert('Your cart is empty'); return; }
        var inputs = form.querySelectorAll('input');
        var checkoutData = {
            items: userData.cart,
            shipping: { firstName: inputs[0].value, lastName: inputs[1].value, email: document.getElementById('checkout-email').value, phone: form.querySelector('input[type="tel"]').value, address: inputs[2].value, city: inputs[3].value, state: inputs[4].value, zip: inputs[5].value },
            subtotal: userData.cart.reduce(function(s, i) { return s + i.price; }, 0),
            tax: 0, total: 0
        };
        checkoutData.tax = checkoutData.subtotal * 0.1;
        checkoutData.total = checkoutData.subtotal + checkoutData.tax;
        sessionStorage.setItem('checkoutData', JSON.stringify(checkoutData));
    });
    displayCartItems();
})();
</script>
@endpush
@endsection
