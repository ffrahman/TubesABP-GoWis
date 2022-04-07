<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::latest()->paginate(5);
        return view('berita', compact('beritas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required',
            'judul' => 'required',
            'isi' => 'required',
        ]);

        Berita::create($request->all());

        return redirect()->route('admin.berita.index')
            ->with('success', 'created successfully.');
    }

    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('edit', compact('berita'));
    }
}