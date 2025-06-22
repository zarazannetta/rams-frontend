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
        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($api)->json();

        return view('leger.gerbang.leger-view-select', compact('data'));
    }

    public function legerEditSelect(Request $request)
    {
        $api = "http://127.0.0.1:8000/api/leger/ruas";
        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($api)->json();

        return view('leger.gerbang.leger-edit-select', compact('data'));
    }

    public function legerViewDetail(Request $request)
    {
        $api = "http://127.0.0.1:8000/api/leger/segmen/{$request->jalan_tol_id}";
        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($api)->json();

        $jalan_tol_id = $request->jalan_tol_id;
        return view('leger.gerbang.leger-view-detail', compact('data', 'jalan_tol_id'));
    }

    public function legerEditDetail(Request $request)
    {
        $api_segmen = "http://127.0.0.1:8000/api/leger/segmen/{$request->jalan_tol_id}";
        $api_leger = "http://127.0.0.1:8000/api/leger/gerbang-all/{$request->jalan_tol_id}";

        $data_segmen = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($api_segmen)->json();

        $data_leger = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($api_leger)->json();

        $jalan_tol_id = $request->jalan_tol_id;
        return view('leger.gerbang.leger-edit-detail', compact('data_segmen', 'data_leger', 'jalan_tol_id'));
    }

    public function legerGenerate(Request $request)
    {
        $api = "http://127.0.0.1:8000/api/leger/gerbang/populate/{$request->jalan_tol_id}";

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($api);

        $status = $response->successful()
            ? ['type' => 'success', 'message' => 'Leger Gerbang generated successfully!']
            : ['type' => 'error', 'message' => 'Failed to generate leger gerbang. ' . $response->body()];

        return redirect()->route('admin.leger.gerbang.edit.select')->with('status', $status);
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
