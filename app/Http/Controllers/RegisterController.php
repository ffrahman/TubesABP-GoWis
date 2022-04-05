<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class RegisterController extends Controller
{
    public function index()
    {
        return view('login.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'username' => 'required|max:50|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        dd($request->all());
    }
}