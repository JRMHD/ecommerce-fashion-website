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
        // Default wishlist from session (for guests)
        $wishlist = session()->get('wishlist', []);

        if (Auth::check()) {
            // Fetch wishlist items from the database for authenticated users
            $dbWishlist = WishlistItem::where('user_id', Auth::id())->with('product')->get();
            $wishlist = $dbWishlist->map(function ($item) {
                return [
                    'id' => $item->product->id,
                    'name' => $item->product->name,
                    'price' => $item->product->price,
                    'image' => $item->product->images->first()->url ?? 'default.jpg', // Product image
                    'in_stock' => $item->product->stock > 0, // Check if the product is in stock
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
            // For logged-in users, save the wishlist item to the database
            WishlistItem::updateOrCreate(
                ['user_id' => Auth::id(), 'product_id' => $product->id]
            );
        } else {
            // For guests, store the wishlist in session
            $wishlist = session()->get('wishlist', []);
            $wishlist[$product->id] = [
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->images->first()->url ?? 'default.jpg', // Product image
            ];
            session()->put('wishlist', $wishlist);
        }

        return redirect()->back()->with('success', 'Product added to wishlist!');
    }

    // Remove from Wishlist
    public function removeFromWishlist(Product $product)
    {
        if (Auth::check()) {
            // Remove wishlist item from database for logged-in users
            WishlistItem::where('user_id', Auth::id())->where('product_id', $product->id)->delete();
        } else {
            // For guests, remove the wishlist item from session
            $wishlist = session()->get('wishlist', []);
            if (isset($wishlist[$product->id])) {
                unset($wishlist[$product->id]);
                session()->put('wishlist', $wishlist);
            }
        }

        return redirect()->back()->with('success', 'Product removed from wishlist!');
    }

    // Add Wishlist Item to Cart
    public function addWishlistItemToCart(Request $request, Product $product)
    {
        $quantity = $request->input('quantity', 1); // Allow setting quantity, default is 1

        if (Auth::check()) {
            // For logged-in users, add the product to the database cart
            CartItem::updateOrCreate(
                ['user_id' => Auth::id(), 'product_id' => $product->id],
                ['quantity' => DB::raw("quantity + $quantity")] // Increment quantity in the cart
            );
        } else {
            // For guests, store the cart in session
            $cart = session()->get('cart', []);
            if (isset($cart[$product->id])) {
                // If the product already exists in the cart, increment the quantity
                $cart[$product->id]['quantity'] += $quantity;
            } else {
                // Add a new product to the session cart
                $cart[$product->id] = [
                    'name' => $product->name,
                    'quantity' => $quantity,
                    'price' => $product->price,
                    'image' => $product->images->first()->url ?? 'default.jpg', // Product image
                ];
            }
            session()->put('cart', $cart);
        }

        // Remove the item from the wishlist after adding to the cart
        $this->removeFromWishlist($product);

        return redirect()->back()->with('success', 'Product added to cart from wishlist!');
    }

    // Count Wishlist Items (optional feature for API or views)
    public function countWishlistItems()
    {
        $count = 0;

        if (Auth::check()) {
            $count = WishlistItem::where('user_id', Auth::id())->count();
        } else {
            $wishlist = session()->get('wishlist', []);
            $count = count($wishlist);
        }

        return response()->json(['count' => $count]);
    }
    public function addAllToCart()
    {
        if (Auth::check()) {
            // For logged-in users, fetch all wishlist items from the database
            $wishlistItems = WishlistItem::where('user_id', Auth::id())->with('product')->get();

            foreach ($wishlistItems as $item) {
                CartItem::updateOrCreate(
                    ['user_id' => Auth::id(), 'product_id' => $item->product->id],
                    ['quantity' => DB::raw('quantity + 1')] // Increment quantity in the cart
                );
            }

            // Optionally, clear the wishlist after adding to the cart
            WishlistItem::where('user_id', Auth::id())->delete();
        } else {
            // For guests, fetch the wishlist from the session
            $wishlist = session()->get('wishlist', []);

            foreach ($wishlist as $productId => $product) {
                $cart = session()->get('cart', []);
                if (isset($cart[$productId])) {
                    $cart[$productId]['quantity'] += 1; // Increment quantity in the cart
                } else {
                    $cart[$productId] = [
                        'name' => $product['name'],
                        'quantity' => 1,
                        'price' => $product['price'],
                        'image' => $product['image'],
                    ];
                }
                session()->put('cart', $cart);
            }

            // Optionally, clear the wishlist after adding to the cart
            session()->forget('wishlist');
        }

        return redirect()->back()->with('success', 'All wishlist items added to cart!');
    }
}
