<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $response = Http::get('https://data.covid19.go.id/public/api/prov.json');
        $data = $response->json();

        foreach ($data['list_data'] as $keyVal => $value) {
            $key[$keyVal] = $value;
        }

        $with['dki'] = $key[0];
        $with['jawa_tengah'] = $key[2];
        $with['jawa_timur'] = $key[3];
        $with['data'] = $data;

        return view('home', $with);
    }
}
