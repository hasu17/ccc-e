<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    //
     // Show news listing
    public function index()
    {
        $topPosts = News::latest()->take(4)->get(); // change to your top logic
        $recentPosts = News::latest()->skip(4)->take(8)->get(); // get recent ones after top 4
return view('news-events.news', compact('topPosts', 'recentPosts'));

    }

    // Show a single news post
    public function show($id)
    {
        $post = News::findOrFail($id);

        return view('news.show', compact('post'));
    }
}
