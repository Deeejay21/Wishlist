<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        
        return view('products.index', compact('products'));
    }

    public function store(Product $product)
    {
        auth()->user()->wishlists()->toggle($product->id);
    }
}
