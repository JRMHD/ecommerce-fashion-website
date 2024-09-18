@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
                <div class="relative" x-data="{ activeImage: 0 }">
                    @foreach ($product->images as $index => $image)
                        <img src="{{ Storage::url($image->url) }}" alt="{{ $product->name }}"
                            class="w-full h-auto rounded-lg shadow-md" x-show="activeImage === {{ $index }}">
                    @endforeach
                    <div class="mt-4 flex space-x-2 overflow-x-auto">
                        @foreach ($product->images as $index => $image)
                            <button @click="activeImage = {{ $index }}" class="w-20 h-20 focus:outline-none"
                                :class="{ 'ring-2 ring-blue-500': activeImage === {{ $index }} }">
                                <img src="{{ Storage::url($image->url) }}" alt="{{ $product->name }}"
                                    class="w-full h-full object-cover rounded-md">
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-4">
                <h1 class="text-3xl font-bold mb-4">{{ $product->name }}</h1>
                <p class="text-gray-600 mb-4">{{ $product->description }}</p>
                <p class="text-2xl font-bold text-green-600 mb-4">KES {{ number_format($product->price, 2) }}</p>
                <div class="mb-4">
                    <h2 class="font-semibold mb-2">Category:</h2>
                    <p>{{ ucwords(str_replace('_', ' ', $product->category)) }}</p>
                </div>
                <div class="mb-4">
                    <h2 class="font-semibold mb-2">Available Sizes:</h2>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($product->sizes as $size)
                            <span class="px-2 py-1 bg-gray-200 rounded-md">{{ $size }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="mb-4">
                    <h2 class="font-semibold mb-2">Available Colors:</h2>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($product->colors as $color)
                            <span class="px-2 py-1 bg-gray-200 rounded-md">{{ $color }}</span>
                        @endforeach
                    </div>
                </div>
                <button class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">Add to
                    Cart</button>
            </div>
        </div>
    </div>
@endsection
