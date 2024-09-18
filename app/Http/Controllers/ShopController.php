<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->latest()->paginate(16);
        return view('shop', compact('products'));
    }

    public function show(Product $product)
    {
        // Fetch other products excluding the current one
        $otherProducts = Product::where('id', '!=', $product->id)
            ->with('images')
            ->latest()
            ->take(4) // Show a few other products, adjust as needed
            ->get();

        return view('product-details', compact('product', 'otherProducts'));
    }
}
