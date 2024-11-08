<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!Session::has('token')) {
                return redirect()->route('login');
            }
            return $next($request);
        });
    }

    public function index(Request $request)
    {
        $url_dashboard = "http://117.53.47.111:91/api/dashboard";
        // $url_dashboard = "http://127.0.0.1:8000/api/dashboard";
        $response_dashboard = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $request->session()->get('token')
        ])->get($url_dashboard);
        $dashboard = $response_dashboard->json();

        return view('dashboard', compact('dashboard'));
    }
}
