<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function reviews(){
        $title = 'Review';
        $reviews = Review::all();
        return view('main.reviews', compact('title', 'reviews'));
    }

    public function reviewForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'review' => 'required|min:3',
        ]);

       //dd($request->all());
       //отправляем письмо
       //return redirect('/contacts')->with('success', 'Thank!');
       return back()->with('success', 'Thanks for your review!');
    }
    
}
