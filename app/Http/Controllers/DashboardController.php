<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function index()
    {
        return view('dashboard');
    }
}
