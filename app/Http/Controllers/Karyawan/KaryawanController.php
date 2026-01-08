<?php

namespace App\Http\Controllers\Karyawan;

use App\Models\Karyawan;
use App\Services\Employee\EmployeeImportExcel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class KaryawanController extends Controller
{
    public function import(Request $request)
    {   
        $request->validate([
            'file'  =>  'required|mimes:xlsx,xls|max:2048'
        ]);
    
        Excel::import(new EmployeeImportExcel, $request->file);

        return redirect()->route('karyawan.index')->with('success', 'Berhasil menambahkan data karyawan.');
    }

    public function index()
    {   
        $user = Auth::user()->role_id;
        
        if ($user !== 3) { // karyawan
            $karyawans = Karyawan::with('user')->get();
        } else {
            $karyawans = null;
        }
        
        return view('ManajemenUser.index', compact('karyawans'));
    }

    public function create()
    {   
        return view('ManajemenUser.import');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::with(['user'])->find($id);
        if (!$karyawan) return back()->with('error', 'Karyawan tidak ditemukan.');

        return view('ManajemenUser.edit', compact('karyawan'));
    }
}
