<?php

namespace App\Http\Controllers\MaterialService;

use Illuminate\Http\Request;
use App\Models\MaterialService;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Services\MaterialServiceImportExcel;

class MaterialServiceController extends Controller
{

    public function store(Request $request){
        $request->validate([
            'file'  =>  'required|file|mimes:xlsx'
        ]);

        Excel::import(new MaterialServiceImportExcel, $request->file);
    }

    public function update(Request $request, $id) {

        $request->validate([
            'nama_barang'   =>  'required',
            'nama_toko'   =>  'required',
            'jumlah_barang'   =>  'required',
            'nama_pic'   =>  'required',
            'pic_telepon'   =>  'required',
            'jadwal_visit'   =>  'required',
        ]);

        $material_service = MaterialService::find($id);

        $material_service->update($request->all());

        return redirect()->route('material.index')->with('success', 'Berhasil memperbarui data.');
    }

    public function destroy($id){
        $material_service = MaterialService::find($id);
        $material_service->delete();

        return back()->with('success', 'Berhasil menghapus data.');
    }

    public function index()
    {   
        $material_services = MaterialService::get();

        return view('MaterialService.index', ['materials' => $material_services]);
    }

    public function edit($id)
    {
        $material_service = MaterialService::find($id);

        return view('MaterialService.edit', ['material' => $material_service]);
    }
}
