<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class StoreController extends Controller
{
    public function sale()
    {
        $title = 'Sale';
        // $products = Product::where('recommended', '=', 1)->where('price', '<', 200)->orWhere('category_id', '=', 35)->orderBy('name')->limit(5)->get();
        //$products = Product::where('recommended', '=', 1)->first();
        $products = Product::where('recommended', '=', 1)->paginate(5);
        //$products = Product::where('recommended', '=', 1)->simplePaginate(5);
        //dd($products);
        return view('store.sale', compact('title', 'products'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', '=', $slug)->firstOrFail(); // если равно то можно не писать
        $products = Product::where('category_id', '=', $category->id)->paginate(5);
        
        return view('store.category', compact('category', 'products'));
    }
}
