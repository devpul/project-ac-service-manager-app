<?php

namespace App\Http\Controllers\Toko;

use Services\PdfService;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class TokoController extends Controller
{
    public function index()
    {
        return view('Toko.index');
    }
    
    public function create()
    {
        return view('Toko.create');
    }

    public function edit()
    {
        return view('Toko.edit');
    }

    public function download(Request $request)
    {
        $filename = 'testing.pdf';
        $html = '<h1>halo</h1>';

        return PdfService::download($html, $filename);
    }
}
