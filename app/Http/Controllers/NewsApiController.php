<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return response()->json([
            "success" => true,
            "data" => $news,
            "message" => "list berita",
            "data" => $news
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image',
        ]);

        $validatedData['image'] = $request->file('image')->store('foto-news');

        $validatedData['excerpt'] = Str::limit(strip_tags($request->content), 100);

        $news = News::create($validatedData);

        return response()->json([
            "success" => true,
            "message" => "Berita berhasil dibuat",
            "data" => $news
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        if (is_null($news)) {
            return response()->json([
                "data" => null
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "Berhasil tampil",
            'data' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image',
        ]);


        $news->update($validatedData);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $news->image = $request->file('image')->store('foto-news');
            $validatedData['excerpt'] = Str::limit(strip_tags($request->content), 100);
            $news->save();
        }
        return response()->json([
            "success" => true,
            "message" => "Berhasil update",
            'data' => $news
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        News::destroy($news->id);
        return response()->json([
            "success" => true,
            "message" => "Berhasil dihapus",
            'data' => $news
        ]);
    }
}
