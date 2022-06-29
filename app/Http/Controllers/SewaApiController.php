<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SewaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sewas = Sewa::all();
        return response()->json([
            "success" => true,
            "data" => $sewas,
            "message" => "list sewa",
            "data" => $sewas
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
            'nama_kendaraan' => 'required|max:255',
            'harga' => 'required',
            'penumpang' => 'required',
            'image' => 'image',
        ]);

        $validatedData['image'] = $request->file('image')->store('foto-sewa');
        $sewas = Sewa::create($validatedData);
        return response()->json([
            "success" => true,
            "message" => "berhasil dibuat",
            "data" => $sewas
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sewas = Sewa::find($id);
        if (is_null($sewas)) {
            return response()->json([
                "data" => null
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "Berhasil tampil",
            'data' => $sewas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sewa $sewa)
    {
        $validatedData = $request->validate([
            'nama_kendaraan' => 'required|max:255',
            'harga' => 'required',
            'penumpang' => 'required',
            'image' => 'image',
        ]);

        $sewa->update($validatedData);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $sewa->image = $request->file('image')->store('foto-sewa');
            $sewa->save();
        }
        return response()->json([
            "success" => true,
            "message" => "Berhasil update",
            'data' => $sewa
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sewa $sewa)
    {
        Sewa::destroy($sewa->id);
        return response()->json([
            "success" => true,
            "message" => "Berhasil dihapus",
            'data' => $sewa
        ]);
    }
}