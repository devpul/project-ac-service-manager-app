<?php

namespace App\Http\Controllers\Kalender;

use App\Models\Kalender;
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
        $kalender = Kalender::get();

        return $kalender->map(function($item) {
            return [
                'title' =>  $item->title,
                'start' =>  $item->start,
                'end'   =>  $item->end,
            ];
        });
    }
}
