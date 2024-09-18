<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        // Fetch the products with images, sorted by latest, and paginated by 8 per page
        $products = Product::with('images')->latest()->paginate(8); // Set to paginate with 8 products per page

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'category' => 'required',
            'sizes' => 'nullable',
            'colors' => 'nullable',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $product = Product::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'category' => $validatedData['category'],
            'sizes' => explode(',', $validatedData['sizes']),
            'colors' => explode(',', $validatedData['colors']),
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                $product->images()->create(['url' => $path]);
            }
        }

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'category' => 'required',
            'sizes' => 'nullable',
            'colors' => 'nullable',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $product->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'category' => $validatedData['category'],
            'sizes' => explode(',', $validatedData['sizes']),
            'colors' => explode(',', $validatedData['colors']),
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                $product->images()->create(['url' => $path]);
            }
        }

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        foreach ($product->images as $image) {
            Storage::disk('public')->delete($image->url);
            $image->delete();
        }
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully');
    }
}
