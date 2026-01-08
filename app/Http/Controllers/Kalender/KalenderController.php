<?php

namespace App\Http\Controllers\Kalender;

use App\Models\Kalender;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KalenderController extends Controller
{
    public function view()
    {
        return view('Kalender.index');
    }
    
    public function index()
    {
        $karyawans = Karyawan::get();

        return $karyawans->map(function($karyawan) {
            return [
                'title' =>  $karyawan->tugas_karyawan,
                'start' =>  $karyawan->jadwal_karyawan,
            ];
        });
    }
}
