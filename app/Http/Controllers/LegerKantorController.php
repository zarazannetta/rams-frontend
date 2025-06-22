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
        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($api)->json();

        return view('leger.kantor.leger-view-select', compact('data'));
    }

    public function legerEditSelect(Request $request)
    {
        $api = "http://127.0.0.1:8000/api/leger/ruas";
        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($api)->json();

        return view('leger.kantor.leger-edit-select', compact('data'));
    }

    public function legerViewDetail(Request $request)
    {
        $api = "http://127.0.0.1:8000/api/leger/segmen/{$request->jalan_tol_id}";
        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($api)->json();

        $jalan_tol_id = $request->jalan_tol_id;
        return view('leger.kantor.leger-view-detail', compact('data', 'jalan_tol_id'));
    }

    public function legerEditDetail(Request $request)
    {
        $api_segmen = "http://127.0.0.1:8000/api/leger/segmen/{$request->jalan_tol_id}";
        $api_leger = "http://127.0.0.1:8000/api/leger/kantor-all/{$request->jalan_tol_id}";

        $data_segmen = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($api_segmen)->json();

        $data_leger = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($api_leger)->json();

        $jalan_tol_id = $request->jalan_tol_id;
        return view('leger.kantor.leger-edit-detail', compact('data_segmen', 'data_leger', 'jalan_tol_id'));
    }

    public function legerGenerate(Request $request)
    {
        $api = "http://127.0.0.1:8000/api/leger/kantor/populate/{$request->jalan_tol_id}";

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->get($api);

        $status = $response->successful()
            ? ['type' => 'success', 'message' => 'Leger Kantor generated successfully!']
            : ['type' => 'error', 'message' => 'Failed to generate leger Kantor. ' . $response->body()];

        return redirect()->route('admin.leger.kantor.edit.select')->with('status', $status);
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
            $html = view('download.templateLegerKantorOperasional', ['data' => $page]);
            $mpdf->writeHTML($html);
            $mpdf->AddPage();
            $html_img = view('download.templateLegerKantorOperasionalBelakang');
            $mpdf->writeHTML($html_img);
            if ($index < count($data) - 1) {
                $mpdf->AddPage();
            }
        }

        $mpdf->Output('Leger Kantor Tol.pdf', 'I');
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
            $html = view('download.templateLegerKantorOperasional', ['data' => $page]);
            $mpdf->writeHTML($html);
            $mpdf->AddPage();
            $html_img = view('download.templateLegerKantorOperasionalBelakang');
            $mpdf->writeHTML($html_img);
            if ($index < count($data) - 1) {
                $mpdf->AddPage();
            }
        }

        $mpdf->Output('Leger Kantor Tol - All.pdf', 'I');
    }
}
