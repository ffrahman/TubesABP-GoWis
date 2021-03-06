<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Http\Requests\StoreSewaRequest;
use App\Http\Requests\UpdateSewaRequest;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sewas = Sewa::latest()->get();
        return view('SewaKendaraan', compact('sewas'));
    }
}