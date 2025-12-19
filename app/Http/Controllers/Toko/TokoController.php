<?php

namespace App\Http\Controllers\Toko;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index()
    {
        return view('Toko.index');
    }
    
    public function create()
    {
        return view('Toko.create');
    }

    public function edit()
    {
        return view('Toko.edit');
    }
}
