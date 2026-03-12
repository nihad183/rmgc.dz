<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\News;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $latestNews = News::latest()->take(2)->get(); 

        // قراءة Cookie
        $acceptCookies = Cookie::get('accept_cookies');

        return view('index', compact('latestNews', 'acceptCookies'));
    }
}