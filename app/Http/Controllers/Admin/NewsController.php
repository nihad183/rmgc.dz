<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('rmgc-secret-dashboard.news.index', compact('news'));
    }

    public function create()
    {
        return view('rmgc-secret-dashboard.news.create');
    }

   public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'image' => 'nullable|image',
        'published_at' => 'required|date',
        'summary' => 'nullable|string',
        'subtext' => 'nullable|string',
        'centertext' => 'nullable|string',
        'gallery.*' => 'nullable|image',
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('news', 'public');
    }

    $slug = Str::slug($data['title']);
    $originalSlug = $slug;
    $counter = 1;

    while (News::where('slug', $slug)->exists()) {
        $slug = $originalSlug . '-' . $counter;
        $counter++;
    }
    $data['slug'] = $slug;

    
    $news = News::create($data);

    
    if ($request->hasFile('gallery')) {
        $galleryPaths = [];
        foreach ($request->file('gallery') as $file) {
            $galleryPaths[] = $file->store('news/gallery', 'public');
        }
        $news->gallery = $galleryPaths;
        $news->save();
    }

    return redirect()->route('admin.news.index')->with('success', 'تم نشر الخبر بنجاح');
}

}
