<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function news(){
        $title = 'News';
        $news = News::orderBy('created_at', 'desc')->paginate(10);
        //dd($news);
        return view('main.news', compact('title', 'news'));
    }

    public function show(Request $request)
    {
        //var_dump($request);
        
        return view('main.show');
    }

}
