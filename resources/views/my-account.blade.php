<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My account Oga - African Fashion E-Commerce</title>
    <meta name="description"
        content="Discover authentic African fashion at Oga. Shop our collection of customizable, high-quality clothing and accessories.">
    <meta name="keywords" content="African fashion, customizable clothing, e-commerce, Oga">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://oga.com/">
    <meta property="og:title" content="Oga - African Fashion E-Commerce">
    <meta property="og:description"
        content="Discover authentic African fashion at Oga. Shop our collection of customizable, high-quality clothing and accessories.">
    <meta property="og:image" content="https://oga.com/assets/img/og-image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://oga.com/">
    <meta property="twitter:title" content="Oga - African Fashion E-Commerce">
    <meta property="twitter:description"
        content="Discover authentic African fashion at Oga. Shop our collection of customizable, high-quality clothing and accessories.">
    <meta property="twitter:image" content="https://oga.com/assets/img/twitter-image.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">

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
                            <h1 class="breadcrumb__content--title text-white mb-25">My Account</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white"
                                        href="/">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">My
                                        Account</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- my account section start -->
        <section class="my__account--section section--padding">
            <div class="container">
                <!-- Welcome message -->
                <p class="account__welcome--text" style="font-size: 20px; font-weight: bold; margin-bottom: 20px;">
                    Hello, <span style="color: #EE2761;">{{ Auth::user()->name }}</span>!
                    Welcome to your account.
                </p>

                <!-- Account section inner layout -->
                <div class="my__account--section__inner border-radius-10 d-flex">
                    <!-- Left sidebar with profile links -->
                    <div class="account__left--sidebar">
                        <h2 class="account__content--title h3 mb-20">My Profile</h2>
                        <ul class="account__menu">
                            <!-- Removed Dashboard link -->
                            <li class="account__menu--list"><a href="{{ route('profile.edit') }}">Edit Profile</a></li>
                            <li class="account__menu--list"><a href="{{ url('addresses') }}">Addresses</a></li>
                            <li class="account__menu--list"><a href="{{ url('wishlist') }}">Wishlist</a></li>
                            <li class="account__menu--list">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                                </form>
                            </li>
                        </ul>
                    </div>

                    <!-- Main content section -->
                    <div class="account__wrapper">
                        <div class="account__content">
                            <!-- Profile Information -->
                            <div class="account__profile--info mb-30"
                                style="padding: 20px; background-color: #f9f9f9; border-radius: 10px;">
                                <h2 class="account__content--title h3 mb-20">Profile Information</h2>
                                <div style="font-size: 18px;">
                                    <strong>Name:</strong> {{ Auth::user()->name }} <br>
                                    <strong>Email:</strong> {{ Auth::user()->email }} <br>
                                </div>
                                <a href="{{ route('profile.edit') }}" class="button btn-primary mt-20"
                                    style="margin-top: 15px; display: inline-block; color: white; background-color: #EE2761; padding: 10px 20px; border-radius: 5px; font-weight: bold; text-decoration: none;">Edit
                                    Profile</a>
                            </div>

                            <div
                                style="font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px;">
                                <h2
                                    style="color: #333; font-size: 24px; margin-bottom: 20px; border-bottom: 2px solid #EE2761; padding-bottom: 10px;">
                                    My Orders</h2>
                                <div>
                                    @forelse ($orders as $order)
                                        <div
                                            style="background-color: #f9f9f9; border: 1px solid #ddd; border-radius: 8px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                            <h3 style="color: #EE2761; font-size: 18px; margin-bottom: 10px;">Order
                                                #{{ $order->id }}</h3>
                                            <p style="margin: 5px 0; color: #555;">Status: <span
                                                    style="font-weight: bold; color: #333;">{{ $order->status }}</span>
                                            </p>
                                            <p style="margin: 5px 0; color: #555;">Total: <span
                                                    style="font-weight: bold; color: #EE2761;">KES
                                                    {{ number_format($order->total_price, 2) }}</span></p>
                                            <a href="{{ route('orders.detail', $order->id) }}"
                                                style="display: inline-block; margin-top: 10px; padding: 8px 15px; background-color: #EE2761; color: white; text-decoration: none; border-radius: 5px; transition: background-color 0.3s;">View
                                                Order Details</a>
                                        </div>
                                    @empty
                                        <p
                                            style="text-align: center; color: #777; font-style: italic; padding: 20px; background-color: #f9f9f9; border-radius: 8px;">
                                            You have no orders yet.</p>
                                    @endforelse
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- my account section end -->


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

    <!-- Start footer section -->
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
