<?php

namespace App\Http\Controllers\Karyawan;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class KaryawanController extends Controller
{
    public function index()
    {   
        $user = Auth::user()->role_id;
        
        if ($user !== 3) {
            $karyawans = Karyawan::get();
        } else {
            $karyawans = null;
        }
        
        return view('ManajemenUser.index', compact('karyawans'));
    }

    public function create()
    {   
        return view('ManajemenUser.import');
    }
}
