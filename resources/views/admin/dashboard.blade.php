@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 sm:px-8 py-8">
        <!-- Dashboard Header -->
        <div class="flex justify-between items-center mb-6">
            <div class="flex items-center">
                <img src="{{ asset('assets/img/logo/nav-log.png') }}" alt="Oga Clothing Africa" class="h-12 w-auto">
                <h1 class="ml-4 text-3xl font-bold text-gray-800">Admin Dashboard</h1>
            </div>
            <div class="text-right">
                <p class="text-gray-500">Welcome back, <span class="font-semibold text-black">Mike!</span></p>
                <p class="text-gray-400 text-sm">Today is <span
                        class="font-semibold">{{ \Carbon\Carbon::now()->format('l, F j, Y') }}</span></p>
            </div>
        </div>

        <!-- Welcome Section -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Welcome to the Admin Dashboard!</h2>
            <p class="text-gray-600">Here you can manage products, view orders, and update site content.</p>
        </div>

        <!-- Action Buttons -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <!-- View Products Button -->
            <div class="bg-gray-100 hover:bg-gray-200 transition rounded-lg shadow-lg p-6 text-center">
                <a href="{{ route('admin.products.index') }}" class="text-xl font-semibold text-black">
                    <div class="flex justify-center items-center mb-4">
                        <svg class="w-12 h-12 text-#EE2761" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3v18h18V3H3zm3 3h12v12H6V6z"></path>
                        </svg>
                    </div>
                    View Products
                </a>
            </div>

            <!-- Add New Product Button -->
            <div class="bg-gray-100 hover:bg-gray-200 transition rounded-lg shadow-lg p-6 text-center">
                <a href="{{ route('admin.products.create') }}" class="text-xl font-semibold text-black">
                    <div class="flex justify-center items-center mb-4">
                        <svg class="w-12 h-12 text-#EE2761" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </div>
                    Add New Product
                </a>
            </div>

            <!-- Manage Orders Button -->
            <div class="bg-gray-100 hover:bg-gray-200 transition rounded-lg shadow-lg p-6 text-center">
                <a href="{{ route('admin.orders.index') }}" class="text-xl font-semibold text-black">
                    <div class="flex justify-center items-center mb-4">
                        <svg class="w-12 h-12 text-#EE2761" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    Manage Orders
                </a>
            </div>
        </div>

        <!-- Footer with Auto-Updating Year -->
        <footer class="mt-8 text-center text-gray-500 text-sm">
            <p>&copy; <span id="year">{{ \Carbon\Carbon::now()->format('Y') }}</span> Oga Clothing Africa. All rights
                reserved.</p>
        </footer>
    </div>
@endsection
