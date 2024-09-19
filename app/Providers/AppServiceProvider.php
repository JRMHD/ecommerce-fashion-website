<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\CartItem;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Share cart count with all views
        View::composer('*', function ($view) {
            $cartCount = 0;

            if (Auth::check()) {
                // Fetch cart count for logged-in users
                $cartCount = CartItem::where('user_id', Auth::id())->sum('quantity');
            } else {
                // Fetch cart count for guests from the session
                $cart = session()->get('cart', []);
                $cartCount = array_sum(array_column($cart, 'quantity'));
            }

            // Share the cart count variable with all views
            $view->with('cartCount', $cartCount);
        });
    }
}
