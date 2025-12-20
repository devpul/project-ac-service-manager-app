<?php

namespace Services;

use App\Services;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfService
{
    // public function download(string $html, string $filename)
    // {
    //     return Pdf::loadHTML($html)
    //             ->setPaper('A4', 'portrait')
    //             ->download($filename);
    // }

    // public function stream(string $html, string $filename)
    // {
    //     return Pdf::loadHTML($html)
    //             ->setPaper('A4', 'portrait')
    //             ->stream($filename);
    // }

    public static function download(string $html, string $filename)
    {
        return Pdf::loadHTML($html)
            ->setPaper('A4', 'portrait')
            ->download($filename);
    }
}
