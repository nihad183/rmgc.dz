<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('published_at', 'desc')
                    ->paginate(15); // 5 سطور × 3 بطاقات

        return view('actualites', compact('news'));
    }
public function show($slug)
{
    $newsItem = News::where('slug', $slug)->firstOrFail();
    return view('show', compact('newsItem')); // ✅ بدون 'news.'
}

}
