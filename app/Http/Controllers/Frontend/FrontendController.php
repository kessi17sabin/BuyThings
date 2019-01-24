<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('frontend.body.index',compact('products','categories'));
    }
}
