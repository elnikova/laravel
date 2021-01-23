<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
}
