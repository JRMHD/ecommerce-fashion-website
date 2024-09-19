<?php

namespace App\Http\Controllers;

use App\Models\WishlistItem;
use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    // Show Wishlist Items
    public function showWishlist()
    {
        $wishlist = session()->get('wishlist', []);

        if (Auth::check()) {
            // Fetch wishlist items from the database for authenticated users
            $dbWishlist = WishlistItem::where('user_id', Auth::id())->with('product')->get();
            $wishlist = $dbWishlist->map(function ($item) {
                return [
                    'id' => $item->product->id,
                    'name' => $item->product->name,
                    'price' => $item->product->price,
                    'image' => $item->product->images->first()->url ?? 'default.jpg'
                ];
            });
        }

        // Count the number of wishlist items
        $wishlistCount = count($wishlist);

        return view('wishlist', compact('wishlist', 'wishlistCount'));
    }


    // Add to Wishlist
    public function addToWishlist(Product $product)
    {
        if (Auth::check()) {
            WishlistItem::updateOrCreate(
                ['user_id' => Auth::id(), 'product_id' => $product->id]
            );
        } else {
            $wishlist = session()->get('wishlist', []);
            $wishlist[$product->id] = [
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->images->first()->url ?? 'default.jpg',
            ];
            session()->put('wishlist', $wishlist);
        }

        return redirect()->back()->with('success', 'Product added to wishlist!');
    }

    // Remove from Wishlist
    public function removeFromWishlist(Product $product)
    {
        if (Auth::check()) {
            WishlistItem::where('user_id', Auth::id())->where('product_id', $product->id)->delete();
        } else {
            $wishlist = session()->get('wishlist', []);
            if (isset($wishlist[$product->id])) {
                unset($wishlist[$product->id]);
                session()->put('wishlist', $wishlist);
            }
        }

        return redirect()->back()->with('success', 'Product removed from wishlist!');
    }

    // Add Wishlist Item to Cart
    public function addWishlistItemToCart(Product $product)
    {
        if (Auth::check()) {
            // For logged-in users, add the product to the database cart
            CartItem::updateOrCreate(
                ['user_id' => Auth::id(), 'product_id' => $product->id],
                ['quantity' => DB::raw('quantity + 1')]
            );
        } else {
            // For guests, store the cart in session
            $cart = session()->get('cart', []);
            if (isset($cart[$product->id])) {
                $cart[$product->id]['quantity']++;
            } else {
                $cart[$product->id] = [
                    'name' => $product->name,
                    'quantity' => 1,
                    'price' => $product->price,
                    'image' => $product->images->first()->url ?? 'default.jpg',
                ];
            }
            session()->put('cart', $cart);
        }

        // Remove the item from the wishlist after adding to the cart
        $this->removeFromWishlist($product);

        return redirect()->back()->with('success', 'Product added to cart from wishlist!');
    }
}
