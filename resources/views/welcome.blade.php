<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oga Clothing Africa - African Fashion E-Commerce</title>
    <meta name="description"
        content="Discover authentic African fashion at Oga Clothing Africa. Shop our collection of customizable, high-quality clothing and accessories.">
    <meta name="keywords" content="African fashion, customizable clothing, e-commerce, Oga Clothing">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ogaclothingafrica.com/">
    <meta property="og:title" content="Oga Clothing Africa - African Fashion E-Commerce">
    <meta property="og:description"
        content="Discover authentic African fashion at Oga Clothing Africa. Shop our collection of customizable, high-quality clothing and accessories.">
    <meta property="og:image" content="https://ogaclothingafrica.com/assets/img/og-image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://ogaclothingafrica.com/">
    <meta property="twitter:title" content="Oga Clothing Africa - African Fashion E-Commerce">
    <meta property="twitter:description"
        content="Discover authentic African fashion at Oga Clothing Africa. Shop our collection of customizable, high-quality clothing and accessories.">
    <meta property="twitter:image" content="https://ogaclothingafrica.com/assets/img/twitter-image.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Preload critical assets -->
    <link rel="preload" href="/assets/css/style.css" as="style">
    <link rel="preload" href="/assets/js/main.js" as="script">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap"
        as="style">

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
                    <span data-text-preloader="L" class="letters-loading"> L </span>

                    <span data-text-preloader="O" class="letters-loading"> O </span>

                    <span data-text-preloader="A" class="letters-loading"> A </span>

                    <span data-text-preloader="D" class="letters-loading"> D </span>

                    <span data-text-preloader="I" class="letters-loading"> I </span>

                    <span data-text-preloader="N" class="letters-loading"> N </span>

                    <span data-text-preloader="G" class="letters-loading"> G </span>
                </div>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- End preloader -->
    {{-- header start --}}
    @include('header')
    {{-- header end --}}

    <main class="main__content_wrapper">
        <!-- Start slider section -->
        <section class="hero__slider--section">
            <div class="hero__slider--inner hero__slider--activation swiper">
                <div class="hero__slider--wrapper swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="hero__slider--items home1__slider--bg">
                            <div class="container-fluid">
                                <div class="hero__slider--items__inner">
                                    <div class="row row-cols-1">
                                        <div class="col">
                                            <div class="slider__content">
                                                <p class="slider__content--desc desc1 mb-15">
                                                    <img class="slider__text--shape__icon"
                                                        src="assets/img/icon/text-shape-icon.png"
                                                        alt="text-shape-icon" />
                                                    Exclusive Launch
                                                </p>
                                                <h2 class="slider__content--maintitle h1">
                                                    Oga's Latest Streetwear <br />
                                                    Collection 2024
                                                </h2>
                                                <p class="slider__content--desc desc2 d-sm-2-none mb-40">
                                                    Up To 30% Off New Arrivals. <br />
                                                    Embrace the Trend!
                                                </p>
                                                <a class="slider__btn primary__btn" href="shop">Explore Collection
                                                    <svg class="primary__btn--arrow__icon"
                                                        xmlns="http://www.w3.org/2000/svg" width="20.2"
                                                        height="12.2" viewBox="0 0 6.2 6.2">
                                                        <path
                                                            d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
                                                            transform="translate(-4 -4)" fill="currentColor"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="hero__slider--items home1__slider--bg two">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col">
                                        <div class="hero__slider--items__inner">
                                            <div class="slider__content">
                                                <p class="slider__content--desc desc1 mb-15">
                                                    <img class="slider__text--shape__icon"
                                                        src="assets/img/icon/text-shape-icon.png"
                                                        alt="text-shape-icon" />
                                                    Exclusive Launch
                                                </p>
                                                <h2 class="slider__content--maintitle h1">
                                                    Oga's Latest Streetwear <br />
                                                    Collection 2024
                                                </h2>
                                                <p class="slider__content--desc desc2 d-sm-2-none mb-40">
                                                    Up To 30% Off New Arrivals. <br />
                                                    Embrace the Trend!
                                                </p>
                                                <a class="primary__btn slider__btn" href="shop">Explore Collection
                                                    <svg class="slider__btn--arrow__icon"
                                                        xmlns="http://www.w3.org/2000/svg" width="20.2"
                                                        height="12.2" viewBox="0 0 6.2 6.2">
                                                        <path
                                                            d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
                                                            transform="translate(-4 -4)" fill="currentColor"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="hero__slider--items home1__slider--bg three">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-6">
                                        <div class="hero__slider--items__inner">
                                            <div class="slider__content text-center">
                                                <p class="slider__content--desc desc1 mb-15">
                                                    <img class="slider__text--shape__icon"
                                                        src="assets/img/icon/text-shape-icon.png"
                                                        alt="text-shape-icon" />
                                                    Exclusive Launch
                                                </p>
                                                <h2 class="slider__content--maintitle h1">
                                                    Oga's Latest Streetwear <br />
                                                    Collection 2024
                                                </h2>
                                                <p class="slider__content--desc desc2 d-sm-2-none mb-40">
                                                    Up To 30% Off New Arrivals. <br />
                                                    Embrace the Trend!
                                                </p>
                                                <a class="primary__btn slider__btn" href="shop">Explore Collection
                                                    <svg class="slider__btn--arrow__icon"
                                                        xmlns="http://www.w3.org/2000/svg" width="20.2"
                                                        height="12.2" viewBox="0 0 6.2 6.2">
                                                        <path
                                                            d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
                                                            transform="translate(-4 -4)" fill="currentColor"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper__nav--btn swiper-button-next"></div>
                <div class="swiper__nav--btn swiper-button-prev"></div>
            </div>
        </section>
        <!-- End slider section -->


        <!-- Start banner section -->
        <section class="banner__section section--padding">
            <div class="container-fluid">
                <div class="row mb--n28">
                    <div class="col-lg-5 col-md-order mb-28">
                        <div class="banner__items">
                            <a class="banner__items--thumbnail position__relative" href="shop">
                                <img class="banner__items--thumbnail__img" src="assets/img/banner/banner1.png"
                                    alt="banner-img" />
                                <div class="banner__items--content">
                                    <span class="banner__items--content__subtitle">Exclusive Offer</span>
                                    <h2 class="banner__items--content__title h3">
                                        Oga Collection <br />
                                        Stylish Picks for You
                                    </h2>
                                    <span class="banner__items--content__link">Discover Oga Style
                                        <svg class="banner__items--content__arrow--icon"
                                            xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2"
                                            viewBox="0 0 6.2 6.2">
                                            <path
                                                d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
                                                transform="translate(-4 -4)" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 mb-28">
                        <div class="row row-cols-lg-2 row-cols-sm-2 row-cols-1">
                            <div class="col mb-28">
                                <div class="banner__items">
                                    <a class="banner__items--thumbnail position__relative" href="shop">
                                        <img class="banner__items--thumbnail__img" src="assets/img/banner/banner2.png"
                                            alt="banner-img" />
                                        <div class="banner__items--content">
                                            <span class="banner__items--content__subtitle text__secondary">For the Oga
                                                Women</span>
                                            <h2 class="banner__items--content__title h3">
                                                Up to 30% Off & <br />
                                                Free Shipping
                                            </h2>
                                            <span class="banner__items--content__link">Shop Now
                                                <svg class="banner__items--content__arrow--icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2"
                                                    viewBox="0 0 6.2 6.2">
                                                    <path
                                                        d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
                                                        transform="translate(-4 -4)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="banner__items">
                                    <a class="banner__items--thumbnail position__relative" href="shop">
                                        <img class="banner__items--thumbnail__img" src="assets/img/banner/banner3.png"
                                            alt="banner-img" />
                                        <div class="banner__items--content">
                                            <span class="banner__items--content__subtitle">Oga Essentials</span>
                                            <h2 class="banner__items--content__title h3">
                                                Free Shipping Over <br />
                                                Orders Above $160
                                            </h2>
                                            <span class="banner__items--content__link">Explore Oga Deals
                                                <svg class="banner__items--content__arrow--icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2"
                                                    viewBox="0 0 6.2 6.2">
                                                    <path
                                                        d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
                                                        transform="translate(-4 -4)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="banner__items">
                            <a class="banner__items--thumbnail position__relative" href="shop">
                                <img class="banner__items--thumbnail__img banner__img--max__height"
                                    src="assets/img/banner/banner4.png" alt="banner-img" />
                                <div class="banner__items--content">
                                    <span class="banner__items--content__subtitle">Special Oga Discount</span>
                                    <h2 class="banner__items--content__title h3">
                                        Quality <br />
                                        Collection
                                    </h2>
                                    <span class="banner__items--content__link">Check Out Oga Styles
                                        <svg class="banner__items--content__arrow--icon"
                                            xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2"
                                            viewBox="0 0 6.2 6.2">
                                            <path
                                                d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
                                                transform="translate(-4 -4)" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner section -->

        <!-- Start deals banner section -->
        <section class="deals__banner--section section--padding pt-0">
            <div class="container-fluid">
                <div class="deals__banner--inner banner__bg">
                    <div class="row row-cols-1 align-items-center">
                        <div class="col">
                            <div class="deals__banner--content position__relative">
                                <span class="deals__banner--content__subtitle text__secondary">Hurry!! Get 25% Off
                                    Now</span>
                                <h2 class="deals__banner--content__maintitle">Oga's Deal Of The Day</h2>
                                <p class="deals__banner--content__desc">
                                    Don't miss out on the special Oga collection. Limited-time offer on <br />
                                    our best sellers!
                                </p>
                                <!-- Countdown Timer -->
                                <div id="dealsCountdown" class="deals__banner--countdown d-flex"
                                    style="font-size: 2em; font-weight: bold; margin: 20px 0;">
                                </div>
                                <a class="primary__btn" href="shop">Explore Oga Collection
                                    <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg"
                                        width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                        <path
                                            d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
                                            transform="translate(-4 -4)" fill="currentColor"></path>
                                    </svg>
                                </a>
                                <br />
                                <div class="banner__bideo--play">
                                    <a class="banner__bideo--play__icon glightbox" href="https://vimeo.com/115041822"
                                        data-gallery="video">
                                        <svg id="play" xmlns="http://www.w3.org/2000/svg" width="40.302"
                                            height="40.302" viewBox="0 0 46.302 46.302">
                                            <!-- SVG content remains unchanged -->
                                        </svg>
                                        <span class="visually-hidden">Video Play</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            // Countdown Timer with reset after reaching zero
            function initializeCountdown(endDate) {
                var countdown = document.getElementById('dealsCountdown');

                function updateCountdown() {
                    var now = new Date().getTime();
                    var distance = endDate - now;

                    // Time calculations for days, hours, minutes, and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Display the result in the element with larger, bolder text
                    countdown.innerHTML = `
                <div style="display: inline-block; margin: 0 10px; text-align: center;">
                    <span style="font-size: 1.5em;">${days}</span><br><span style="font-size: 0.5em;">days</span>
                </div>
                <div style="display: inline-block; margin: 0 10px; text-align: center;">
                    <span style="font-size: 1.5em;">${hours}</span><br><span style="font-size: 0.5em;">hours</span>
                </div>
                <div style="display: inline-block; margin: 0 10px; text-align: center;">
                    <span style="font-size: 1.5em;">${minutes}</span><br><span style="font-size: 0.5em;">mins</span>
                </div>
                <div style="display: inline-block; margin: 0 10px; text-align: center;">
                    <span style="font-size: 1.5em;">${seconds}</span><br><span style="font-size: 0.5em;">secs</span>
                </div>
            `;

                    // If the countdown is over, reset it
                    if (distance < 0) {
                        endDate = new Date().getTime() + (24 * 60 * 60 * 1000); // Reset to 24 hours from now
                    }
                }

                // Update countdown every second
                setInterval(updateCountdown, 1000);
            }

            // Set the initial countdown time to 24 hours from the current time
            var endDate = new Date().getTime() + (24 * 60 * 60 * 1000);
            initializeCountdown(endDate);
        </script>

        <!-- End deals banner section -->

        <!-- Start product section -->

        <!-- End product section -->

        <!-- Start banner section -->
        <section class="banner__section section--padding pt-0">
            <div class="container-fluid">
                <div class="row row-cols-md-2 row-cols-1 mb--n28">
                    <div class="col mb-28">
                        <div class="banner__items position__relative">
                            <a class="banner__items--thumbnail" href="shop"><img
                                    class="banner__items--thumbnail__img banner__img--max__height"
                                    src="assets/img/banner/banner5.png" alt="banner-img" />
                                <div class="banner__items--content">
                                    <span class="banner__items--content__subtitle d-none d-lg-block">Pick Your
                                        Items</span>
                                    <h2 class="banner__items--content__title h3">
                                        Up to 25% Off Order Now
                                    </h2>
                                    <span class="banner__items--content__link"><u>Shop now</u></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col mb-28">
                        <div class="banner__items position__relative">
                            <a class="banner__items--thumbnail" href="shop"><img
                                    class="banner__items--thumbnail__img banner__img--max__height"
                                    src="assets/img/banner/banner6.png" alt="banner-img" />
                                <div class="banner__items--content">
                                    <span class="banner__items--content__subtitle d-none d-lg-block">Special
                                        offer</span>
                                    <h2 class="banner__items--content__title h3">
                                        Up to 35% Off Order Now
                                    </h2>
                                    <span class="banner__items--content__link"><u>Discover Now</u>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner section -->



        @include('footer')



        <!-- Start News letter popup -->
        <div class="newsletter__popup" data-animation="slideInUp">
            <div id="boxes" class="newsletter__popup--inner">
                <button class="newsletter__popup--close__btn" aria-label="search close button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 512 512">
                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
                    </svg>
                </button>
                <div class="box newsletter__popup--box d-flex align-items-center">
                    <div class="newsletter__popup--thumbnail">
                        <img class="newsletter__popup--thumbnail__img display-block"
                            src="assets/img/banner/newsletter-popup-thumb2.png" alt="newsletter-popup-thumb" />
                    </div>
                    <div class="newsletter__popup--box__right">
                        <h2 class="newsletter__popup--title">Join Our Newsletter</h2>
                        <div class="newsletter__popup--content">
                            <label class="newsletter__popup--content--desc">Enter your email address to subscribe to
                                Ogaclothing
                                notification of our new post &amp; features by email.</label>
                            <div class="newsletter__popup--subscribe" id="frm_subscribe">
                                <form id="newsletterForm" class="newsletter__popup--subscribe__form">
                                    @csrf
                                    <input class="newsletter__popup--subscribe__input" type="email" name="email"
                                        placeholder="Enter your email address here..." required />
                                    <button id="subscribeBtn" class="newsletter__popup--subscribe__btn"
                                        type="submit">
                                        Subscribe
                                    </button>
                                </form>

                                <div id="subscribeLoadingSpinner"
                                    style="display: none; text-align: center; margin-top: 20px;">
                                    <div
                                        style="display: inline-block; width: 30px; height: 30px; border: 3px solid #f3f3f3; border-top: 3px solid #EE2761; border-radius: 50%; animation: spin 1s linear infinite;">
                                    </div>
                                </div>

                                <div id="subscribeMessageStatus"
                                    style="display: none; margin-top: 20px; padding: 10px; border-radius: 5px; text-align: center; font-weight: bold;">
                                </div>

                                <style>
                                    @keyframes spin {
                                        0% {
                                            transform: rotate(0deg);
                                        }

                                        100% {
                                            transform: rotate(360deg);
                                        }
                                    }

                                    .newsletter__popup--subscribe__input {
                                        width: 100%;
                                        padding: 10px;
                                        margin-bottom: 10px;
                                        border: 1px solid #ddd;
                                        border-radius: 5px;
                                        font-size: 14px;
                                    }

                                    .newsletter__popup--subscribe__btn {
                                        background-color: #EE2761;
                                        color: white;
                                        border: none;
                                        padding: 10px 20px;
                                        border-radius: 5px;
                                        cursor: pointer;
                                        transition: background-color 0.3s ease;
                                        font-size: 14px;
                                    }

                                    .newsletter__popup--subscribe__btn:hover {
                                        background-color: #d61e54;
                                    }
                                </style>

                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                <script>
                                    $(document).ready(function() {
                                        $('#newsletterForm').on('submit', function(e) {
                                            e.preventDefault();

                                            $('#subscribeBtn').prop('disabled', true);
                                            $('#subscribeLoadingSpinner').show();
                                            $('#subscribeMessageStatus').hide();

                                            $.ajax({
                                                url: '{{ route('newsletter.subscribe') }}',
                                                method: 'POST',
                                                data: $(this).serialize(),
                                                success: function(response) {
                                                    $('#subscribeLoadingSpinner').hide();
                                                    $('#subscribeMessageStatus').text('Thank you for subscribing!').css({
                                                        'background-color': '#d4edda',
                                                        'color': '#155724',
                                                        'border': '1px solid #c3e6cb'
                                                    }).show();
                                                    $('#newsletterForm')[0].reset();
                                                },
                                                error: function(xhr) {
                                                    $('#subscribeLoadingSpinner').hide();
                                                    $('#subscribeMessageStatus').text(
                                                        'Error subscribing. Please try again.').css({
                                                        'background-color': '#f8d7da',
                                                        'color': '#721c24',
                                                        'border': '1px solid #f5c6cb'
                                                    }).show();
                                                },
                                                complete: function() {
                                                    $('#subscribeBtn').prop('disabled', false);
                                                }
                                            });
                                        });
                                    });
                                </script>
                                <div class="newsletter__popup--footer">
                                    <input type="checkbox" id="newsletter__dont--show" />
                                    <label class="newsletter__popup--dontshow__again--text"
                                        for="newsletter__dont--show">Don't show this popup again</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End News letter popup -->

        <!-- Scroll top bar -->
        <button id="scroll__top">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="48" d="M112 244l144-144 144 144M256 120v292" />
            </svg>
        </button>

        <!-- All Script JS Plugins here  -->
        <script src="assets/js/vendor/popper.js" defer="defer"></script>
        <script src="assets/js/vendor/bootstrap.min.js" defer="defer"></script>
        <script src="assets/js/plugins/swiper-bundle.min.js"></script>
        <script src="assets/js/plugins/glightbox.min.js"></script>

        <!-- Customscript js -->
        <script src="assets/js/script.js"></script>
</body>

</html>
