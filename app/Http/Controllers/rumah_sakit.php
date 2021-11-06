<?php

namespace App\Http\Controllers;

use App\Models\rumah_sakit as ModelsRumah_sakit;
use Illuminate\Http\Request;

class rumah_sakit extends Controller
{

    public function index(Request $request)
    {
        return view('rumahsakit', array('data' => ModelsRumah_sakit::all()));
    }

    public function create(Request $request)
    {
        echo "test";
    }
}
