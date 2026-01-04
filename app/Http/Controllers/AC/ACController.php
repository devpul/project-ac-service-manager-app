<?php

namespace App\Http\Controllers\AC;

use App\Models\AC;
use Services\ACImportExcel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ACController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file'  =>  'required|mimes:xlsx'
        ]);

        Excel::import(new ACImportExcel, $request->file);

        return redirect()->route('ac.index')->with('success', 'Berhasil menyimpan data ac');
    }

    public function update(Request $request, $id)
    {
        $ac = AC::find($id);

        $request->validate([
            'nama_barang'       =>  'sometimes',
            'satuan'            =>  'sometimes',
            'harga_satuan'      =>  'sometimes',
            'jumlah_harga'      =>  'sometimes',
            'lokasi'            =>  'sometimes',
        ]);

        $ac->update($request->all());

        return redirect()->route('ac.index')->with('success', 'Berhasil memperbarui data AC.');
    }

    public function destroy($id)
    {
        $ac = AC::find($id);

        $ac->delete();

        return back()->with('success', 'Berhasil menghapus data AC.');
    }

    public function index()
    {
        $acs = AC::get();
        return view('AC.index', compact('acs'));
    }

    public function create()
    {
        return view('AC.import');
    }

    public function edit($id)
    {
        $ac = AC::find($id);
        return view('AC.edit', compact('ac'));
    }
}
