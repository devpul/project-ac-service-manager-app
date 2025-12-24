<?php

namespace App\Http\Controllers\GajiKaryawan;

use App\Models\GajiKaryawan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GajiKaryawanController extends Controller
{
    public function index()
    {   
        // $karyawan = Auth::user()->id;

        $gajis = GajiKaryawan::all();
        return view('GajiKaryawan.index', compact('gajis'));
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
