<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart | Oga Clothing Africa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: '#EE2761',
                        dark: '#333333',
                        light: '#f9f9f9'
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 min-h-screen flex flex-col font-sans">
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex flex-col sm:flex-row justify-between items-center">
            <img src="/assets/img/logo/nav-log.png" alt="Oga Clothing Africa Logo" class="h-10 sm:h-12 mb-2 sm:mb-0">
            <h1 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Your Cart</h1>
        </div>
    </header>

    <main class="flex-grow container mx-auto px-4 py-8">
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-md">
                {{ session('error') }}
            </div>
        @endif

        @if ($cartItems->isNotEmpty())
            <div class="bg-white shadow-md rounded-lg overflow-hidden mb-8">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Product
                                </th>
                                <th
                                    class="py-3 px-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider hidden sm:table-cell">
                                    Quantity
                                </th>
                                <th
                                    class="py-3 px-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider hidden sm:table-cell">
                                    Price
                                </th>
                                <th
                                    class="py-3 px-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Total
                                </th>
                                <th
                                    class="py-3 px-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($cartItems as $item)
                                <tr class="hover:bg-gray-50">
                                    <td class="py-4 px-4">
                                        <div class="flex items-center space-x-4">
                                            <img src="{{ Storage::url($item->product->images->first()->url ?? 'default.jpg') }}"
                                                alt="{{ $item->product->name }}"
                                                class="w-16 h-16 object-cover rounded-md">
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-medium text-gray-800">{{ $item->product->name }}</span>
                                                <span class="text-sm text-gray-500 sm:hidden">Qty:
                                                    {{ $item->quantity }}</span>
                                                <span class="text-sm text-gray-500 sm:hidden">Price: KES
                                                    {{ number_format($item->product->price, 2) }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4 hidden sm:table-cell">
                                        <div class="flex items-center justify-center space-x-2">
                                            <form method="POST" action="{{ route('cart.update', $item->id) }}">
                                                @csrf
                                                <input type="hidden" name="action" value="decrement">
                                                <button type="submit"
                                                    class="w-8 h-8 flex items-center justify-center bg-gray-200 hover:bg-gray-300 rounded-full transition duration-150 ease-in-out">
                                                    <svg class="w-4 h-4 text-gray-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M20 12H4"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                            <span class="text-gray-700 font-medium">{{ $item->quantity }}</span>
                                            <form method="POST" action="{{ route('cart.update', $item->id) }}">
                                                @csrf
                                                <input type="hidden" name="action" value="increment">
                                                <button type="submit"
                                                    class="w-8 h-8 flex items-center justify-center bg-gray-200 hover:bg-gray-300 rounded-full transition duration-150 ease-in-out">
                                                    <svg class="w-4 h-4 text-gray-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4 text-right hidden sm:table-cell">KES
                                        {{ number_format($item->product->price, 2) }}</td>
                                    <td class="py-4 px-4 text-right font-medium">KES
                                        {{ number_format($item->product->price * $item->quantity, 2) }}</td>
                                    <td class="py-4 px-4 text-center">
                                        <form method="POST" action="{{ route('cart.remove', $item->id) }}"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-600 hover:text-red-800 transition duration-150 ease-in-out">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-xl sm:text-2xl font-bold mb-6">Cart Summary</h2>
                <div class="flex justify-between items-center mb-6">
                    <span class="text-lg font-medium text-gray-800">Subtotal:</span>
                    <span class="text-xl sm:text-2xl font-bold text-gray-800">KES {{ number_format($total, 2) }}</span>
                </div>
                <div class="flex flex-col space-y-4">
                    <a href="{{ url('shop') }}"
                        class="w-full bg-gray-800 text-white py-3 px-6 rounded-md hover:bg-gray-700 transition duration-150 ease-in-out flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Continue Shopping
                    </a>

                    <!-- Proceed to Checkout Button -->
                    <form method="POST" action="{{ route('cart.checkout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full bg-brand text-white py-3 px-6 rounded-md hover:bg-red-700 transition duration-150 ease-in-out flex items-center justify-center">
                            Proceed to Checkout
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        @else
            <div class="bg-white shadow-md rounded-lg p-8 text-center">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                </svg>
                <p class="text-xl text-gray-600 mb-6">Your cart is empty.</p>
                <a href="{{ url('shop') }}"
                    class="bg-brand text-white py-3 px-6 rounded-md hover:bg-red-700 transition duration-150 ease-in-out inline-flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    Start Shopping
                </a>
            </div>
        @endif
    </main>

    <footer class="bg-white shadow-md py-6 mt-8">
        <div class="container mx-auto px-4 text-center text-gray-600">
            &copy; {{ date('Y') }} Oga Clothing Africa. All rights reserved.
        </div>
    </footer>
</body>

</html>
