<?php

namespace App\Http\Controllers;

use App\Models\artikel_model;
use Exception;
use Illuminate\Http\Request;

class artikel extends Controller
{

    public function index($id,Request $request)
    {
        return view('artikel_detail', array('data' => artikel_model::find($id)));
    }
    
    public function listartikel(Request $request)
    {
        if(isset($_GET['query'])) $artikel = artikel_model::where('judul',"like","%".$_GET['query']."%")->orderBy('updated_at','DESC')->orderBy('id','DESC')->paginate(20);
        else $artikel = artikel_model::orderBy('id','DESC')->paginate(20);
        return view('listartikel', array('data' => $artikel));
    }

    public function create(Request $request)
    {
        try {
            artikel_model::create($request->all());
            return back()->with('status', 'Berhasil menambahkan artikel.');
        } catch (Exception $e) {
            return back()->withInput()->with('erro', 'Gagal menambahkan artikel.');
        }
    }
    
    public function edit($id,Request $request)
    {
        try {
            artikel_model::find($id)->update($request->all());
            return back()->with('status', 'Berhasil mengubah artikel.');
        } catch (Exception $e) {
            return back()->withInput()->with('erro', 'Gagal mengubah artikel.');
        }
    }
    
    public function remove($id,Request $request)
    {
        try {
            artikel_model::find($id)->delete();
            return back()->with('status', 'Berhasil menghapus artikel.');
        } catch (Exception $e) {
            return back()->withInput()->with('erro', 'Gagal menghapus artikel.');
        }
    }
}
