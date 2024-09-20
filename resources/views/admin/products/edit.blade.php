@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <h2 class="text-2xl font-semibold leading-tight text-gray-800 mb-4">Edit Product</h2>
            <div class="bg-white shadow rounded-lg p-6">
                <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data"
                    class="max-w-lg mx-auto">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                        <input type="text" name="name" id="name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                            value="{{ old('name', $product->name) }}" required>
                        @error('name')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                        <textarea name="description" id="description" rows="3"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror"
                            required>{{ old('description', $product->description) }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
                        <input type="number" name="price" id="price" step="0.01"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('price') border-red-500 @enderror"
                            value="{{ old('price', $product->price) }}" required>
                        @error('price')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
                        <select name="category" id="category"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('category') border-red-500 @enderror"
                            required>
                            <option value="">Select a category</option>
                            @foreach (['traditional_wears', 'igbo_designs', 'yoruba_designs', 'hausa_designs', 'edo_designs', 'odugwu_2pcs', 'men_bespoke', 'women_bespoke', 'celebrities', 'boss_wears', 'oga_luxury', 'wedding', 'queens', 'anniversaries', 'special_occasions', 'shoes'] as $category)
                                <option value="{{ $category }}"
                                    {{ old('category', $product->category) == $category ? 'selected' : '' }}>
                                    {{ ucwords(str_replace('_', ' ', $category)) }}
                                </option>
                            @endforeach
                        </select>
                        @error('category')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="sizes" class="block text-gray-700 text-sm font-bold mb-2">Sizes
                            (comma-separated):</label>
                        <input type="text" name="sizes" id="sizes"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('sizes') border-red-500 @enderror"
                            value="{{ old('sizes', implode(',', $product->sizes)) }}">
                        @error('sizes')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="colors" class="block text-gray-700 text-sm font-bold mb-2">Colors
                            (comma-separated):</label>
                        <input type="text" name="colors" id="colors"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('colors') border-red-500 @enderror"
                            value="{{ old('colors', implode(',', $product->colors)) }}">
                        @error('colors')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="images" class="block text-gray-700 text-sm font-bold mb-2">Add New Images:</label>
                        <input type="file" name="images[]" id="images" multiple accept="image/*"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('images') border-red-500 @enderror">
                        @error('images')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Current Images:</label>
                        <div class="grid grid-cols-3 gap-4">
                            @foreach ($product->images as $image)
                                <div class="relative">
                                    <img src="{{ Storage::url($image->url) }}" alt="{{ $product->name }}"
                                        class="w-full h-32 object-cover rounded">
                                    <button type="button" onclick="removeImage({{ $image->id }})"
                                        class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center hover:bg-red-600 transition duration-300">×</button>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex items-center justify-end">
                        <button type="submit"
                            class="bg-pink-600 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 shadow-lg">
                            Update Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function removeImage(imageId) {
            if (confirm('Are you sure you want to remove this image?')) {
                fetch(`/admin/product-images/${imageId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                        },
                    }).then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            location.reload();
                        } else {
                            alert('Failed to remove image');
                        }
                    });
            }
        }
    </script>
@endsection
