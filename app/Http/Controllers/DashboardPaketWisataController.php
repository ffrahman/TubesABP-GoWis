<?php

namespace App\Http\Controllers;

use App\Models\PaketWisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardPaketWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.PaketWisata.index', [
            'paketwisatas' => PaketWisata::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaketWisata  $paketWisata
     * @return \Illuminate\Http\Response
     */
    public function show(PaketWisata $paketWisata)
    {

        return $paketWisata;
        return view('Dashboard.PaketWisata.show', [
            'paket' => $paketWisata
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaketWisata  $paketWisata
     * @return \Illuminate\Http\Response
     */
    public function edit(PaketWisata $paketWisata)
    {
        return view('Dashboard.PaketWisata.edit', [
            'paket' => $paketWisata
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaketWisata  $paketWisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaketWisata $paketWisata)
    {
        $validatedData = $request->validate([
            'nama_paket' => 'required|unique:paketwisatas|max:255',
            'harga' => 'required',
            'penumpang' => 'required',
            'image' => 'required|image',
        ]);

        $paketWisata->update($validatedData);

        return redirect('/dashboard/paketWisata')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaketWisata  $paketWisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaketWisata $paketWisata)
    {
        PaketWisata::destroy($paketWisata->id);
        return redirect('/dashboard/paketWisata')->with('success', 'Data berhasil dihapus');
    }
}