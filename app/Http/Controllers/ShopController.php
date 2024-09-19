<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        // Get search query, category, and price filters from request
        $query = $request->input('query');
        $category = $request->input('category');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        // Start query builder
        $productsQuery = Product::with('images')->latest();

        // Filter by category if provided
        if ($category) {
            $productsQuery->where('category', $category);
        }

        // Filter by search keywords if provided
        if ($query) {
            $productsQuery->where('name', 'like', '%' . $query . '%')
                ->orWhere('description', 'like', '%' . $query . '%');
        }

        // Filter by price range if provided
        if ($minPrice) {
            $productsQuery->where('price', '>=', $minPrice);
        }
        if ($maxPrice) {
            $productsQuery->where('price', '<=', $maxPrice);
        }

        // Paginate the results
        $products = $productsQuery->paginate(16);

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
