<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    //
     // Show news listing
    // public function index()
    // {
    //     $topPosts = News::latest()->take(4)->get(); // change to your top logic
    //     $recentPosts = News::latest()->skip(4)->take(8)->get(); // get recent ones after top 4
    //  return view('news-events.news', compact('topPosts', 'recentPosts'));

    // }

    // Show a single news post
   
      /**
     * Show news or events listing based on the route name.
     */
    public function index(Request $request)
    {
        // Check the name of the current route to determine which page to show.
        $routeName = $request->route()->getName();

        // If the route name is 'events.index', show the events page.
        if ($routeName === 'events.index') {
            // You can add different data fetching logic for events here if needed.
            // For now, it uses the same logic as the news page.
            $topPosts = News::latest()->take(4)->get();
            $recentPosts = News::latest()->skip(4)->take(8)->get();

            // Return the events view.
            return view('news-events.events', compact('topPosts', 'recentPosts'));
        }

        // If the route name is 'news.index', show the news page.
        // This is your original logic.
        $topPosts = News::latest()->take(4)->get(); // change to your top logic
        $recentPosts = News::latest()->skip(4)->take(8)->get(); // get recent ones after top 4
        
        // Return the news view.
        return view('news-events.news', compact('topPosts', 'recentPosts'));
    }

    /**
     * Show a single news post.
     */
    public function show($id)
    {
        $post = News::findOrFail($id);

        $recentPosts = News::latest()->where('id', '!=', $id)->take(4)->get();

        return view('news.show', compact('post', 'recentPosts'));
    }
    public function create()
{
    return view('news.create'); // We'll make this form next
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'excerpt' => 'nullable|string',
        'body' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $news = new News();
    $news->title = $request->title;
    $news->excerpt = $request->excerpt;
    $news->body = $request->body;

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('news', 'public');
        $news->image = $path;
    }

    $news->save();

    return redirect()->route('news.index')->with('success', 'News created successfully!');
}

}
