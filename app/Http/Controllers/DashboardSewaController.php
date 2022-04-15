<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardSewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.Sewa.index', [
            'sewas' => Sewa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.Sewa.create');
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
            'nama_kendaraan' => 'required|unique:sewas|max:255',
            'harga' => 'required',
            'penumpang' => 'required',
            'image' => 'required|image',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('sewa-images');
        }
        Sewa::create($validatedData);

        return redirect('/dashboard/sewa')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function show(Sewa $sewa)
    {
        return view('Dashboard.Sewa.show', [
            'sewa' => $sewa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function edit(Sewa $sewa)
    {
        return view('Dashboard.Sewa.edit', [
            'sewa' => $sewa
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
            'nama_kendaraan' => 'required|unique:sewas|max:255',
            'harga' => 'required',
            'penumpang' => 'required',
            'gambar' => 'required',
        ]);

        $sewa->update($validatedData);

        return redirect('/dashboard/sewa')->with('success', 'Data berhasil diubah');
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
        return redirect('/dashboard/sewa')->with('success', 'Data berhasil dihapus');
    }
}