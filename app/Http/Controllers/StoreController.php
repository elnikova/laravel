<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Review;

class StoreController extends Controller
{
    public function store()
    {
        $category = Category::all(); // если равно то можно не писать
        $products = Product::all();
        view('main.store', compact('category', 'products'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', '=', $slug)->firstOrFail(); // если равно то можно не писать
        $products = Product::where('category_id', '=', $category->id)->paginate(6);
        
        return view('store.category', compact('category', 'products'));
    }

    public function product(Product $product)
    {
        return view('store.product', compact('product'));
    }



    
        


}
