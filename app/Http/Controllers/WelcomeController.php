<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class WelcomeController extends Controller
{
    public function index()
    {
        $news = News::latest()->take(3)->get();
        return view('welcome', compact('news'));
    }
}