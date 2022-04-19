<?php

namespace App\Http\Controllers;

use App\Models\Berita;

use App\Http\Controllers\Controller;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('Berita', compact('beritas'));
    }

    public function show(Berita $news)
    {
        return view('news', [
            "berita" => $news
        ]);
    }
}