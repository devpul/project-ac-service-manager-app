<?php

namespace App\Http\Controllers\AC;

use App\Models\AC;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ACController extends Controller
{
    public function index()
    {
        $acs = AC::get();
        return view('AC.index', compact('acs'));
    }

    public function create()
    {
        return view('AC.create');
    }

    public function edit()
    {
        return view('AC.edit');
    }
}
