<!doctype html>
<html lang="zxx">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop African Fashion | Oga Clothing Africa</title>
    <meta name="description"
        content="Explore our collection of authentic African fashion. Find customizable clothing and accessories at Oga Clothing Africa's online store.">
    <meta name="keywords" content="African fashion, online shop, customizable clothing, Oga Clothing Africa">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ogaclothingafrica.com/shop">
    <meta property="og:title" content="Shop African Fashion | Oga Clothing Africa">
    <meta property="og:description"
        content="Explore our collection of authentic African fashion. Find customizable clothing and accessories at Oga Clothing Africa's online store.">
    <meta property="og:image" content="https://ogaclothingafrica.com/assets/img/shop-og-image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://ogaclothingafrica.com/shop">
    <meta property="twitter:title" content="Shop African Fashion | Oga Clothing Africa">
    <meta property="twitter:description"
        content="Explore our collection of authentic African fashion. Find customizable clothing and accessories at Oga Clothing Africa's online store.">
    <meta property="twitter:image" content="https://ogaclothingafrica.com/assets/img/shop-twitter-image.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">

    <!-- Preload critical assets -->
    <link rel="preload" href="/assets/css/style.css" as="style">
    <link rel="preload" href="/assets/js/main.js" as="script">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/glightbox.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap">
</head>

<body>

    <!-- Start preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>

                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>

                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>

                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>

                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>

                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>

                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                </div>
            </div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- End preloader -->


    @include('header')

    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">Shop Left Sidebar</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white"
                                        href="index">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Shop Left
                                        Sidebar</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->
        <!-- Start shop section -->
        <div style="max-width: 1200px; margin: 0 auto; padding: 20px;">
            <h1 style="font-size: 2rem; font-weight: bold; margin-bottom: 24px; color: black;">Shop with us Today</h1>

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

            <!-- Filters -->
            <div style="margin-bottom: 24px;">
                <form action="{{ route('shop.index') }}" method="GET"
                    style="display: flex; flex-wrap: wrap; gap: 8px;">
                    <!-- Search Input -->
                    <input name="query" type="text" placeholder="Search..."
                        value="{{ request()->input('query') }}"
                        style="padding: 8px; border-radius: 5px; border: 1px solid #ddd; flex: 1 1 200px; min-width: 150px;">

                    <!-- Category Filter -->
                    <select name="category"
                        style="padding: 8px; border-radius: 5px; border: 1px solid #ddd; flex: 1 1 200px; min-width: 150px;">
                        <option value="">Select a category</option>
                        <option value="traditional_wears"
                            {{ request()->input('category') == 'traditional_wears' ? 'selected' : '' }}>Traditional
                            Wears</option>
                        <option value="igbo_designs"
                            {{ request()->input('category') == 'igbo_designs' ? 'selected' : '' }}>Igbo designs</option>
                        <option value="yoruba_designs"
                            {{ request()->input('category') == 'yoruba_designs' ? 'selected' : '' }}>Yoruba designs
                        </option>
                        <option value="hausa_designs"
                            {{ request()->input('category') == 'hausa_designs' ? 'selected' : '' }}>Hausa designs
                        </option>
                        <option value="edo_designs"
                            {{ request()->input('category') == 'edo_designs' ? 'selected' : '' }}>Edo designs</option>
                        <option value="odugwu_2pcs"
                            {{ request()->input('category') == 'odugwu_2pcs' ? 'selected' : '' }}>Odugwu 2pcs Wears
                        </option>
                        <option value="men_bespoke"
                            {{ request()->input('category') == 'men_bespoke' ? 'selected' : '' }}>Men bespoke designs
                        </option>
                        <option value="women_bespoke"
                            {{ request()->input('category') == 'women_bespoke' ? 'selected' : '' }}>Women bespoke
                            designs</option>
                        <option value="celebrities"
                            {{ request()->input('category') == 'celebrities' ? 'selected' : '' }}>Celebrities Wears
                        </option>
                        <option value="boss_wears"
                            {{ request()->input('category') == 'boss_wears' ? 'selected' : '' }}>The Boss Wears (C.E.O
                            and MD's)</option>
                        <option value="oga_luxury"
                            {{ request()->input('category') == 'oga_luxury' ? 'selected' : '' }}>OGA Luxury</option>
                        <option value="wedding" {{ request()->input('category') == 'wedding' ? 'selected' : '' }}>
                            Wedding Wears</option>
                        <option value="queens" {{ request()->input('category') == 'queens' ? 'selected' : '' }}>Luxury
                            Queens Wears</option>
                        <option value="anniversaries"
                            {{ request()->input('category') == 'anniversaries' ? 'selected' : '' }}>Anniversaries Wears
                        </option>
                        <option value="special_occasions"
                            {{ request()->input('category') == 'special_occasions' ? 'selected' : '' }}>Special
                            occasions Wears</option>
                        <option value="shoes" {{ request()->input('category') == 'shoes' ? 'selected' : '' }}>Hand
                            made shoes</option>
                    </select>

                    <!-- Price Filter -->
                    <input name="min_price" type="number" placeholder="Min Price"
                        value="{{ request()->input('min_price') }}"
                        style="padding: 8px; border-radius: 5px; border: 1px solid #ddd; flex: 1 1 100px; min-width: 100px;">
                    <input name="max_price" type="number" placeholder="Max Price"
                        value="{{ request()->input('max_price') }}"
                        style="padding: 8px; border-radius: 5px; border: 1px solid #ddd; flex: 1 1 100px; min-width: 100px;">

                    <!-- Submit Button -->
                    <button type="submit"
                        style="background-color: #EE2761; color: white; padding: 8px 16px; border-radius: 5px; border: none; flex: 1 1 100px; min-width: 100px;">
                        Filter
                    </button>
                </form>
            </div>


            <!-- Display Products or No Results Message -->
            @if ($products->isEmpty())
                <p style="text-align: center; font-size: 1.25rem; color: #888;">No products found.</p>
            @else
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px;">
                    @foreach ($products as $product)
                        <div
                            style="background-color: white; border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); overflow: hidden;">
                            @if ($product->images->isNotEmpty())
                                <img src="{{ Storage::url($product->images->first()->url) }}"
                                    alt="{{ $product->name }}"
                                    style="width: 100%; height: 280px; object-fit: cover;">
                            @else
                                <div
                                    style="width: 100%; height: 280px; background-color: #f0f0f0; display: flex; align-items: center; justify-content: center;">
                                    No Image
                                </div>
                            @endif

                            <div style="padding: 16px;">
                                <h2 style="font-size: 1.75rem; font-weight: bold; margin-bottom: 8px; color: black;">
                                    {{ $product->name }}</h2>
                                <p style="color: #888888; margin-bottom: 8px;">
                                    {{ Str::limit($product->description, 100) }}</p>
                                <p style="font-size: 1.25rem; font-weight: bold; color: #EE2761; margin-bottom: 16px;">
                                    KES {{ number_format($product->price, 2) }}</p>

                                <div
                                    style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
                                    <!-- Add to Cart Form -->
                                    <form action="{{ route('cart.add', $product) }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            style="display: flex; align-items: center; background-color: black; color: white; padding: 8px 16px; border-radius: 5px; text-decoration: none; transition: background-color 0.3s;">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                style="height: 20px; width: 20px; margin-right: 8px;" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 3h2l.4 2M7 13h10l1.4-8H5.2L7 13zm0 0l1 5h8l1-5M5 13H4a1 1 0 100 2h1m14-2h1a1 1 0 100 2h-1" />
                                            </svg>
                                            Add to Cart
                                        </button>
                                    </form>

                                    <!-- Add to Wishlist Form -->
                                    <form action="{{ route('wishlist.add', $product) }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            style="background-color: transparent; border: none; color: #EE2761; cursor: pointer;">
                                            <svg xmlns="http://www.w3.org/2000/svg" style="height: 24px; width: 24px;"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 016.364 0l.318.318.318-.318a4.5 4.5 0 016.364 6.364l-6.682 6.682a1 1 0 01-1.414 0L4.318 12.682a4.5 4.5 0 010-6.364z" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>

                                <a href="{{ route('shop.show', $product) }}"
                                    style="display: block; text-align: center; background-color: #EE2761; color: white; padding: 12px; border-radius: 5px; text-decoration: none; font-weight: bold; transition: background-color 0.3s;">
                                    View Details
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination Section -->
                <div style="margin-top: 32px; text-align: center;">
                    @if ($products->lastPage() > 1)
                        <ul style="list-style-type: none; padding: 0; display: inline-flex; gap: 8px;">
                            <!-- Previous Page Link -->
                            @if ($products->onFirstPage())
                                <li style="color: grey;">&laquo;</li>
                            @else
                                <li>
                                    <a href="{{ $products->previousPageUrl() }}"
                                        style="color: #EE2761; text-decoration: none;">&laquo;</a>
                                </li>
                            @endif

                            <!-- Page Numbers -->
                            @for ($i = 1; $i <= $products->lastPage(); $i++)
                                <li>
                                    <a href="{{ $products->url($i) }}"
                                        style="padding: 8px 12px; background-color: {{ $products->currentPage() == $i ? '#EE2761' : '#f0f0f0' }}; color: {{ $products->currentPage() == $i ? 'white' : 'black' }}; border-radius: 5px; text-decoration: none;">
                                        {{ $i }}
                                    </a>
                                </li>
                            @endfor

                            <!-- Next Page Link -->
                            @if ($products->hasMorePages())
                                <li>
                                    <a href="{{ $products->nextPageUrl() }}"
                                        style="color: #EE2761; text-decoration: none;">&raquo;</a>
                                </li>
                            @else
                                <li style="color: grey;">&raquo;</li>
                            @endif
                        </ul>
                    @endif
                </div>
            @endif
        </div>
        <!-- End shop section -->



        <!-- Start shipping section -->
        <section class="shipping__section2 shipping__style3 section--padding pt-0">
            <div class="container">
                <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img src="assets/img/other/shipping1.png" alt="Shipping Icon">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Shipping</h2>
                            <p class="shipping__items2--content__desc">Fast and reliable worldwide delivery through
                                trusted carriers like DHL, UPS, and FedEx.</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img src="assets/img/other/shipping2.png" alt="Payment Icon">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Payment</h2>
                            <p class="shipping__items2--content__desc">Secure payment options including credit/debit
                                cards and direct bank transfers.</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img src="assets/img/other/shipping3.png" alt="Return Icon">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Return</h2>
                            <p class="shipping__items2--content__desc">Easy returns for all products with a hassle-free
                                process.</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img src="assets/img/other/shipping4.png" alt="Support Icon">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Support</h2>
                            <p class="shipping__items2--content__desc">24/7 customer support to assist you with any
                                queries.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End shipping section -->


    </main>
    {{-- footer start --}}
    @include('footer')
    <!-- End footer section -->


    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="48" d="M112 244l144-144 144 144M256 120v292" />
        </svg></button>

    <!-- All Script JS Plugins here  -->
    <script src="assets/js/vendor/popper.js" defer="defer"></script>
    <script src="assets/js/vendor/bootstrap.min.js" defer="defer"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/glightbox.min.js"></script>

    <!-- Customscript js -->
    <script src="assets/js/script.js"></script>

</body>



</html>
