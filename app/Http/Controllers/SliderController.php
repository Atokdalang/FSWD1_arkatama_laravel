<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
{
    $sliders = Slider::with('slider')->get();

    return view('slider.index', compact('sliders'));
}

public function create()
{
    $slider = Slider::all();

    return view('slider.create', compact('slider'));
}

public function store(Request $request)
{
    $image = $request->file('image'); // Ambil file gambar dari permintaan

    if ($image) {
        // Simpan file gambar dalam folder "slider" dengan nama yang unik
        $imagePath = $image->store('slider', 'public');
    } else {
        $imagePath = null;
    }

    $slider = Slider::create([
        'title' => $request->title,
        'caption' => $request->caption ?? '', // Berikan nilai default kosong jika tidak ada nilai caption yang diterima
        'image' => $imagePath,
    ]);

    return redirect()->route('slider.index');
}



public function edit($id)
{
    $slider = Slider::findOrFail($id);
    $sliders = Slider::all();

    return view('slider.edit', compact('slider'));
}

public function update(Request $request, $id)
{
    $slider = Slider::findOrFail($id);
    $currentImagePath = $slider->image;

    $slider->title = $request->input('title');
    $slider->caption = $request->input('caption');

    if ($request->hasFile('image')) {
        // Delete the previous image file
        Storage::disk('public')->delete($currentImagePath);

        // Upload the new image file
        $image = $request->file('image');
        $imagePath = $image->store('slider', 'public');
        $slider->image = $imagePath;
    }

    $slider->save();

    return redirect()->route('slider.index');
}

public function destroy($id)
{
    $slider = Slider::findOrFail($id);

    // Delete the image file from storage
    Storage::disk('public')->delete($slider->image);

    $slider->delete();

    return redirect()->route('slider.index');
}

}
