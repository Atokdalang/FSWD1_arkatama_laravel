<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DetailController extends Controller
{
    public function index()
    {
        $details = Detail::with('category')->get();
        return view('detail.index', compact('details'));
    }

    public function detail()
    {
        $details = Detail::with('category')->get();
        return view('order.detail', compact('details'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('detail.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
        $image3 = $request->file('image3');

        $imagePath1 = null;
        $imagePath2 = null;
        $imagePath3 = null;

        if ($image1) {
            $imagePath1 = $image1->store('detail', 'public');
        }

        if ($image2) {
            $imagePath2 = $image2->store('detail', 'public');
        }

        if ($image3) {
            $imagePath3 = $image3->store('detail', 'public');
        }

        $detail = new Detail();
        $detail->category_id = $request->category;
        $detail->name = $request->name;
        $detail->price = $request->price;
        $detail->description = $request->description;
        $detail->image1 = $imagePath1;
        $detail->image2 = $imagePath2;
        $detail->image3 = $imagePath3;
        $detail->save();

        return redirect()->route('detail.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
{
    $detail = Detail::findOrFail($id);
    $categories = Category::all();

    return view('detail.edit', compact('detail', 'categories'));
}

public function update(Request $request, $id)
{
    $detail = Detail::findOrFail($id);

    $detail->category_id = $request->category;
    $detail->name = $request->name;
    $detail->price = $request->price;
    $detail->description = $request->description;

    if ($request->hasFile('image1')) {
        // Hapus gambar lama jika ada
        if ($detail->image1) {
            Storage::disk('public')->delete($detail->image1);
        }

        $image1 = $request->file('image1');
        $imagePath1 = $image1->store('detail', 'public');
        $detail->image1 = $imagePath1;
    }

    if ($request->hasFile('image2')) {
        // Hapus gambar lama jika ada
        if ($detail->image2) {
            Storage::disk('public')->delete($detail->image2);
        }

        $image2 = $request->file('image2');
        $imagePath2 = $image2->store('detail', 'public');
        $detail->image2 = $imagePath2;
    }

    if ($request->hasFile('image3')) {
        // Hapus gambar lama jika ada
        if ($detail->image3) {
            Storage::disk('public')->delete($detail->image3);
        }

        $image3 = $request->file('image3');
        $imagePath3 = $image3->store('detail', 'public');
        $detail->image3 = $imagePath3;
    }

    $detail->save();

    return redirect()->route('detail.index')->with('success', 'Product updated successfully.');
}

public function destroy($id)
{
    $detail = Detail::findOrFail($id);

    // Hapus gambar 1 jika ada
    if ($detail->image1) {
        Storage::disk('public')->delete($detail->image1);
    }

    // Hapus gambar 2 jika ada
    if ($detail->image2) {
        Storage::disk('public')->delete($detail->image2);
    }

    if ($detail->image3) {
        Storage::disk('public')->delete($detail->image3);
    }

    $detail->delete();

    return redirect()->route('detail.index')->with('success', 'Product deleted successfully.');
}

public function showByCategory($category)
{
    $details = Detail::whereHas('category', function ($query) use ($category) {
        $query->where('name', $category);
    })->get();

    return view('order.detail', compact('details'));
}

}

