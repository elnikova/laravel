<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Permission;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;

class MainController extends Controller
{
    public function index()
    {
        $title = 'Welcome';
        $subtitle = '<em>to store</em>';
        $products = Product::with('category')->latest()->get();//название метода в моделе
    
        return view('main.index', compact('title', 'products', 'subtitle', 'products'));
    }

    public function contacts()
    {
        return view('main.contacts');
    }

    public function getContacts(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'message' => 'required|min:3',
        ]);

       //dd($request->all());
       //отправляем письмо
       //return redirect('/contacts')->with('success', 'Thank!');
       return back()->with('success', 'Thank!');
    }

}
