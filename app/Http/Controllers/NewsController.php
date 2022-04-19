<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        return view('Berita', compact('news'));
    }

    public function show(News $news)
    {
        return view('show', [
            "news" => $news
        ]);
    }
}







// public function index()
//     {
//         $beritas = Berita::latest()->get();
//         return view('Berita', compact('beritas'));
//     }

//     public function show(Berita $news)
//     {
//         return view('news', [
//             "berita" => $news
//         ]);
//     }