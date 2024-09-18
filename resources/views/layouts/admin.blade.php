<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="#" class="flex items-center py-4 px-2">
                            <span class="font-semibold text-gray-500 text-lg">Admin Dashboard</span>
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-3">
                    <a href="{{ url('admin.dashboard') }}"
                        class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Dashboard</a>
                    <a href="{{ route('admin.products.index') }}"
                        class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Products</a>
                    <a href="{{ url('admin.orders') }}"
                        class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Orders</a>
                    <a href="{{ route('logout') }}"
                        class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-red-500 hover:text-white transition duration-300">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-6 px-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</body>

</html>
