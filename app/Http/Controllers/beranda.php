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
        $video_count=video_model::limit(4)->get()->count();
        $sisa_row=4;
        if(poster::all()->count()>2){
            if($video_count>=4){
                $video_count=2;
                $sisa_row=2;
            }else {
                if(($video_count-2)>=0){
                    $sisa_row-=($video_count-2);
                }
            }
        }else{
            $video_count=4;
        }
        return view('welcome', array('data' => array(
            'rumah_sakit' => rumah_sakit::orderBy('updated_at', 'DESC')->orderby('id', 'desc')->limit(5)->get(),
            'artikel' => artikel_model::orderBy('updated_at', 'DESC')->orderby('id', 'desc')->first(),
            'poster' => poster::orderBy('updated_at', 'DESC')->orderby('id', 'desc')->limit($sisa_row)->get(),
            'video_right' => video_model::orderBy('updated_at', 'DESC')->orderby('id', 'desc')->limit(2)->get(),
            'video_left' => video_model::orderBy('updated_at', 'DESC')->orderby('id', 'desc')->limit($video_count)->offset(2)->get(),
            'slider' => slider::orderBy('updated_at', 'DESC')->orderby('id', 'desc')->limit(10)->get(),
        )));
    }
}
