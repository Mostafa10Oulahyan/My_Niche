<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ControllerProduct extends Controller
{
    public function getProducts() {
        $products=Product::all();
        return view('productController',['prod'=>$products]);
    }
}
