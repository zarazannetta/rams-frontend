<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpdf\Mpdf;

class AdminMapController extends Controller
{
    public function index()
    {
        return view('map');
    }

    public function download(Request $request)
    {
        $mpdf = new Mpdf(['tempDir' => __DIR__ . '/../../../public/temp/']);
        $mpdf->WriteHTML(view('download.index', ['data' => $request->all()]));
        $mpdf->Output('download-data-rams.pdf', 'D');
    }
}
