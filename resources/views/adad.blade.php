<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function rules()
    {
        return [
            'nama_produk' => 'required|min:3',
            'harga' => 'required|numeric|min:0',
        ];
    }

public function store(Request $request)
{
    $validator = Validator::make($request->all(), $this->rules());

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Logika untuk menyimpan data produk
}

public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(), $this->rules());

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Logika untuk memperbarui data produk dengan ID tertentu
}
}
