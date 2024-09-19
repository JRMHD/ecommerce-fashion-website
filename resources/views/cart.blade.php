<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: '#EE2761',
                        dark: '#333333',
                        light: '#f9f9f9'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <img src="/assets/img/logo/nav-log.png" alt="Logo" class="h-12">
            <h1 class="text-3xl font-bold text-gray-800">Your Cart</h1>
        </div>
    </header>

    <main class="flex-grow container mx-auto px-4 py-8">
        <!-- Display Success and Error Messages -->
        @if (session('success'))
            <div
                style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div
                style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                {{ session('error') }}
            </div>
        @endif

        @if ($cartItems->isNotEmpty())
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <table class="w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr class="text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            <th class="py-3 px-6">Product</th>
                            <th class="py-3 px-6 text-center">Quantity</th>
                            <th class="py-3 px-6 text-center">Price</th>
                            <th class="py-3 px-6 text-center">Total</th>
                            <th class="py-3 px-6 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 text-sm">
                        @foreach ($cartItems as $item)
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-6 flex items-center space-x-4">
                                    <img src="{{ Storage::url($item->product->images->first()->url ?? 'default.jpg') }}"
                                        alt="{{ $item->product->name }}" class="w-16 h-16 object-cover rounded">

                                    <span class="font-medium text-gray-800">{{ $item->product->name }}</span>
                                </td>
                                <td class="py-3 px-6 text-center">{{ $item->quantity }}</td>
                                <td class="py-3 px-6 text-center">KES {{ number_format($item->product->price, 2) }}</td>
                                <td class="py-3 px-6 text-center">KES
                                    {{ number_format($item->product->price * $item->quantity, 2) }}</td>
                                <td class="py-3 px-6 text-center">
                                    <form method="POST" action="{{ route('cart.remove', $item->id) }}"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-red-600 hover:text-red-800 transition duration-300 ease-in-out">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-8 flex flex-col sm:flex-row justify-between items-center space-y-4 sm:space-y-0">
                <a href="{{ url('shop') }}"
                    class="bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-700 transition duration-300 ease-in-out w-full sm:w-auto text-center">Continue
                    Shopping</a>
                <a href="{{ url('wishlist') }}"
                    class="bg-gray-300 text-gray-800 py-2 px-4 rounded hover:bg-gray-400 transition duration-300 ease-in-out w-full sm:w-auto text-center">View
                    Wishlist</a>
                <a href="{{ route('checkout') }}"
                    class="bg-brand text-white py-2 px-4 rounded hover:bg-red-700 transition duration-300 ease-in-out w-full sm:w-auto text-center">Proceed
                    to Checkout</a>
            </div>
        @else
            <div class="bg-white shadow-md rounded-lg p-8 text-center">
                <p class="text-xl text-gray-600 mb-4">Your cart is empty.</p>
                <a href="{{ route('shop') }}"
                    class="bg-brand text-white py-2 px-4 rounded hover:bg-red-700 transition duration-300 ease-in-out">Start
                    Shopping</a>
            </div>
        @endif
    </main>

    <footer class="bg-white shadow-md py-4">
        <div class="container mx-auto px-4 text-center text-gray-600">
            &copy; {{ date('Y') }} Your Company. All rights reserved.
        </div>
    </footer>

    <script>
        function showMessage(elementId) {
            const element = document.getElementById(elementId);
            if (element) {
                element.classList.remove('hidden');
                setTimeout(() => {
                    element.classList.add('hidden');
                }, 5000);
            }
        }

        // Example usage:
        // showMessage('successMessage');
        // showMessage('errorMessage');
    </script>
</body>

</html>
