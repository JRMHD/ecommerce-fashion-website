<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;

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
Route::view('/my-account', 'my-account')->name('my.account');
Route::view('/my-account-2', 'my-account-2')->name('my.account.2');
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

// Miscellaneous routes
Route::view('/wishlist', 'wishlist')->name('wishlist');


require __DIR__ . '/auth.php';


Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
