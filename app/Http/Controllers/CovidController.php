<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CovidController extends Controller
{
    public function index(Request $request)
    {

        $response = Http::get('https://data.covid19.go.id/public/api/prov.json');
        $data = $response->json();

        // dd($data['list_data']);
        return view('informasiCovid.index', compact('data'));
    }
}
