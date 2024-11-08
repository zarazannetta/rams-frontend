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

    public function jalanUtama(Request $request)
    {
        //init
        $url = "http://117.53.47.111:91/api/leger/jalan_utama/{$request->leger_id}";
        // $url = "http://127.0.0.1:8000/api/leger/jalan_utama/{$request->leger_id}";
        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token')
        ])->get($url);
        $data = $data->json();

        // Buat PDF dengan orientasi landscape dan ukuran kertas A3
        $mpdf = new Mpdf(['tempDir' => __DIR__ . '/../../../public/temp/', 'orientation' => 'L', 'format' => 'A3']);

        // Render view dari template html dan masukkan data jika ada
        $html = view('download.templateLegerJalan', ['data' => $data]);

        // Write HTML ke dalam PDF
        $mpdf->WriteHTML($html);

        // Output PDF and download path in downloads
        $mpdf->Output('Leger Kartu Jalan Utama Test.pdf', 'I'); // 'D' untuk download. 'I' preview di browser.
    }

    public function jalanUtamaBelakang(Request $request)
    {
        //return view templateJalanUtamaBelakang
        return view('download.templateLegerJalanBelakang');
    }

    public function leger(Request $request)
    {
        $api_leger = "http://117.53.47.111:91/api/leger/ruas";
        // $api_leger = "http://127.0.0.1:8000/api/leger/ruas";
        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token')
        ])->get($api_leger);
        $data = $data->json();
        return view('leger', compact('data'));
    }

    public function jalanUtamaAll(Request $request)
    {
        //init
        $url = "http://117.53.47.111:91/api/leger/jalan_utama_all";
        // $url = "http://127.0.0.1:8000/api/leger/jalan_utama_all";
        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token')
        ])->timeout(60)->get($url);
        $data = $data->json();

        // Buat PDF dengan orientasi landscape dan ukuran kertas A3
        $mpdf = new Mpdf(['tempDir' => __DIR__ . '/../../../public/temp/', 'orientation' => 'L', 'format' => 'A3']);

        //multiple page pdf for each data
        // Loop through data and generate each page
        foreach ($data as $page) {

            // Render the view with the data
            $html = view('download.templateLegerJalan', ['data' => $page]);

            // Write the populated HTML to the PDF
            $mpdf->WriteHTML($html);
            $mpdf->AddPage();
        }
        // Output the generated PDF
        $mpdf->Output('multi-page-template.pdf', 'D');
    }
}
