<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function myAccount()
    {
        // Fetch orders for the logged-in user
        $orders = Order::where('user_id', Auth::id())->get();

        // Pass the orders to the view
        return view('my-account', compact('orders'));
    }

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
    public function checkout(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $cartItems = CartItem::with('product')->where('user_id', $user->id)->get();

            // Calculate total price
            $totalPrice = $cartItems->sum(function ($item) {
                return $item->product->price * $item->quantity;
            });

            // Fetch user addresses for selection during checkout
            $addresses = $user->addresses;

            return view('checkout', compact('cartItems', 'totalPrice', 'addresses'));
        } else {
            return redirect()->route('login')->with('info', 'Please log in to proceed with checkout.');
        }
    }

    public function placeOrder(Request $request)
    {
        $user = Auth::user();
        $cartItems = CartItem::with('product')->where('user_id', $user->id)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        // Validate selected address and payment method
        $request->validate([
            'address_id' => 'required|exists:addresses,id',
            'payment_method' => 'required|string|in:mpesa,paypal,card'
        ]);

        // Calculate total price
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        // Create the order
        $order = Order::create([
            'user_id' => $user->id,
            'address_id' => $request->address_id,
            'total_price' => $totalPrice,
            'payment_method' => $request->payment_method,
            'status' => 'pending'
        ]);

        // Create order items
        foreach ($cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->price,
            ]);
        }

        // Clear the cart
        CartItem::where('user_id', $user->id)->delete();

        return redirect()->route('my-account')->with('success', 'Order placed successfully!');
    }
}
