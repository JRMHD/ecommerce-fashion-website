<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class CartController extends Controller
{
    public function myAccount()
    {
        $orders = Order::where('user_id', Auth::id())->get();
        return view('my-account', compact('orders'));
    }

    public function showCart()
    {
        if (Auth::check()) {
            $cartItems = CartItem::with('product')->where('user_id', Auth::id())->get();
        } else {
            $cartItems = session()->get('cart', []);
        }

        $total = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        return view('cart', compact('cartItems', 'total'));
    }

    public function addToCart(Product $product)
    {
        if (Auth::check()) {
            $cartItem = CartItem::where('user_id', Auth::id())->where('product_id', $product->id)->first();

            if ($cartItem) {
                $cartItem->increment('quantity');
            } else {
                CartItem::create([
                    'user_id' => Auth::id(),
                    'product_id' => $product->id,
                    'quantity' => 1,
                ]);
            }
        } else {
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

    public function removeFromCart($cartItemId)
    {
        if (Auth::check()) {
            CartItem::where('id', $cartItemId)->where('user_id', Auth::id())->delete();
        } else {
            $cart = session()->get('cart', []);
            if (isset($cart[$cartItemId])) {
                unset($cart[$cartItemId]);
                session()->put('cart', $cart);
            }
        }

        return redirect()->back()->with('success', 'Product removed from cart!');
    }

    public function updateCart(Request $request, $cartItemId)
    {
        $action = $request->input('action');

        if (Auth::check()) {
            $cartItem = CartItem::where('id', $cartItemId)->where('user_id', Auth::id())->first();

            if ($cartItem) {
                if ($action == 'increment') {
                    $cartItem->increment('quantity');
                } elseif ($action == 'decrement' && $cartItem->quantity > 1) {
                    $cartItem->decrement('quantity');
                }
                $cartItem->save();
            }
        } else {
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

    public function clearCart()
    {
        if (Auth::check()) {
            CartItem::where('user_id', Auth::id())->delete();
        } else {
            session()->forget('cart');
        }

        return redirect()->back()->with('success', 'Cart cleared!');
    }

    public function checkout(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $cartItems = CartItem::with('product')->where('user_id', $user->id)->get();
            $subtotal = $cartItems->sum(function ($item) {
                return $item->product->price * $item->quantity;
            });
            $addresses = $user->addresses;

            // Determine shipping fee based on the selected address
            $shippingFee = $this->getShippingFee($addresses->first());

            $totalPrice = $subtotal + ($shippingFee ?? 0);

            return view('checkout', compact('cartItems', 'subtotal', 'shippingFee', 'totalPrice', 'addresses'));
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

        $request->validate([
            'address_id' => 'required|exists:addresses,id',
            'payment_method' => 'required|string|in:mpesa,paypal,card'
        ]);

        $address = Address::find($request->address_id);
        $shippingFee = $this->getShippingFee($address);

        if ($shippingFee === null) {
            return redirect()->route('whatsapp.contact')->with('info', 'For shipping to your location, please contact us via WhatsApp.');
        }

        $subtotal = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        $totalPrice = $subtotal + $shippingFee;

        $order = Order::create([
            'user_id' => $user->id,
            'address_id' => $request->address_id,
            'subtotal' => $subtotal,
            'shipping_fee' => $shippingFee,
            'total_price' => $totalPrice,
            'payment_method' => $request->payment_method,
            'status' => 'pending'
        ]);

        foreach ($cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->price,
            ]);
        }

        CartItem::where('user_id', $user->id)->delete();

        // Send SMS alert
        $this->sendOrderNotification($order, $user, $cartItems);

        return redirect()->route('my-account')->with('success', 'Order placed successfully!');
    }

    private function getShippingFee($address)
    {
        if (strtolower($address->city) === 'nairobi') {
            return 350;
        } elseif (strtolower($address->country) === 'kenya') {
            return 450;
        }

        return null; // For addresses outside Kenya
    }

    private function sendOrderNotification($order, $user, $cartItems)
    {
        $productNames = $cartItems->pluck('product.name')->implode(', ');
        $message = "Hello Mike,\nNew order placed by {$user->name}!\nOrder ID: {$order->id}\nProducts: {$productNames}\nTotal Amount Paid: KSh {$order->total_price}\n\nThank You for Your Patronage,\nOga Clothing Africa";
        $phoneNumbers = ['0706378245', '0735494584', '0793977600'];

        foreach ($phoneNumbers as $phoneNumber) {
            $this->sendSMS($phoneNumber, $message);
        }
    }

    private function sendSMS($phoneNumber, $message)
    {
        $appKey = env('SMS_APP_KEY');
        $appToken = env('SMS_APP_TOKEN');
        $apiUrl = 'https://sms.textsms.co.ke/api/services/sendsms/';
        $shortcode = 'TextSMS';

        try {
            $response = Http::post($apiUrl, [
                'apikey' => $appKey,
                'partnerID' => $appToken,
                'message' => $message,
                'shortcode' => $shortcode,
                'mobile' => $phoneNumber,
            ]);

            if ($response->failed()) {
                Log::error('Failed to send SMS', [
                    'phone_number' => $phoneNumber,
                    'error' => $response->body(),
                ]);
            }
        } catch (\Exception $e) {
            Log::error('Exception occurred while sending SMS', [
                'phone_number' => $phoneNumber,
                'error' => $e->getMessage(),
            ]);
        }
    }


    public function getShippingFeeAjax($addressId)
    {
        $user = Auth::user();
        $address = Address::findOrFail($addressId);

        $cartItems = CartItem::with('product')->where('user_id', $user->id)->get();
        $subtotal = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        // Get shipping fee for the selected address
        $shippingFee = $this->getShippingFee($address);
        $totalPrice = $subtotal + ($shippingFee ?? 0);

        return response()->json([
            'shippingFee' => $shippingFee,
            'totalPrice' => $totalPrice,
        ]);
    }
}
