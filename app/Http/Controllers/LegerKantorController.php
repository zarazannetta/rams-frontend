<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Mpdf\Mpdf;

set_time_limit(300);

class LegerKantorController extends Controller
{
    public function legerViewSelect(Request $request)
    {
        $api = "http://127.0.0.1:8000/api/leger/ruas";
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($api)->json();

        $data = $response['data'] ?? [];

        return view('leger.kantor.leger-view-select', compact('data'));
    }

    public function legerViewDetail(Request $request)
    {
        $api = "http://127.0.0.1:8000/api/leger/segmen/{$request->jalan_tol_id}";
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($api)->json();

        $data = $response['data'] ?? []; 

        $jalan_tol_id = $request->jalan_tol_id;
        return view('leger.kantor.leger-view-detail', compact('data', 'jalan_tol_id'));
    }

    public function legerPrint(Request $request)
    {
        $url = "http://127.0.0.1:8000/api/leger/kantor/{$request->jalan_tol_id}/{$request->leger_id_awal}/{$request->leger_id_akhir}";
        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($url)->json();

        $mpdf = new Mpdf(['tempDir' => __DIR__ . '/../../../public/temp/', 'orientation' => 'L', 'format' => 'A3']);
        $mpdf->useSubstitutions = false;

        foreach ($data as $index => $page) {
            $coverHtml = view('download.templateLegerKantorOperasionalCover')->render();
            $mpdf->writeHTML($coverHtml);
            $mpdf->AddPage();
            $html = view('download.templateLegerKantorOperasional', ['data' => $page]);
            $mpdf->writeHTML($html);
            $mpdf->AddPage();
            $html_img = view('download.templateLegerKantorOperasionalBelakang');
            $mpdf->writeHTML($html_img);
            if ($index < count($data) - 1) {
                $mpdf->AddPage();
            }
        }

        $mpdf->Output('Leger Kantor Operasional.pdf', 'I');
    }

    public function legerPrintAll(Request $request)
    {
        $url = "http://127.0.0.1:8000/api/leger/kantor-all/{$request->jalan_tol_id}";
        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($url)->json();

        $mpdf = new Mpdf(['tempDir' => __DIR__ . '/../../../public/temp/', 'orientation' => 'L', 'format' => 'A3']);
        $mpdf->useSubstitutions = false;

        foreach ($data as $index => $page) {
            $coverHtml = view('download.templateLegerKantorOperasionalCover')->render();
            $mpdf->writeHTML($coverHtml);
            $mpdf->AddPage();
            $html = view('download.templateLegerKantorOperasional', ['data' => $page]);
            $mpdf->writeHTML($html);
            $mpdf->AddPage();
            $html_img = view('download.templateLegerKantorOperasionalBelakang');
            $mpdf->writeHTML($html_img);
            if ($index < count($data) - 1) {
                $mpdf->AddPage();
            }
        }
        $mpdf->Output('Leger Kantor Operasional - All.pdf', 'I');
    }
}
