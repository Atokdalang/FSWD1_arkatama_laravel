<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        return view('product.index', ['products' => $products]);
    }

    public function checkout()
    {
        $products = Product::all();

        return view('order.checkout', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $image1 = $request->file('image1');
        $image2 = $request->file('image2');

        $imagePath1 = null;
        $imagePath2 = null;

        if ($image1) {
            $imagePath1 = $image1->store('product', 'public');
        }

        if ($image2) {
            $imagePath2 = $image2->store('product', 'public');
        }

        $product = new Product();
        $product->category_id = $request->category;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image1 = $imagePath1;
        $product->image2 = $imagePath2;
        $product->save();

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
{
    $product = Product::findOrFail($id);
    $categories = Category::all();

    return view('product.edit', compact('product', 'categories'));
}

public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $product->category_id = $request->category;
    $product->name = $request->name;
    $product->price = $request->price;

    if ($request->hasFile('image1')) {
        // Hapus gambar lama jika ada
        if ($product->image1) {
            Storage::disk('public')->delete($product->image1);
        }

        $image1 = $request->file('image1');
        $imagePath1 = $image1->store('product', 'public');
        $product->image1 = $imagePath1;
    }

    if ($request->hasFile('image2')) {
        // Hapus gambar lama jika ada
        if ($product->image2) {
            Storage::disk('public')->delete($product->image2);
        }

        $image2 = $request->file('image2');
        $imagePath2 = $image2->store('product', 'public');
        $product->image2 = $imagePath2;
    }

    $product->save();

    return redirect()->route('product.index')->with('success', 'Product updated successfully.');
}

public function destroy($id)
{
    $product = Product::findOrFail($id);

    // Hapus gambar 1 jika ada
    if ($product->image1) {
        Storage::disk('public')->delete($product->image1);
    }

    // Hapus gambar 2 jika ada
    if ($product->image2) {
        Storage::disk('public')->delete($product->image2);
    }

    $product->delete();

    return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
}
}
