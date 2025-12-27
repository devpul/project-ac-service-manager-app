<?php

namespace App\Http\Controllers\Toko;

use App\Models\Toko;
use GrahamCampbell\ResultType\Success;
use Services\PdfService;
use Services\ImportExcel;
use Services\ExcelService;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Validation\ValidationException;

class TokoController extends Controller
{
    private function validateToko(Request $request, $action = null)
    {
        try {

            $rulesStore = [
                'site'              =>  'required|integer|unique:tokos,site',
                'site_description'  =>  'required|string',
                'store_type'        =>  'required|string',
                'go_date'           =>  'required|date',
                'province'          =>  'required|string',
                'city'              =>  'required|string',
                'district'          =>  'required|string',
                'address'           =>  'required|string'
            ];

            $rulesUpdate = [
                'site'              =>  'sometimes|integer|unique:tokos,site',
                'site_description'  =>  'sometimes|string',
                'store_type'        =>  'sometimes|string',
                'go_date'           =>  'sometimes|date',
                'province'          =>  'sometimes|string',
                'city'              =>  'sometimes|string',
                'district'          =>  'sometimes|string',
                'address'           =>  'sometimes|string'
            ];

            if ($action === 'storeToko') {
                return $request->validate($rulesStore);
            } else {
                return $request->validate($rulesUpdate);
            }
            
        } catch (ValidationException $e) {
            $error = $e->validator->errors();

            return back()->with('error', $error->first());
        }
    }

    public function importExcel(Request $request)
    {
        $request->validate([
            'file'  =>  'required|mimes:xlsx,xls|max:2048'
        ]);

        Excel::import(new ImportExcel, $request->file);
        
        return back()->with('success', 'Import berhasil');
    }

    public function store(Request $request)
    {
        $validatedData = $this->validateToko($request, 'storeToko');
        if (!is_array($validatedData)) return $validatedData;

        $toko = Toko::create($validatedData);
        return redirect()->route('toko.index')->with('success', 'Berhasil menambahkan toko.');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $this->validateToko($request, 'updateToko');
        if (!is_array($validatedData)) return $validatedData;

        $toko = Toko::find($id);
        if (!$toko) return back()->with('error', 'Toko tidak ditemukan.');

        $toko->update($validatedData);
        return redirect()->route('toko.index')->with('success', 'Berhasil memperbarui toko.');
    }

    public function destroy($id)
    {
        $toko = Toko::find($id);
        if (!$toko) return back()->with('error', 'Toko tidak ditemukan.');

        $toko->delete();
        return redirect()->route('toko.index')->with('success', 'Berhasil menghapus toko.');
    }

    public function index()
    {
        $tokos = Toko::all();
        return view('Toko.index', compact('tokos'));
    }
    
    public function create()
    {
        return view('Toko.create');
    }

    public function edit($id)
    {
        $toko = Toko::find($id);
        if (!$toko) return back()->with('error', 'Toko tidak ditemukan.');
        return view('Toko.edit', ['toko' => $toko]);
    }

    public function exportPdf(Request $request)
    {
        $filename = 'testing.pdf';
        $html = '<h1>halo</h1>';

        return PdfService::download($html, $filename);
    }

    public function exportExcel(Request $request)
    {
        $filename = 'laporan.xlsx';

        return Excel::download(new ExceLService, $filename);
    }
}
