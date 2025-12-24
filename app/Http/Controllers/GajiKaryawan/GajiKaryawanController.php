<?php

namespace App\Http\Controllers\GajiKaryawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GajiKaryawanController extends Controller
{
    public function index()
    {
        return view('GajiKaryawan.index');
    }

    public function create()
    {
        return view('GajiKaryawan.create');
    }

    public function edit()
    {
        return view('GajiKaryawan.edit');
    }
    
}
