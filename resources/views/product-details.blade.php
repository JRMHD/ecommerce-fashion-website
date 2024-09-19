<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: '#EE2761',
                    },
                },
            },
        }
    </script>
    <style>
        .swiper-pagination-bullet-active {
            background-color: #EE2761 !important;
        }

        .thumbnail-swiper .swiper-slide-thumb-active {
            border: 2px solid #EE2761;
        }
    </style>
</head>

<body class="bg-gray-50 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex justify-between items-center mb-6">
            <a href="/shop"
                class="bg-gray-900 text-white py-2 px-4 rounded-full hover:bg-opacity-90 transition duration-300 inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                        clip-rule="evenodd" />
                </svg>
                Go to Shop
            </a>
            <a href="https://www.instagram.com/iammikedrimz" target="_blank"
                class="text-gray-900 hover:text-brand transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                </svg>
            </a>
        </div>

        <div class="bg-white shadow-xl rounded-3xl overflow-hidden">
            <div class="md:flex">
                <!-- Product Images -->
                <div class="md:w-1/2 p-6">
                    <div class="swiper mySwiper mb-4">
                        <div class="swiper-wrapper">
                            @foreach ($product->images as $image)
                                <div class="swiper-slide">
                                    <img src="{{ Storage::url($image->url) }}" alt="{{ $product->name }}"
                                        class="w-full h-auto object-cover rounded-lg">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper thumbnail-swiper">
                        <div class="swiper-wrapper">
                            @foreach ($product->images as $image)
                                <div class="swiper-slide">
                                    <img src="{{ Storage::url($image->url) }}" alt="{{ $product->name }}"
                                        class="w-full h-auto object-cover rounded-md cursor-pointer">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Product Details -->
                <div class="md:w-1/2 p-8">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $product->name }}</h1>
                    <p class="text-gray-600 mb-6">{{ $product->description }}</p>
                    <p class="text-3xl font-bold text-brand mb-6">KES. {{ number_format($product->price, 2) }}</p>

                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-900 mb-2">Category</h2>
                        <p class="text-gray-700">{{ ucwords(str_replace('_', ' ', $product->category)) }}</p>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-900 mb-2">Available Sizes</h2>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($product->sizes as $size)
                                <span
                                    class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-sm hover:bg-gray-200 transition duration-300">{{ $size }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-lg font-semibold text-gray-900 mb-2">Available Colors</h2>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($product->colors as $color)
                                <span
                                    class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-sm hover:bg-gray-200 transition duration-300">{{ $color }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex space-x-4 mb-6">
                        <button
                            class="flex-1 bg-brand text-white py-3 px-6 rounded-lg hover:bg-opacity-90 transition duration-300 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                            </svg>
                            Add to Cart
                        </button>
                        <button
                            class="flex-1 bg-gray-900 text-white py-3 px-6 rounded-lg hover:bg-opacity-90 transition duration-300 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Proceed to Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Other Products Section -->
        @if (isset($otherProducts) && $otherProducts->isNotEmpty())
            <div class="mt-16">
                <h2 class="text-3xl font-bold mb-8 text-center">Other Products You Might Like</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach ($otherProducts as $otherProduct)
                        <div
                            class="bg-white rounded-2xl shadow-md overflow-hidden transition duration-300 hover:shadow-xl">
                            @if ($otherProduct->images->first())
                                <img src="{{ Storage::url($otherProduct->images->first()->url) }}"
                                    alt="{{ $otherProduct->name }}" class="w-full h-48 object-cover">
                            @endif
                            <div class="p-4">
                                <h3 class="text-lg font-semibold mb-2">{{ $otherProduct->name }}</h3>
                                <p class="text-brand font-bold mb-2">KES. {{ number_format($otherProduct->price, 2) }}
                                </p>
                                <a href="{{ route('products.show', $otherProduct) }}"
                                    class="inline-block bg-gray-900 text-white py-2 px-4 rounded-lg hover:bg-opacity-90 transition duration-300">View
                                    Details</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var thumbSwiper = new Swiper(".thumbnail-swiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            thumbs: {
                swiper: thumbSwiper,
            },
        });
    </script>
</body>

</html>
