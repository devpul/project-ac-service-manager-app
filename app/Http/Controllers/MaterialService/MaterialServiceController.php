<?php

namespace App\Http\Controllers\MaterialService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaterialServiceController extends Controller
{
    public function index()
    {
        return view('MaterialService.index');
    }
}
