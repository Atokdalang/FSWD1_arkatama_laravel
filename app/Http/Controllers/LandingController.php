<?php

namespace App\Http\Controllers;


use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class LandingController extends Controller
{
    public function index()
{
    // mengambil 8 data produk secara acak
    $product = Product::inRandomOrder(8)->get();

    // mengambil data category
    $category = Category::all();

    // mengambil data slider
    $sliders = Slider::with('slider')->get();

    return view('landing', compact('product', 'category', 'sliders'));
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

    public function subscribe(Request $request)
    {
        $email = $request->input('email');

        // Lakukan pengolahan formulir, misalnya menyimpan email ke database atau mengirim email ke pelanggan

        // Tampilkan notifikasi terima kasih
        session()->flash('Berhasil', 'Terima kasih telah mendukung website Bird Gadget Store. Kami akan mengirimkan informasi terbaru melalui email Anda.');

        return redirect()->back();
    }

    public function sendContactForm(Request $request)
{
    // Validasi input
    $request->validate([
        'name' => 'required',
        'phone_number' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    // Kirim email ke admin atau tim support
    Mail::to('Arkatama.Laravel1@gmail.com')->send(new ContactFormSubmitted($request->all()));

    // Set session flash untuk notifikasi terima kasih
    session()->flash('sukses', 'Terima kasih telah menghubungi kami. Kami akan segera merespon pertanyaan Anda.');

   return redirect()->back();
}

}
