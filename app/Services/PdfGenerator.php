<?php
namespace App\Services;

class PdfGenerator
{
    public function generate($view, $data = [])
    {
        return \Barryvdh\DomPDF\Facade\Pdf::loadView($view, $data);
    }
}
