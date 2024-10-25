<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
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

    public function jalanUtama(Request $request)
    {
        //init
        $url = "http://117.53.47.111:91/api/leger/jalan_utama";
        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token')
        ])->get($url);
        $data = $data->json();

        // Buat PDF dengan orientasi landscape dan ukuran kertas A3
        $mpdf = new Mpdf(['orientation' => 'L', 'format' => 'A3']);

        // Render view dari template html dan masukkan data jika ada
        $html = view('download.templateLegerJalan', ['data' => $data]);

        // Write HTML ke dalam PDF
        $mpdf->WriteHTML($html);

        // Output PDF and download path in downloads
        $mpdf->Output('Leger Kartu Jalan Utama Test.pdf', 'I'); // 'D' untuk download. 'I' preview di browser.
    }
}
