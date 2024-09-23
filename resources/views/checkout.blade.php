<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Oga Clothing Africa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: '#EE2761',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100 min-h-screen font-sans">
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="flex items-center">
                <img src="/assets/img/logo/nav-log.png" alt="Oga Clothing Africa" class="h-10 w-auto">
                <span class="ml-2 text-xl font-bold text-gray-800">Oga Clothing Africa</span>
            </a>
            <a href="/shop"
                class="bg-brand text-white px-4 py-2 rounded-md hover:bg-opacity-90 transition duration-300">
                Back to Shop
            </a>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">Checkout</h1>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1 class="text-3xl font-semibold mb-6">Checkout</h1>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="bg-gray-50 rounded-lg shadow-md p-6">
                                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Order Summary</h2>
                                <ul class="space-y-4">
                                    @foreach ($cartItems as $item)
                                        <li class="flex items-center space-x-4">
                                            <img src="{{ Storage::url($item->product->images->first()->url ?? 'default.jpg') }}"
                                                alt="{{ $item->product->name }}"
                                                class="w-20 h-20 object-cover rounded-md">
                                            <div class="flex-1">
                                                <h3 class="text-lg font-medium text-gray-800">{{ $item->product->name }}
                                                </h3>
                                                <p class="text-gray-600">Quantity: {{ $item->quantity }}</p>
                                                <p class="text-brand font-semibold">KES
                                                    {{ number_format($item->product->price, 2) }}</p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="mt-6 pt-6 border-t border-gray-200">
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-gray-600">Subtotal</span>
                                        <span class="font-semibold">KES {{ number_format($subtotal, 2) }}</span>
                                    </div>
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-gray-600">Shipping</span>
                                        <span class="font-semibold" id="shippingFee">
                                            @if ($shippingFee !== null)
                                                KES {{ number_format($shippingFee, 2) }}
                                            @else
                                                Contact us
                                            @endif
                                        </span>
                                    </div>
                                    <div class="flex justify-between items-center text-xl font-bold mt-4">
                                        <span>Total</span>
                                        <span class="text-brand" id="totalPrice">
                                            @if ($shippingFee !== null)
                                                KES {{ number_format($totalPrice, 2) }}
                                            @else
                                                To be calculated
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-lg shadow-lg p-8 relative overflow-hidden">
                                <h2 class="text-3xl font-bold text-gray-800 mb-6">Shipping & Payment</h2>
                                @if ($shippingFee !== null)
                                    <form action="{{ route('cart.placeOrder') }}" method="POST" class="space-y-6">
                                        @csrf
                                        <div>
                                            <label for="address_id"
                                                class="block text-sm font-medium text-gray-700 mb-2">Select Shipping
                                                Address</label>
                                            <select name="address_id" id="address_id" required
                                                class="w-full p-2 border border-gray-300 rounded-md focus:ring-brand focus:border-brand">
                                                @foreach ($addresses as $address)
                                                    <option value="{{ $address->id }}">
                                                        {{ $address->address_line_1 }},
                                                        {{ $address->address_line_2 }}, {{ $address->city }},
                                                        {{ $address->country }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div>
                                            <label for="payment_method"
                                                class="block text-sm font-medium text-gray-700 mb-2">Select Payment
                                                Method</label>
                                            <select name="payment_method" id="payment_method" required
                                                class="w-full p-2 border border-gray-300 rounded-md focus:ring-brand focus:border-brand">
                                                <option value="mpesa">Mpesa</option>
                                                <option value="paypal">PayPal</option>
                                                <option value="card">PayPal (Card)</option>
                                            </select>
                                        </div>
                                        <button type="submit"
                                            class="w-full bg-brand text-white py-3 px-4 rounded-md hover:bg-opacity-90 transition duration-300 text-lg font-semibold">
                                            Place Order
                                        </button>
                                    </form>
                                @else
                                    <div class="text-center">
                                        <p class="text-lg mb-4">For shipping to your location, please contact us via
                                            WhatsApp.</p>
                                        <a href="https://wa.me/254793977600" target="_blank" rel="noopener noreferrer"
                                            class="inline-block bg-green-500 text-white py-3 px-6 rounded-md hover:bg-green-600 transition duration-300 text-lg font-semibold">
                                            Contact via WhatsApp
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.getElementById('address_id').addEventListener('change', function() {
            let addressId = this.value;

            // Make AJAX request to get updated shipping fee and total price
            fetch(`/cart/shipping-fee/${addressId}`, {
                    method: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('shippingFee').textContent = 'KES ' + data.shippingFee.toFixed(2);
                    document.getElementById('totalPrice').textContent = 'KES ' + data.totalPrice.toFixed(2);
                })
                .catch(error => console.error('Error:', error));
        });
    </script>


    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> Oga Clothing Africa. All rights reserved.
            </p>
            <p class="mt-2">Bringing African style to the world, one outfit at a time.</p>
        </div>
    </footer>
</body>

</html>
