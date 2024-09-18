@extends('layouts.admin')

@section('title', 'Create Product')

@section('header', 'Create Product')

@section('content')
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
            <input type="text" name="name" id="name"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                value="{{ old('name') }}" required>
            @error('name')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
            <textarea name="description" id="description" rows="3"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror"
                required>{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
            <input type="number" name="price" id="price" step="0.01"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('price') border-red-500 @enderror"
                value="{{ old('price') }}" required>
            @error('price')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
            <select name="category" id="category"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('category') border-red-500 @enderror"
                required>
                <option value="">Select a category</option>
                <option value="traditional_wears">Traditional Wears</option>
                <option value="igbo_designs">Igbo designs</option>
                <option value="yoruba_designs">Yoruba designs</option>
                <option value="hausa_designs">Hausa designs</option>
                <option value="edo_designs">Edo designs</option>
                <option value="odugwu_2pcs">Odugwu 2pcs Wears</option>
                <option value="men_bespoke">Men bespoke designs</option>
                <option value="women_bespoke">Women bespoke designs</option>
                <option value="celebrities">Celebrities Wears</option>
                <option value="boss_wears">The Boss Wears (C.E.O and MD's)</option>
                <option value="oga_luxury">OGA Luxury</option>
                <option value="wedding">Wedding Wears</option>
                <option value="queens">Luxury Queens Wears</option>
                <option value="anniversaries">Anniversaries Wears</option>
                <option value="special_occasions">Special occasions Wears</option>
                <option value="shoes">Hand made shoes</option>
            </select>
            @error('category')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="sizes" class="block text-gray-700 text-sm font-bold mb-2">Sizes (comma-separated):</label>
            <input type="text" name="sizes" id="sizes"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('sizes') border-red-500 @enderror"
                value="{{ old('sizes') }}">
            @error('sizes')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="colors" class="block text-gray-700 text-sm font-bold mb-2">Colors (comma-separated):</label>
            <input type="text" name="colors" id="colors"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('colors') border-red-500 @enderror"
                value="{{ old('colors') }}">
            @error('colors')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="images" class="block text-gray-700 text-sm font-bold mb-2">Images:</label>
            <input type="file" name="images[]" id="images" multiple accept="image/*"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('images') border-red-500 @enderror">
            @error('images')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Create Product
            </button>
        </div>
    </form>
@endsection
