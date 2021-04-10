<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;


class StoreController extends Controller
{
    public function store()
    {
        $category = Category::all();
        $products = Product::all();
        view('main.store', compact('category', 'products'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', '=', $slug)->firstOrFail();
        $products = Product::where('category_id', '=', $category->id)->paginate(6);
        
        return view('store.category', compact('category', 'products'));
    }

    public function product(Product $product)
    {
        return view('store.product', compact('product'));
    }



    
        


}
