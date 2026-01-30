<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ControllerProduct extends Controller
{
    public function getProducts()
    {
        $products = Product::all();
        return view("ProductsByCards", compact("products"));
    }

    public function showProd($id)
    {
        $product = Product::findOrFail($id);
        return view('showProduct', ['pro' => $product]);
    }
}
