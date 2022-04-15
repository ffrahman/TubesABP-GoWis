<?php

namespace App\Http\Controllers;

use App\Models\PaketWisata;
use App\Http\Requests\StorePaketWisataRequest;
use App\Http\Requests\UpdatePaketWisataRequest;

class PaketWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paketwisatas = PaketWisata::all();
        return view('PaketWisata', compact('paketwisatas'));
    }
}