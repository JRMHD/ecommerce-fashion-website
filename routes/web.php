<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
// use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\OrderController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Basic routes for pages
Route::view('/', 'welcome')->name('home');
Route::view('/404', '404')->name('404');
Route::view('/about', 'about')->name('about');
Route::view('/cart', 'cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/checkout-2', 'checkout-2')->name('checkout.2');
Route::view('/checkout-3', 'checkout-3')->name('checkout.3');
Route::view('/checkout-4', 'checkout-4')->name('checkout.4');
Route::view('/contact', 'contact')->name('contact');
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/faq', 'faq')->name('faq');
Route::view('/footer', 'footer')->name('footer');
Route::view('/login', 'login')->name('login');
// Route::view('/my-account', 'my-account')->name('my.account');
// Route::view('/my-account-2', 'my-account-2')->name('my.account.2');
Route::view('/privacy-policy', 'privacy-policy')->name('privacy.policy');

// Product-related routes
Route::view('/product-details', 'product-details')->name('product.details');
Route::view('/product-gallery', 'product-gallery')->name('product.gallery');
Route::view('/product-video', 'product-video')->name('product.video');

// Shop pages
Route::view('/shop', 'shop')->name('shop');
Route::view('/shop-grid', 'shop-grid')->name('shop.grid');
Route::view('/shop-grid-list', 'shop-grid-list')->name('shop.grid.list');
Route::view('/shop-list', 'shop-list')->name('shop.list');
Route::view('/shop-left-sidebar', 'product-left-sidebar')->name('shop.left.sidebar');



// Admin Login Routes
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login']);

// Admin Forgot Password Routes
Route::get('admin/forgot-password', [AdminAuthController::class, 'showForgotPasswordForm'])->name('admin.forgot.password');
Route::post('admin/forgot-password', [AdminAuthController::class, 'sendResetLink']);
Route::get('admin/reset-password/{token}', [AdminAuthController::class, 'showResetPasswordForm'])->name('admin.reset.password');
Route::post('admin/reset-password', [AdminAuthController::class, 'resetPassword']);

// Admin Dashboard Route
Route::middleware(['auth.admin'])->group(function () {
    Route::get('admin/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
});

// Miscellaneous routes
Route::view('/wishlist', 'wishlist')->name('wishlist');


require __DIR__ . '/auth.php';


Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
Route::get('admin/reset-password/{token}', [AdminAuthController::class, 'showResetPasswordForm'])->name('admin.reset.password');


// Route to show reset password form
Route::get('/admin/reset-password/{token}', [AdminAuthController::class, 'showResetPasswordForm'])->name('admin.reset.password.form');

// Route to handle password reset
Route::post('/admin/reset-password', [AdminAuthController::class, 'resetPassword'])->name('admin.reset.password');

Route::get('/my-account', function () {
    return view('my-account');
})->middleware('auth')->name('my-account');


Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{product}', [ShopController::class, 'show'])->name('shop.show');

Route::middleware(['auth', 'admin'])->group(function () {});




// routes/web.php
Route::prefix('admin')->group(function () {
    Route::get('products', [AdminProductController::class, 'index'])->name('admin.products.index');
    Route::get('products/create', [AdminProductController::class, 'create'])->name('admin.products.create');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
        Route::resource('products', AdminProductController::class);
    });
    // Add more routes as needed
});
Route::get('/product/{product}', [ShopController::class, 'show'])->name('products.show');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::middleware('auth')->group(function () {
    // Cart routes
    Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
    Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/remove/{product}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::post('/cart/remove/{product}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::delete('/cart/remove/{cartItemId}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::post('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');




    // Wishlist routes
    Route::get('/wishlist', [WishlistController::class, 'showWishlist'])->name('wishlist.show');
    Route::post('/wishlist/add/{product}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
    Route::post('/wishlist/remove/{product}', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');
    Route::post('/wishlist/add-to-cart/{product}', [WishlistController::class, 'addWishlistItemToCart'])->name('wishlist.addToCart');
    Route::get('/wishlist/count', [WishlistController::class, 'countWishlistItems']);
    Route::post('/wishlist/add-all-to-cart', [WishlistController::class, 'addAllToCart'])->name('wishlist.addAllToCart');
});


Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');


Route::middleware('auth')->group(function () {
    Route::resource('addresses', AddressController::class)->except(['show']);
});


Route::middleware(['auth'])->group(function () {
    Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::post('/checkout', [CartController::class, 'placeOrder'])->name('cart.placeOrder');

    Route::get('/my-account/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/my-account/orders/{order}', [OrderController::class, 'show'])->name('orders.show');


    // Admin routes
    Route::get('/admin/orders', [AdminOrderController::class, 'index'])->name('admin.orders.index');
    Route::post('/admin/orders/{order}/status', [AdminOrderController::class, 'updateStatus'])->name('admin.orders.updateStatus');
});
Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::get('/my-account', [CartController::class, 'myAccount'])->name('my-account');
Route::get('/orders/{order}', [OrderController::class, 'detailOrder'])->name('orders.detail');
Route::get('/cart/shipping-fee/{addressId}', [CartController::class, 'getShippingFeeAjax']);
