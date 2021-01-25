<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function news(){
        $title = 'News';
        $news = News::where('id', '>', 0)->paginate(10);
        //dd($news);
        return view('main.news', compact('title', 'news'));
    }
}
