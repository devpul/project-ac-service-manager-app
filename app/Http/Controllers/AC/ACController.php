<?php

namespace App\Http\Controllers\AC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ACController extends Controller
{
    public function index()
    {
        return view('AC.index');
    }

    public function create()
    {
        return view('AC.create');
    }

    public function edit()
    {
        return view('AC.edit');
    }
}
