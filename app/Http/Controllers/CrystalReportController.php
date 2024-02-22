<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class CrystalReportController extends Controller
{
    public function generateReport()
    {
        $data = [
            ['Field 1' => 'Value 1', 'Field 2' => 'Value 2'],
            ['Field 1' => 'Value 3', 'Field 2' => 'Value 4'],
            // Add more rows as needed
        ];

        $pdf = PDF::loadView('reports.crystal', compact('data'));

        return $pdf->stream('report.pdf');
    }
}
