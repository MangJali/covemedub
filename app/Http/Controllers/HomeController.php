<?php

namespace App\Http\Controllers;

use App\Models\artikel_model;
use App\Models\poster;
use App\Models\rumah_sakit;
use App\Models\slider;
use App\Models\video_model;
use Illuminate\Http\Request;

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
        if(isset($_GET['query'])) $artikel = artikel_model::where('judul',"like","%".$_GET['query']."%")->orderBy('updated_at','DESC')->orderBy('id','DESC')->paginate(20);
        else $artikel = artikel_model::orderBy('updated_at','DESC')->orderBy('id','DESC')->paginate(20);
        return view('admin', array('data' => array('menu' => 'artikel','paginate'=>$artikel)));
    }
    public function rumahsakit()
    {
        if(isset($_GET['query'])) $rumah_sakit = rumah_sakit::where('nama',"like","%".$_GET['query']."%")->orderBy('updated_at','DESC')->orderBy('id','DESC')->paginate(20);
        else $rumah_sakit = rumah_sakit::orderBy('updated_at','DESC')->orderBy('id','DESC')->paginate(20);
        return view('admin', array('data' => array('menu' => 'rumahsakit', 'paginate' => $rumah_sakit)));
    }
    public function video()
    {
        if(isset($_GET['query'])) $video = video_model::where('judul',"like","%".$_GET['query']."%")->orderBy('updated_at','DESC')->orderBy('id','DESC')->paginate(20);
        else $video = video_model::orderBy('updated_at','DESC')->orderBy('id','DESC')->paginate(20);
        return view('admin', array('data' => array('menu' => 'video', 'paginate' => $video)));
    }

    public function poster()
    {
        if(isset($_GET['query'])) $poster = poster::where('judul',"like","%".$_GET['query']."%")->orderBy('updated_at','DESC')->orderBy('id','DESC')->paginate(20);
        else $poster = poster::orderBy('updated_at','DESC')->orderBy('id','DESC')->paginate(20);
        return view('admin', array('data' => array('menu' => 'poster', 'paginate' => $poster)));
    }
    
    public function slider()
    {
        if(isset($_GET['query'])) $poster = slider::where('judul',"like","%".$_GET['query']."%")->orderBy('updated_at','DESC')->orderBy('id','DESC')->paginate(20);
        else $poster = slider::orderBy('updated_at','DESC')->orderBy('id','DESC')->paginate(20);
        return view('admin', array('data' => array('menu' => 'slider', 'paginate' => $poster)));
    }
}
