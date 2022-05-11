<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RumahSakitController extends Controller
{
    public function index(Request $request)
    {

        $response   = Http::get('https://data.covid19.go.id/public/api/rs.json');
        $data       = $response->json();

        $cari = $request->get('keyword');

        if ($cari) {
            $response   = Http::get('https://data.covid19.go.id/public/api/rs.json');
            $data       = $response->json();
        }

        return view('rumahSakit.index', compact('data'));
    }
}
