<?php

namespace App\Http\Controllers\DetailAkun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailAkunController extends Controller
{
    public function index()
    {
        return view('DetailAkun.index');
    }
}
