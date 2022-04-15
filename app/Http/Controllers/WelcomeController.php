<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Berita;


class WelcomeController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->take(3)->get();
        return view('welcome', compact('beritas'));
    }
}