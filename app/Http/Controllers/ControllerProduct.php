<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ControllerProduct extends Controller
{
    public function getProducts() {
        // $products=Product::all();
        $products=Product::paginate(10);
        return view('productController',['prod'=>$products]);
    }
}
