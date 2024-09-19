<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Method to show the cart page
    public function showCart()
    {
        if (Auth::check()) {
            // Fetch the cart for logged-in user from the database
            $cartItems = CartItem::with('product')
                ->where('user_id', Auth::id())
                ->get();
        } else {
            // Fetch the cart for guests from the session
            $cartItems = session()->get('cart', []);
        }

        // Calculate total price of the cart items
        $total = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        return view('cart', compact('cartItems', 'total'));
    }

    // Function to add a product to the cart
    public function addToCart(Product $product)
    {
        if (Auth::check()) {
            // For logged-in users, add or update the product in the database cart
            $cartItem = CartItem::where('user_id', Auth::id())
                ->where('product_id', $product->id)
                ->first();

            if ($cartItem) {
                $cartItem->increment('quantity'); // Increase quantity by 1
            } else {
                CartItem::create([
                    'user_id' => Auth::id(),
                    'product_id' => $product->id,
                    'quantity' => 1,
                ]);
            }
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

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    // Function to remove a product from the cart
    public function removeFromCart($cartItemId)
    {
        if (Auth::check()) {
            // For logged-in users, remove the product from the database cart using the cart item ID
            CartItem::where('id', $cartItemId)
                ->where('user_id', Auth::id())
                ->delete();
        } else {
            // For guests, remove the product from the session cart
            $cart = session()->get('cart', []);
            if (isset($cart[$cartItemId])) {
                unset($cart[$cartItemId]);
                session()->put('cart', $cart);
            }
        }

        return redirect()->back()->with('success', 'Product removed from cart!');
    }

    // Function to update cart item quantities (increment/decrement)
    public function updateCart(Request $request, $cartItemId)
    {
        $action = $request->input('action'); // Can be 'increment' or 'decrement'

        if (Auth::check()) {
            // For logged-in users, update the cart in the database
            $cartItem = CartItem::where('id', $cartItemId)
                ->where('user_id', Auth::id())
                ->first();

            if ($cartItem) {
                if ($action == 'increment') {
                    $cartItem->increment('quantity');
                } elseif ($action == 'decrement' && $cartItem->quantity > 1) {
                    $cartItem->decrement('quantity');
                }
                $cartItem->save();
            }
        } else {
            // For guests, update the session cart
            $cart = session()->get('cart', []);
            if (isset($cart[$cartItemId])) {
                if ($action == 'increment') {
                    $cart[$cartItemId]['quantity']++;
                } elseif ($action == 'decrement' && $cart[$cartItemId]['quantity'] > 1) {
                    $cart[$cartItemId]['quantity']--;
                }
                session()->put('cart', $cart);
            }
        }

        return redirect()->back()->with('success', 'Cart updated!');
    }

    // Function to clear the entire cart
    public function clearCart()
    {
        if (Auth::check()) {
            // For logged-in users, clear the entire database cart
            CartItem::where('user_id', Auth::id())->delete();
        } else {
            // For guests, clear the session cart
            session()->forget('cart');
        }

        return redirect()->back()->with('success', 'Cart cleared!');
    }

    // Function to handle checkout process
    public function checkout()
    {
        if (Auth::check()) {
            // For logged-in users, you might want to show a checkout page or process payment
            // Fetch user details, etc.
        } else {
            // For guests, redirect to login or guest checkout page
            return redirect()->route('login')->with('info', 'Please log in to proceed with checkout.');
        }

        return view('checkout');
    }
}
