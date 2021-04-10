<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class MainController extends Controller
{
    public function index()
    {

        $products = Product::all();
        return view('main.index', compact('products'));
    }

    public function store()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('main.store', compact('products', 'categories'));
    }

    public function contacts()
    {
        return view('main.contacts');
    }

    public function info()
    {
        return view('main.info');
    }

    public function getContacts(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'message' => 'required|min:3',
        ]);
       return back()->with('success', 'Thank!');
    }

}
