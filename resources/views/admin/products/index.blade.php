@extends('layouts.admin')

@section('title', 'Products')

@section('header', 'Products')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Products</h1>
        <a href="{{ route('admin.products.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add New Product
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 border-b text-left">ID</th>
                    <th class="py-2 px-4 border-b text-left">Name</th>
                    <th class="py-2 px-4 border-b text-left">Category</th>
                    <th class="py-2 px-4 border-b text-left">Price</th>
                    <th class="py-2 px-4 border-b text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $product->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->category }}</td>
                        <td class="py-2 px-4 border-b">₦{{ number_format($product->price, 2) }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('admin.products.edit', $product) }}"
                                class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700"
                                    onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- <div class="mt-4">
        {{ $products->links() }}
    </div> --}}
@endsection
