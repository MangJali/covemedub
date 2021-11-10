<?php

namespace App\Http\Controllers;

use App\Models\rumah_sakit;
use Illuminate\Http\Request;

class homepage extends Controller
{
    public function index(Request $request)
    {
        return view('welcome',array('data'=>rumah_sakit::limit(5)->get()));
    }
}
