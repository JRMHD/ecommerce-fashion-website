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


        <!-- Start product section -->
        <section class="product__section section--padding pt-0">
            <div class="container-fluid">
                <div class="section__heading text-center mb-35">
                    <h2 class="section__heading--maintitle">New Products</h2>
                </div>
                <ul class="product__tab--one product__tab--primary__btn d-flex justify-content-center mb-50">
                    <li class="product__tab--primary__btn__list active" data-toggle="tab" data-target="#featured">
                        Featured
                    </li>
                    <li class="product__tab--primary__btn__list" data-toggle="tab" data-target="#trending">
                        Trending
                    </li>
                    <li class="product__tab--primary__btn__list" data-toggle="tab" data-target="#newarrival">
                        New Arrival
                    </li>
                </ul>
                <div class="tab_content">
                    <div id="featured" class="tab_pane active show">
                        <div class="product__section--inner">
                            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product1.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product2.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h3 class="product__items--content__title h4">
                                                <a href="product-details">Oversize Cotton Dress</a>
                                            </h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$110</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$78</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product3.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product4.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h3 class="product__items--content__title h4">
                                                <a href="product-details">Boxy Denim Jacket</a>
                                            </h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$120</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$88</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product5.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product11.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Quilted Shoulder Bag</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$115</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$75</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product6.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product7.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">High Ankle Jeans</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$125</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$85</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product8.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product15.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Square Shoulder Bag</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$117</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$80</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product9.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product10.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Light Denim Jacket</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$130</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$66</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product12.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product13.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Wool-blend Jacket</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$144</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$98</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product11.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product8.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Aware organic cotton</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$135</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$68</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product14.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product15.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Western denim shirt</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$128</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$72</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product2.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product1.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">OSmock Mini Dresss</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$142</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$72</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="trending" class="tab_pane">
                        <div class="product__section--inner">
                            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product8.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product15.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Square Shoulder Bag</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$117</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$80</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product9.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product10.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Light Denim Jacket</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$130</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$66</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product12.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product13.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Wool-blend Jacket</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$144</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$98</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product11.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product8.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Aware organic cotton</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$135</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$68</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product14.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product15.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Western denim shirt</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$128</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$72</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product2.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product1.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">OSmock Mini Dresss</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$142</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$72</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product1.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product2.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h3 class="product__items--content__title h4">
                                                <a href="product-details">Oversize Cotton Dress</a>
                                            </h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$110</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$78</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product3.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product4.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h3 class="product__items--content__title h4">
                                                <a href="product-details">Boxy Denim Jacket</a>
                                            </h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$120</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$88</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product5.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product11.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Quilted Shoulder Bag</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$115</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$75</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product6.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product7.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">High Ankle Jeans</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$125</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$85</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="newarrival" class="tab_pane">
                        <div class="product__section--inner">
                            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product6.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product7.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">High Ankle Jeans</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$125</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$85</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product8.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product15.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Square Shoulder Bag</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$117</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$80</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product9.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product10.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Light Denim Jacket</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$130</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$66</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product12.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product13.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Wool-blend Jacket</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$144</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$98</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product1.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product2.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h3 class="product__items--content__title h4">
                                                <a href="product-details">Oversize Cotton Dress</a>
                                            </h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$110</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$78</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product3.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product4.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h3 class="product__items--content__title h4">
                                                <a href="product-details">Boxy Denim Jacket</a>
                                            </h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$120</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$88</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product5.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product11.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Quilted Shoulder Bag</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$115</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$75</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product11.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product8.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Aware organic cotton</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$135</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$68</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product14.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product15.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">Western denim shirt</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$128</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$72</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details">
                                                <img class="product__items--img product__primary--img"
                                                    src="assets/img/product/product2.png" alt="product-img" />
                                                <img class="product__items--img product__secondary--img"
                                                    src="assets/img/product/product1.png" alt="product-img" />
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product__items--content">
                                            <span class="product__items--content__subtitle">Jacket, Women</span>
                                            <h4 class="product__items--content__title">
                                                <a href="product-details">OSmock Mini Dresss</a>
                                            </h4>
                                            <div class="product__items--price">
                                                <span class="current__price">$142</span>
                                                <span class="price__divided"></span>
                                                <span class="old__price">$72</span>
                                            </div>
                                            <ul class="rating product__rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="product__items--action d-flex">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn add__to--cart"
                                                        href="cart">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="20.443" viewBox="0 0 14.706 13.534">
                                                            <g transform="translate(0 0)">
                                                                <g>
                                                                    <path data-name="Path 16787"
                                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                        transform="translate(0 -463.248)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16788"
                                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                        transform="translate(-1.191 -466.622)"
                                                                        fill="currentColor"></path>
                                                                    <path data-name="Path 16789"
                                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                        transform="translate(-2.875 -466.622)"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <span class="add__to--cart__text">
                                                            + Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1"
                                                        href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                            height="23.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="32" />
                                                            <circle cx="256" cy="256" r="80"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product section -->

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
                                    <a class="banner__bideo--play__icon glightbox"
                                        href="https://vimeo.com/115041822" data-gallery="video">
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
        <section class="product__section section--padding pt-0">
            <div class="container-fluid">
                <div class="section__heading text-center mb-50">
                    <h2 class="section__heading--maintitle">Our Best Seller</h2>
                </div>
                <div class="product__section--inner product__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product__items">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="product-details">
                                        <img class="product__items--img product__primary--img"
                                            src="assets/img/product/product1.png" alt="product-img" />
                                        <img class="product__items--img product__secondary--img"
                                            src="assets/img/product/product2.png" alt="product-img" />
                                    </a>
                                    <div class="product__badge">
                                        <span class="product__badge--items sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product__items--content">
                                    <span class="product__items--content__subtitle">Jacket, Women</span>
                                    <h3 class="product__items--content__title h4">
                                        <a href="product-details">Oversize Cotton Dress</a>
                                    </h3>
                                    <div class="product__items--price">
                                        <span class="current__price">$110</span>
                                        <span class="price__divided"></span>
                                        <span class="old__price">$78</span>
                                    </div>
                                    <ul class="rating product__rating d-flex">
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="product__items--action d-flex">
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn add__to--cart" href="cart">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                    height="20.443" viewBox="0 0 14.706 13.534">
                                                    <g transform="translate(0 0)">
                                                        <g>
                                                            <path data-name="Path 16787"
                                                                d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                transform="translate(0 -463.248)"
                                                                fill="currentColor">
                                                            </path>
                                                            <path data-name="Path 16788"
                                                                d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                transform="translate(-1.191 -466.622)"
                                                                fill="currentColor"></path>
                                                            <path data-name="Path 16789"
                                                                d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                transform="translate(-2.875 -466.622)"
                                                                fill="currentColor"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="add__to--cart__text">
                                                    + Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="wishlist">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                    height="23.443" viewBox="0 0 512 512">
                                                    <path
                                                        d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="32"></path>
                                                </svg>
                                                <span class="visually-hidden">Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" data-open="modal1"
                                                href="javascript:void(0)">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                    height="23.443" viewBox="0 0 512 512">
                                                    <path
                                                        d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="32" />
                                                    <circle cx="256" cy="256" r="80" fill="none"
                                                        stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="32" />
                                                </svg>
                                                <span class="visually-hidden">Quick View</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product__items">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="product-details">
                                        <img class="product__items--img product__primary--img"
                                            src="assets/img/product/product3.png" alt="product-img" />
                                        <img class="product__items--img product__secondary--img"
                                            src="assets/img/product/product4.png" alt="product-img" />
                                    </a>
                                    <div class="product__badge">
                                        <span class="product__badge--items sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product__items--content">
                                    <span class="product__items--content__subtitle">Jacket, Women</span>
                                    <h3 class="product__items--content__title h4">
                                        <a href="product-details">Boxy Denim Jacket</a>
                                    </h3>
                                    <div class="product__items--price">
                                        <span class="current__price">$120</span>
                                        <span class="price__divided"></span>
                                        <span class="old__price">$88</span>
                                    </div>
                                    <ul class="rating product__rating d-flex">
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="product__items--action d-flex">
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn add__to--cart" href="cart">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                    height="20.443" viewBox="0 0 14.706 13.534">
                                                    <g transform="translate(0 0)">
                                                        <g>
                                                            <path data-name="Path 16787"
                                                                d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                transform="translate(0 -463.248)"
                                                                fill="currentColor">
                                                            </path>
                                                            <path data-name="Path 16788"
                                                                d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                transform="translate(-1.191 -466.622)"
                                                                fill="currentColor"></path>
                                                            <path data-name="Path 16789"
                                                                d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                transform="translate(-2.875 -466.622)"
                                                                fill="currentColor"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="add__to--cart__text">
                                                    + Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="wishlist">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                    height="23.443" viewBox="0 0 512 512">
                                                    <path
                                                        d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="32"></path>
                                                </svg>
                                                <span class="visually-hidden">Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" data-open="modal1"
                                                href="javascript:void(0)">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                    height="23.443" viewBox="0 0 512 512">
                                                    <path
                                                        d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="32" />
                                                    <circle cx="256" cy="256" r="80" fill="none"
                                                        stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="32" />
                                                </svg>
                                                <span class="visually-hidden">Quick View</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product__items">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="product-details">
                                        <img class="product__items--img product__primary--img"
                                            src="assets/img/product/product5.png" alt="product-img" />
                                        <img class="product__items--img product__secondary--img"
                                            src="assets/img/product/product11.png" alt="product-img" />
                                    </a>
                                    <div class="product__badge">
                                        <span class="product__badge--items sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product__items--content">
                                    <span class="product__items--content__subtitle">Jacket, Women</span>
                                    <h4 class="product__items--content__title">
                                        <a href="product-details">Quilted Shoulder Bag</a>
                                    </h4>
                                    <div class="product__items--price">
                                        <span class="current__price">$115</span>
                                        <span class="price__divided"></span>
                                        <span class="old__price">$75</span>
                                    </div>
                                    <ul class="rating product__rating d-flex">
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="product__items--action d-flex">
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn add__to--cart" href="cart">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                    height="20.443" viewBox="0 0 14.706 13.534">
                                                    <g transform="translate(0 0)">
                                                        <g>
                                                            <path data-name="Path 16787"
                                                                d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                transform="translate(0 -463.248)"
                                                                fill="currentColor">
                                                            </path>
                                                            <path data-name="Path 16788"
                                                                d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                transform="translate(-1.191 -466.622)"
                                                                fill="currentColor"></path>
                                                            <path data-name="Path 16789"
                                                                d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                transform="translate(-2.875 -466.622)"
                                                                fill="currentColor"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="add__to--cart__text">
                                                    + Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="wishlist">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                    height="23.443" viewBox="0 0 512 512">
                                                    <path
                                                        d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="32"></path>
                                                </svg>
                                                <span class="visually-hidden">Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" data-open="modal1"
                                                href="javascript:void(0)">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                    height="23.443" viewBox="0 0 512 512">
                                                    <path
                                                        d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="32" />
                                                    <circle cx="256" cy="256" r="80" fill="none"
                                                        stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="32" />
                                                </svg>
                                                <span class="visually-hidden">Quick View</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product__items">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="product-details">
                                        <img class="product__items--img product__primary--img"
                                            src="assets/img/product/product8.png" alt="product-img" />
                                        <img class="product__items--img product__secondary--img"
                                            src="assets/img/product/product15.png" alt="product-img" />
                                    </a>
                                    <div class="product__badge">
                                        <span class="product__badge--items sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product__items--content">
                                    <span class="product__items--content__subtitle">Jacket, Women</span>
                                    <h4 class="product__items--content__title">
                                        <a href="product-details">Square Shoulder Bag</a>
                                    </h4>
                                    <div class="product__items--price">
                                        <span class="current__price">$117</span>
                                        <span class="price__divided"></span>
                                        <span class="old__price">$80</span>
                                    </div>
                                    <ul class="rating product__rating d-flex">
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="product__items--action d-flex">
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn add__to--cart" href="cart">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                    height="20.443" viewBox="0 0 14.706 13.534">
                                                    <g transform="translate(0 0)">
                                                        <g>
                                                            <path data-name="Path 16787"
                                                                d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                transform="translate(0 -463.248)"
                                                                fill="currentColor">
                                                            </path>
                                                            <path data-name="Path 16788"
                                                                d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                transform="translate(-1.191 -466.622)"
                                                                fill="currentColor"></path>
                                                            <path data-name="Path 16789"
                                                                d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                transform="translate(-2.875 -466.622)"
                                                                fill="currentColor"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="add__to--cart__text">
                                                    + Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="wishlist">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                    height="23.443" viewBox="0 0 512 512">
                                                    <path
                                                        d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="32"></path>
                                                </svg>
                                                <span class="visually-hidden">Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" data-open="modal1"
                                                href="javascript:void(0)">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                    height="23.443" viewBox="0 0 512 512">
                                                    <path
                                                        d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="32" />
                                                    <circle cx="256" cy="256" r="80" fill="none"
                                                        stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="32" />
                                                </svg>
                                                <span class="visually-hidden">Quick View</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product__items">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="product-details">
                                        <img class="product__items--img product__primary--img"
                                            src="assets/img/product/product12.png" alt="product-img" />
                                        <img class="product__items--img product__secondary--img"
                                            src="assets/img/product/product13.png" alt="product-img" />
                                    </a>
                                    <div class="product__badge">
                                        <span class="product__badge--items sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product__items--content">
                                    <span class="product__items--content__subtitle">Jacket, Women</span>
                                    <h4 class="product__items--content__title">
                                        <a href="product-details">Wool-blend Jacket</a>
                                    </h4>
                                    <div class="product__items--price">
                                        <span class="current__price">$144</span>
                                        <span class="price__divided"></span>
                                        <span class="old__price">$98</span>
                                    </div>
                                    <ul class="rating product__rating d-flex">
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="product__items--action d-flex">
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn add__to--cart" href="cart">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                    height="20.443" viewBox="0 0 14.706 13.534">
                                                    <g transform="translate(0 0)">
                                                        <g>
                                                            <path data-name="Path 16787"
                                                                d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                transform="translate(0 -463.248)"
                                                                fill="currentColor">
                                                            </path>
                                                            <path data-name="Path 16788"
                                                                d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                transform="translate(-1.191 -466.622)"
                                                                fill="currentColor"></path>
                                                            <path data-name="Path 16789"
                                                                d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                transform="translate(-2.875 -466.622)"
                                                                fill="currentColor"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="add__to--cart__text">
                                                    + Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="wishlist">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                    height="23.443" viewBox="0 0 512 512">
                                                    <path
                                                        d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="32"></path>
                                                </svg>
                                                <span class="visually-hidden">Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" data-open="modal1"
                                                href="javascript:void(0)">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                    height="23.443" viewBox="0 0 512 512">
                                                    <path
                                                        d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="32" />
                                                    <circle cx="256" cy="256" r="80" fill="none"
                                                        stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="32" />
                                                </svg>
                                                <span class="visually-hidden">Quick View</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product__items">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="product-details">
                                        <img class="product__items--img product__primary--img"
                                            src="assets/img/product/product14.png" alt="product-img" />
                                        <img class="product__items--img product__secondary--img"
                                            src="assets/img/product/product15.png" alt="product-img" />
                                    </a>
                                    <div class="product__badge">
                                        <span class="product__badge--items sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product__items--content">
                                    <span class="product__items--content__subtitle">Jacket, Women</span>
                                    <h4 class="product__items--content__title">
                                        <a href="product-details">Western denim shirt</a>
                                    </h4>
                                    <div class="product__items--price">
                                        <span class="current__price">$128</span>
                                        <span class="price__divided"></span>
                                        <span class="old__price">$72</span>
                                    </div>
                                    <ul class="rating product__rating d-flex">
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="product__items--action d-flex">
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn add__to--cart" href="cart">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                    height="20.443" viewBox="0 0 14.706 13.534">
                                                    <g transform="translate(0 0)">
                                                        <g>
                                                            <path data-name="Path 16787"
                                                                d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                transform="translate(0 -463.248)"
                                                                fill="currentColor">
                                                            </path>
                                                            <path data-name="Path 16788"
                                                                d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                transform="translate(-1.191 -466.622)"
                                                                fill="currentColor"></path>
                                                            <path data-name="Path 16789"
                                                                d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                transform="translate(-2.875 -466.622)"
                                                                fill="currentColor"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="add__to--cart__text">
                                                    + Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="wishlist">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                    height="23.443" viewBox="0 0 512 512">
                                                    <path
                                                        d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="32"></path>
                                                </svg>
                                                <span class="visually-hidden">Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" data-open="modal1"
                                                href="javascript:void(0)">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                    height="23.443" viewBox="0 0 512 512">
                                                    <path
                                                        d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="32" />
                                                    <circle cx="256" cy="256" r="80" fill="none"
                                                        stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="32" />
                                                </svg>
                                                <span class="visually-hidden">Quick View</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product__items">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="product-details">
                                        <img class="product__items--img product__primary--img"
                                            src="assets/img/product/product11.png" alt="product-img" />
                                        <img class="product__items--img product__secondary--img"
                                            src="assets/img/product/product8.png" alt="product-img" />
                                    </a>
                                    <div class="product__badge">
                                        <span class="product__badge--items sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product__items--content">
                                    <span class="product__items--content__subtitle">Jacket, Women</span>
                                    <h4 class="product__items--content__title">
                                        <a href="product-details">Aware organic cotton</a>
                                    </h4>
                                    <div class="product__items--price">
                                        <span class="current__price">$135</span>
                                        <span class="price__divided"></span>
                                        <span class="old__price">$68</span>
                                    </div>
                                    <ul class="rating product__rating d-flex">
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy"
                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                        transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="product__items--action d-flex">
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn add__to--cart" href="cart">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                    height="20.443" viewBox="0 0 14.706 13.534">
                                                    <g transform="translate(0 0)">
                                                        <g>
                                                            <path data-name="Path 16787"
                                                                d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                                transform="translate(0 -463.248)"
                                                                fill="currentColor">
                                                            </path>
                                                            <path data-name="Path 16788"
                                                                d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                                transform="translate(-1.191 -466.622)"
                                                                fill="currentColor"></path>
                                                            <path data-name="Path 16789"
                                                                d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                                transform="translate(-2.875 -466.622)"
                                                                fill="currentColor"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="add__to--cart__text">
                                                    + Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="wishlist">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                    height="23.443" viewBox="0 0 512 512">
                                                    <path
                                                        d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="32"></path>
                                                </svg>
                                                <span class="visually-hidden">Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" data-open="modal1"
                                                href="javascript:void(0)">
                                                <svg class="product__items--action__btn--svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="25.51"
                                                    height="23.443" viewBox="0 0 512 512">
                                                    <path
                                                        d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="32" />
                                                    <circle cx="256" cy="256" r="80" fill="none"
                                                        stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="32" />
                                                </svg>
                                                <span class="visually-hidden">Quick View</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </section>
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

        <!-- Quickview Wrapper -->
        <div class="modal" id="modal1" data-animation="slideInUp">
            <div class="modal-dialog quickview__main--wrapper">
                <header class="modal-header quickview__header">
                    <button class="close-modal quickview__close--btn" aria-label="close modal" data-close>
                        ✕
                    </button>
                </header>
                <div class="quickview__inner">
                    <div class="row row-cols-lg-2 row-cols-md-2">
                        <div class="col">
                            <div class="quickview__product--media product__details--media">
                                <div class="product__media--preview swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox"
                                                    data-gallery="product-media-preview"
                                                    href="assets/img/product/big-product1.jpg"><img
                                                        class="product__media--preview__items--img"
                                                        src="assets/img/product/big-product1.jpg"
                                                        alt="product-media-img" /></a>
                                                <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox"
                                                        href="assets/img/product/big-product1.jpg"
                                                        data-gallery="product-media-preview">
                                                        <svg class="product__media--view__icon--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="22.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32"></path>
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-miterlimit="10"
                                                                stroke-width="32" d="M338.29 338.29L448 448"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox"
                                                    data-gallery="product-media-preview"
                                                    href="assets/img/product/big-product2.jpg"><img
                                                        class="product__media--preview__items--img"
                                                        src="assets/img/product/big-product2.jpg"
                                                        alt="product-media-img" /></a>
                                                <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox"
                                                        href="assets/img/product/big-product2.jpg"
                                                        data-gallery="product-media-preview">
                                                        <svg class="product__media--view__icon--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="22.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32"></path>
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-miterlimit="10"
                                                                stroke-width="32" d="M338.29 338.29L448 448"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox"
                                                    data-gallery="product-media-preview"
                                                    href="assets/img/product/big-product3.jpg"><img
                                                        class="product__media--preview__items--img"
                                                        src="assets/img/product/big-product3.jpg"
                                                        alt="product-media-img" /></a>
                                                <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox"
                                                        href="assets/img/product/big-product3.jpg"
                                                        data-gallery="product-media-preview">
                                                        <svg class="product__media--view__icon--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="22.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32"></path>
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-miterlimit="10"
                                                                stroke-width="32" d="M338.29 338.29L448 448"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox"
                                                    data-gallery="product-media-preview"
                                                    href="assets/img/product/big-product4.jpg"><img
                                                        class="product__media--preview__items--img"
                                                        src="assets/img/product/big-product4.jpg"
                                                        alt="product-media-img" /></a>
                                                <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox"
                                                        href="assets/img/product/big-product4.jpg"
                                                        data-gallery="product-media-preview">
                                                        <svg class="product__media--view__icon--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="22.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32"></path>
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-miterlimit="10"
                                                                stroke-width="32" d="M338.29 338.29L448 448"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox"
                                                    data-gallery="product-media-preview"
                                                    href="assets/img/product/big-product5.jpg"><img
                                                        class="product__media--preview__items--img"
                                                        src="assets/img/product/big-product5.jpg"
                                                        alt="product-media-img" /></a>
                                                <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox"
                                                        href="assets/img/product/big-product5.jpg"
                                                        data-gallery="product-media-preview">
                                                        <svg class="product__media--view__icon--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="22.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32"></path>
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-miterlimit="10"
                                                                stroke-width="32" d="M338.29 338.29L448 448"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox"
                                                    data-gallery="product-media-preview"
                                                    href="assets/img/product/big-product6.jpg"><img
                                                        class="product__media--preview__items--img"
                                                        src="assets/img/product/big-product6.jpg"
                                                        alt="product-media-img" /></a>
                                                <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox"
                                                        href="assets/img/product/big-product6.jpg"
                                                        data-gallery="product-media-preview">
                                                        <svg class="product__media--view__icon--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                            height="22.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                                fill="none" stroke="currentColor"
                                                                stroke-miterlimit="10" stroke-width="32"></path>
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-miterlimit="10"
                                                                stroke-width="32" d="M338.29 338.29L448 448"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__media--nav swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img"
                                                    src="assets/img/product/small-product7.png"
                                                    alt="product-nav-img" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img"
                                                    src="assets/img/product/small-product8.png"
                                                    alt="product-nav-img" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img"
                                                    src="assets/img/product/small-product9.png"
                                                    alt="product-nav-img" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img"
                                                    src="assets/img/product/small-product10.png"
                                                    alt="product-nav-img" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img"
                                                    src="assets/img/product/small-product11.png"
                                                    alt="product-nav-img" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img"
                                                    src="assets/img/product/small-product12.png"
                                                    alt="product-nav-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper__nav--btn swiper-button-next"></div>
                                    <div class="swiper__nav--btn swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="quickview__info">
                                <form action="#">
                                    <h2 class="product__details--info__title mb-15">
                                        Oversize Cotton Dress
                                    </h2>
                                    <div class="product__details--info__price mb-10">
                                        <span class="current__price">$58.00</span>
                                        <span class="old__price">$68.00</span>
                                    </div>
                                    <div class="quickview__info--ratting d-flex align-items-center mb-10">
                                        <ul class="rating d-flex justify-content-center">
                                            <li class="rating__list">
                                                <span class="rating__list--icon">
                                                    <svg class="rating__list--icon__svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__list--icon">
                                                    <svg class="rating__list--icon__svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__list--icon">
                                                    <svg class="rating__list--icon__svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__list--icon">
                                                    <svg class="rating__list--icon__svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__list--icon">
                                                    <svg class="rating__list--icon__svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </li>
                                        </ul>
                                        <span class="quickview__info--review__text">(5 reviews)</span>
                                    </div>
                                    <p class="product__details--info__desc mb-15">
                                        Oga Clothing is a contemporary fashion brand dedicated to offering bold, unique
                                        styles for the modern trendsetter. Our collections are crafted to inspire
                                        confidence
                                        and individuality, blending traditional craftsmanship with modern aesthetics.
                                    </p>
                                    <div class="product__variant">
                                        <div class="product__variant--list mb-10">
                                            <fieldset class="variant__input--fieldset">
                                                <legend class="product__variant--title mb-8">
                                                    Color :
                                                </legend>
                                                <input id="color-red1" name="color" type="radio" checked />
                                                <label class="variant__color--value red" for="color-red1"
                                                    title="Red"><img class="variant__color--value__img"
                                                        src="assets/img/product/product1.png"
                                                        alt="variant-color-img" /></label>
                                                <input id="color-red2" name="color" type="radio" />
                                                <label class="variant__color--value red" for="color-red2"
                                                    title="Black"><img class="variant__color--value__img"
                                                        src="assets/img/product/product2.png"
                                                        alt="variant-color-img" /></label>
                                                <input id="color-red3" name="color" type="radio" />
                                                <label class="variant__color--value red" for="color-red3"
                                                    title="Pink"><img class="variant__color--value__img"
                                                        src="assets/img/product/product3.png"
                                                        alt="variant-color-img" /></label>
                                                <input id="color-red4" name="color" type="radio" />
                                                <label class="variant__color--value red" for="color-red4"
                                                    title="Orange"><img class="variant__color--value__img"
                                                        src="assets/img/product/product4.png"
                                                        alt="variant-color-img" /></label>
                                            </fieldset>
                                        </div>
                                        <div class="product__variant--list mb-15">
                                            <fieldset class="variant__input--fieldset weight">
                                                <legend class="product__variant--title mb-8">
                                                    Weight :
                                                </legend>
                                                <input id="weight1" name="weight" type="radio" checked />
                                                <label class="variant__size--value red" for="weight1">5 kg</label>
                                                <input id="weight2" name="weight" type="radio" />
                                                <label class="variant__size--value red" for="weight2">3 kg</label>
                                                <input id="weight3" name="weight" type="radio" />
                                                <label class="variant__size--value red" for="weight3">2 kg</label>
                                            </fieldset>
                                        </div>
                                        <div
                                            class="quickview__variant--list quantity d-flex align-items-center mb-15">
                                            <div class="quantity__box">
                                                <button type="button"
                                                    class="quantity__value quickview__value--quantity decrease"
                                                    aria-label="quantity value" value="Decrease Value">
                                                    -
                                                </button>
                                                <label>
                                                    <input type="number"
                                                        class="quantity__number quickview__value--number"
                                                        value="1" data-counter />
                                                </label>
                                                <button type="button"
                                                    class="quantity__value quickview__value--quantity increase"
                                                    aria-label="quantity value" value="Increase Value">
                                                    +
                                                </button>
                                            </div>
                                            <button class="primary__btn quickview__cart--btn" type="submit">
                                                Add To Cart
                                            </button>
                                        </div>
                                        <div class="quickview__variant--list variant__wishlist mb-15">
                                            <a class="variant__wishlist--icon" href="wishlist"
                                                title="Add to wishlist">
                                                <svg class="quickview__variant--wishlist__svg"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path
                                                        d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="32" />
                                                </svg>
                                                Add to Wishlist
                                            </a>
                                        </div>
                                    </div>
                                    <div class="quickview__social d-flex align-items-center">
                                        <label class="quickview__social--title">Social Share:</label>
                                        <ul class="quickview__social--wrapper mt-0 d-flex">
                                            <li class="quickview__social--list">
                                                <a class="quickview__social--icon" target="_blank"
                                                    href="https://www.facebook.com/">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="7.667"
                                                        height="16.524" viewBox="0 0 7.667 16.524">
                                                        <path data-name="Path 237"
                                                            d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z"
                                                            transform="translate(-960.13 -345.407)"
                                                            fill="currentColor" />
                                                    </svg>
                                                    <span class="visually-hidden">Facebook</span>
                                                </a>
                                            </li>
                                            <li class="quickview__social--list">
                                                <a class="quickview__social--icon" target="_blank"
                                                    href="https://twitter.com/">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.489"
                                                        height="13.384" viewBox="0 0 16.489 13.384">
                                                        <path data-name="Path 303"
                                                            d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z"
                                                            transform="translate(-951.23 -1140.849)"
                                                            fill="currentColor" />
                                                    </svg>
                                                    <span class="visually-hidden">Twitter</span>
                                                </a>
                                            </li>
                                            <li class="quickview__social--list">
                                                <a class="quickview__social--icon" target="_blank"
                                                    href="https://www.instagram.com/">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.497"
                                                        height="16.492" viewBox="0 0 19.497 19.492">
                                                        <path data-name="Icon awesome-instagram"
                                                            d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z"
                                                            transform="translate(0.004 -1.492)"
                                                            fill="currentColor" />
                                                    </svg>
                                                    <span class="visually-hidden">Instagram</span>
                                                </a>
                                            </li>
                                            <li class="quickview__social--list">
                                                <a class="quickview__social--icon" target="_blank"
                                                    href="https://www.youtube.com/">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.49"
                                                        height="11.582" viewBox="0 0 16.49 11.582">
                                                        <path data-name="Path 321"
                                                            d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z"
                                                            transform="translate(-951.269 -1359.8)"
                                                            fill="currentColor" />
                                                    </svg>
                                                    <span class="visually-hidden">Youtube</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quickview Wrapper End -->

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
                                    <input class="newsletter__popup--subscribe__input" type="email"
                                        name="email" placeholder="Enter your email address here..." required />
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
