<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ControllerProduct extends Controller
{
    public function getProductsVisiteurs()
    {
        $products = Product::all();
        return view("ProductsByCards", compact("products"));
    }

}
