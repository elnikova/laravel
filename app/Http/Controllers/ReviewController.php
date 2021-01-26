<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function reviews(){
        $title = 'Review';
        $reviews = Review::orderBy('created_at', 'desc')->paginate(5);
        
        return view('main.reviews', compact('title', 'reviews'));
    }

    public function reviewForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'review' => 'required|min:3',
        ]);

        $review = new Review();
        $review->name = $request->name;
        $review->review = $request->review;
        $review->save();
      
       return back()->with('success', 'Thanks for your review!');
    }
    
}
