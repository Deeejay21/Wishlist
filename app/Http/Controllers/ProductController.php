<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        $products = Product::latest()->get();
        $wishlist = (auth()->user()) ? auth()->user()->wishlists->contains($product->id) : false;
        
        return view('products.index', compact('products', 'wishlist'));
    }

    public function store(Product $product)
    {
        auth()->user()->wishlists()->toggle($product->id);
    }
}
