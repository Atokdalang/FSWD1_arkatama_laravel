<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // mengambil 8 data produk secara acak
        $product = Product::inRandomOrder(8)->get();

        // mengambil data category
        $category = Category::all();

        // mengambil data slider
        $slider = Slider::all();

        return view('landing', compact('product', 'category', 'slider'));
    }

    public function contact()
    {
        // Logika Anda untuk laman contact pada landing page
        $data = [];

        return view('landing.contact', $data);
    }

    public function testimonial()
    {
        // Logika Anda untuk laman testimonial pada landing page
        $data = [];

        return view('landing.testimonial', $data);
    }

    public function bird()
    {
        // Logika Anda untuk laman our bird gadget store pada landing page
        $data = [];

        return view('landing.bird', $data);
    }

    public function about()
    {
        // Logika Anda untuk laman about pada landing page
        $data = [];

        return view('landing.about', $data);
    }
}
