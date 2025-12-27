<?php

namespace App\Http\Controllers\GajiKaryawan;

use App\Models\GajiKaryawan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class GajiKaryawanController extends Controller
{
    public function store(Request $request)
    {
        $userId = Auth::user()->id;

        $jumlah_pendapatan = $request->gaji_pokok + $request->tunjangan_jabatan + $request->tunjangan_daerah + $request->tunjangan_pph;
        $jumlah_potongan   = $request->iuran_dana_pensiun + $request->potongan_pph;
        $gaji_bersih_diterima = $jumlah_pendapatan - $jumlah_potongan;

        GajiKaryawan::create([
            'user_id'               =>  $userId,

            // pendapatan
            'gaji_pokok'            =>  $request->gaji_pokok,
            'tunjangan_jabatan'     =>  $request->tunjangan_jabatan,
            'tunjangan_daerah'      =>  $request->tunjangan_daerah,
            'tunjangan_pph'         =>  $request->tunjangan_pph,
            
            // potongan
            'iuran_dana_pensiun'    =>  $request->iuran_dana_pensiun,
            'potongan_pph'          =>  $request->potongan_pph,

            'jumlah_pendapatan'     =>  $jumlah_pendapatan,
            'jumlah_potongan'       =>  $jumlah_potongan,
            'gaji_bersih_diterima'  =>  $gaji_bersih_diterima
        ]);

        return redirect()->route('gaji.index')->with('success', 'Berhasil menyimpan gaji karyawan.');
    }

    public function index()
    {   
        $userId = Auth::user()->id;

        $gajis = GajiKaryawan::where('user_id', $userId)->get();

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
