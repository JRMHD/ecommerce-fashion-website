<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Wishlist</title>
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

<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <img src="/assets/img/logo/nav-log.png" alt="Logo" class="h-12">
            <h1 class="text-3xl font-bold text-gray-800">Your Wishlist</h1>
        </div>

       
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

        @if ($wishlist->isNotEmpty())
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Product</th>
                            <th class="py-3 px-6 text-center">Price</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($wishlist as $product)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{ $product['name'] }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    KES {{ number_format($product['price'], 2) }}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <form action="{{ route('wishlist.remove', $product['id']) }}" method="POST"
                                        class="inline-block mr-2">
                                        @csrf
                                        @method('POST')
                                        <button type="submit"
                                            class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600 transition duration-300 ease-in-out">Remove</button>
                                    </form>
                                    <form action="{{ route('wishlist.addToCart', $product['id']) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('POST')
                                        <button type="submit"
                                            class="bg-brand text-white py-1 px-3 rounded hover:bg-red-700 transition duration-300 ease-in-out">Add
                                            to Cart</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-8 flex justify-between items-center">
                <a href="{{ url('shop') }}"
                    class="bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-700 transition duration-300 ease-in-out">Continue
                    Shopping</a>
                <a href="{{ url('cart') }}"
                    class="bg-brand text-white py-2 px-4 rounded hover:bg-red-700 transition duration-300 ease-in-out">View
                    Cart</a>
            </div>
        @else
            <div class="bg-white shadow-md rounded-lg p-8 text-center">
                <p class="text-xl text-gray-600 mb-4">Your wishlist is empty.</p>
                <a href="{{ url('shop') }}"
                    class="bg-brand text-white py-2 px-4 rounded hover:bg-red-700 transition duration-300 ease-in-out">Start
                    Shopping</a>
            </div>
        @endif
    </div>

    <script>
        function showMessage(elementId) {
            const element = document.getElementById(elementId);
            element.classList.remove('hidden');
            setTimeout(() => {
                element.classList.add('hidden');
            }, 5000);
        }

        // Example usage:
        // showMessage('successMessage');
        // showMessage('errorMessage');
    </script>
</body>

</html>
