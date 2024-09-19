<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Wishlist | Oga Clothing Africa</title>
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
            <img src="/assets/img/logo/nav-log.png" alt="Oga Clothing Africa Logo" class="h-10 sm:h-12 mb-4 sm:mb-0">
            <h1 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800 text-center sm:text-left">
                Your Wishlist ({{ $wishlistCount }} items)
            </h1>
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

        @if ($wishlist->isNotEmpty())
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
                                    class="py-3 px-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Price
                                </th>
                                <th
                                    class="py-3 px-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Stock Status
                                </th>
                                <th
                                    class="py-3 px-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($wishlist as $product)
                                <tr class="hover:bg-gray-50">
                                    <td class="py-4 px-4">
                                        <div
                                            class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-4">
                                            <img src="{{ Storage::url($product['image']) }}"
                                                alt="{{ $product['name'] }}" class="w-16 h-16 object-cover rounded-md">
                                            <span class="font-medium text-gray-800 text-center sm:text-left">
                                                {{ $product['name'] }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4 text-right font-medium">
                                        KES {{ number_format($product['price'], 2) }}
                                    </td>
                                    <td class="py-4 px-4 text-center">
                                        @if ($product['in_stock'])
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                In Stock
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                In Stock
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-4">
                                        <div class="flex flex-col space-y-2">
                                            <form action="{{ route('wishlist.remove', $product['id']) }}" method="POST"
                                                class="w-full">
                                                @csrf
                                                <button type="submit"
                                                    class="w-full bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 transition duration-150 ease-in-out flex items-center justify-center">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>

                                                </button>
                                            </form>

                                            @if ($product['in_stock'])
                                                <form action="{{ route('wishlist.addToCart', $product['id']) }}"
                                                    method="POST" class="w-full">
                                                    @csrf
                                                    <div class="flex items-center space-x-2">
                                                        <input type="number" name="quantity" value="1"
                                                            min="1"
                                                            class="w-1/3 py-2 px-3 border rounded-md text-center">
                                                        <button type="submit"
                                                            class="w-2/3 bg-brand text-white py-2 px-4 rounded-md hover:bg-red-700 transition duration-150 ease-in-out flex items-center justify-center">
                                                            <svg class="w-4 h-4 mr-2" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                                                </path>
                                                            </svg>
                                                            Add to Cart
                                                        </button>
                                                    </div>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-between items-center space-y-4 sm:space-y-0 sm:space-x-4">
                <form action="{{ route('wishlist.addAllToCart') }}" method="POST" class="w-full">
                    @csrf
                    <button type="submit"
                        class="w-full sm:w-auto bg-blue-500 text-white py-3 px-6 rounded-md hover:bg-blue-600 transition duration-150 ease-in-out flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Add All to Cart
                    </button>
                </form>
                <a href="{{ url('shop') }}"
                    class="w-full sm:w-auto bg-gray-800 text-white py-3 px-6 rounded-md hover:bg-gray-700 transition duration-150 ease-in-out flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Continue Shopping
                </a>
                <a href="{{ url('cart') }}"
                    class="w-full sm:w-auto bg-green-500 text-white py-3 px-6 rounded-md hover:bg-green-600 transition duration-150 ease-in-out flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    View Cart
                </a>
            </div>
        @else
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <p class="text-gray-500">Your wishlist is empty. Add items to your wishlist to see them here.</p>
            </div>
            <a href="{{ url('shop') }}"
                class="w-full sm:w-auto bg-gray-800 text-white py-3 px-6 rounded-md hover:bg-gray-700 transition duration-150 ease-in-out flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Continue Shopping
            </a>
        @endif
    </main>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p class="text-sm">&copy; {{ date('Y') }} Oga Clothing Africa. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
