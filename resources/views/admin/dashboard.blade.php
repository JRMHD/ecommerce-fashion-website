<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oga Clothing Africa - Admin Dashboard</title>
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

<body class="bg-gray-100">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Oga Clothing Africa - Admin Dashboard</h1>
                <p class="mt-1 text-sm text-gray-600">Welcome back, <span id="adminName"
                        class="font-semibold">Admin</span>!</p>
            </div>
            <img src="/assets/img/logo/nav-log.png" alt="Oga Clothing Africa Logo" class="h-12 w-auto">
        </div>
    </header>

    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96 p-4">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Welcome to the admin dashboard!</h2>
                <p class="text-gray-600">Here you can manage products, view orders, and update site content.</p>

                <!-- Management Buttons -->
                <div class="mt-6">
                    <a href="{{ route('admin.products.index') }}"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        View Products
                    </a>
                    <a href="{{ route('admin.products.create') }}"
                        class="ml-4 inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Add New Product
                    </a>
                </div>
                <!-- End Management Buttons -->
            </div>
        </div>
    </main>

    <script>
        // You can dynamically set the admin's name here
        document.getElementById('adminName').textContent = 'John Doe'; // Replace with actual admin name
    </script>
</body>

</html>
