<?php

namespace App\Http\Controllers;

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
        return view('admin',array('data'=> array('menu'=>'artikel')));
    }
    public function rumahsakit()
    {
        return view('admin',array('data'=> array('menu'=>'rumahsakit')));
    }
    public function video()
    {
        return view('admin',array('data'=> array('menu'=>'video')));
    }
    public function poster()
    {
        return view('admin',array('data'=> array('menu'=>'poster')));
    }
}
