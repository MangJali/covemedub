<?php

namespace App\Http\Controllers;

use App\Models\artikel_model;
use App\Models\poster;
use App\Models\rumah_sakit;
use App\Models\slider;
use App\Models\video_model;
use Illuminate\Http\Request;

class beranda extends Controller
{
    public function index(Request $request)
    {
        // dd(artikel_model::orderBy('updated_at', 'DESC')->orderby('id', 'desc')->limit(1)->get());
        return view('welcome', array('data' => array(
            'rumah_sakit' => rumah_sakit::orderBy('updated_at', 'DESC')->orderby('id', 'desc')->limit(5)->get(),
            'artikel' => artikel_model::orderBy('updated_at', 'DESC')->orderby('id', 'desc')->first(),
            'poster' => poster::orderBy('updated_at', 'DESC')->orderby('id', 'desc')->limit(1)->get(),
            'video' => video_model::orderBy('updated_at', 'DESC')->orderby('id', 'desc')->limit(1)->get(),
            'slider' => slider::orderBy('updated_at', 'DESC')->orderby('id', 'desc')->limit(10)->get(),
        )));
    }
}
