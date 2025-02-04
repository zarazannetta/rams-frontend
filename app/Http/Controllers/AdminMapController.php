<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Mpdf\Mpdf;

set_time_limit(6000);

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
