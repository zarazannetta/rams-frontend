<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Mpdf\Mpdf;

set_time_limit(300);

class LegerGerbangTolController extends Controller
{
    public function legerViewSelect(Request $request)
    {
        $api = "http://127.0.0.1:8000/api/leger/ruas";
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($api)->json();

        $data = $response['data'] ?? [];

        return view('leger.gerbang.leger-view-select', compact('data'));
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
        return view('leger.gerbang.leger-view-detail', compact('data', 'jalan_tol_id'));
    }

    public function legerPrint(Request $request)
    {
        $url = "http://127.0.0.1:8000/api/leger/gerbang/{$request->jalan_tol_id}/{$request->leger_id_awal}/{$request->leger_id_akhir}";
        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($url)->json();

        $mpdf = new Mpdf(['tempDir' => __DIR__ . '/../../../public/temp/', 'orientation' => 'L', 'format' => 'A3']);
        $mpdf->useSubstitutions = false;
        foreach ($data as $index => $page) {
            $coverHtml = view('download.templateLegerGerbangCover')->render();
            $mpdf->writeHTML($coverHtml);
            $mpdf->AddPage();
            $html = view('download.templateLegerGerbang', ['data' => $page]);
            $mpdf->writeHTML($html);
            $mpdf->AddPage();
            $html_img = view('download.templateLegerGerbangBelakang');
            $mpdf->writeHTML($html_img);
            if ($index < count($data) - 1) {
                $mpdf->AddPage();
            }
        }

        $mpdf->Output('Leger Gerbang Tol.pdf', 'I');
    }

    public function legerPrintAll(Request $request)
    {
        $url = "http://127.0.0.1:8000/api/leger/gerbang-all/{$request->jalan_tol_id}";
        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($url)->json();

        $mpdf = new Mpdf(['tempDir' => __DIR__ . '/../../../public/temp/', 'orientation' => 'L', 'format' => 'A3']);
        $mpdf->useSubstitutions = false;
        foreach ($data as $index => $page) {
            $coverHtml = view('download.templateLegerGerbangCover')->render();
            $mpdf->writeHTML($coverHtml);
            $mpdf->AddPage();
            $html = view('download.templateLegerGerbang', ['data' => $page]);
            $mpdf->writeHTML($html);
            $mpdf->AddPage();
            $html_img = view('download.templateLegerGerbangBelakang');
            $mpdf->writeHTML($html_img);
            if ($index < count($data) - 1) {
                $mpdf->AddPage();
            }
        }

        $mpdf->Output('Leger Gerbang Tol - All.pdf', 'I');
    }
}
