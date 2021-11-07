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
