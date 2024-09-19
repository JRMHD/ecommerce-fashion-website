<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\WishlistItem;

class WishlistCountMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $wishlistCount = 0;

        if (Auth::check()) {
            // For logged-in users, count the wishlist items from the database
            $wishlistCount = WishlistItem::where('user_id', Auth::id())->count();
        } else {
            // For guests, count the wishlist items from the session
            $wishlist = session()->get('wishlist', []);
            $wishlistCount = count($wishlist);
        }

        // Share the wishlist count with all views
        view()->share('wishlistCount', $wishlistCount);

        return $next($request);
    }
}
