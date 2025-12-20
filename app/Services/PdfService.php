<?php

namespace Services;

use App\Services;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfService
{
    public static function download(string $html, string $filename)
    {
        return Pdf::loadHTML($html)
            ->setPaper('A4', 'portrait')
            ->download($filename);
    }
}
