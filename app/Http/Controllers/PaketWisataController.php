<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Http\Controllers\Controller;
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
        $pakets = Paket::latest()->get();
        return view('PaketWisata', compact('pakets'));
    }
}