<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PaketApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakets = Paket::all();
        return response()->json([
            "success" => true,
            "data" => $pakets,
            "message" => "list paket",
            "data" => $pakets
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
            'nama' => 'required|max:255',
            'harga' => 'required',
            'durasi' => 'required',
            'image' => 'image',
            'deskripsi' => 'required',
        ]);

        $validatedData['image'] = $request->file('image')->store('foto-paket');

        $pakets = Paket::create($validatedData);

        return response()->json([
            "success" => true,
            "message" => "Paket berhasil dibuat",
            "data" => $pakets
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pakets = Paket::find($id);
        if (is_null($pakets)) {
            return response()->json([
                "data" => null
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "Paket berhasil tampil",
            "data" => $pakets
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paket $pakets)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required',
            'durasi' => 'required',
            'image' => 'image',
            'deskripsi' => 'required',
        ]);

        $pakets->update($validatedData);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $pakets->image = $request->file('image')->store('foto-paket');
            $pakets->save();
        }
        return response()->json([
            "success" => true,
            "message" => "Paket berhasil update",
            "data" => $pakets
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket $paket)
    {
        Paket::destroy($paket->id);
        return response()->json([
            "success" => true,
            "message" => "Paket berhasil dihapus",
            "data" => $paket
        ]);
    }
}