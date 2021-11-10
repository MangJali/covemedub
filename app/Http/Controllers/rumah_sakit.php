<?php

namespace App\Http\Controllers;

use App\Models\rumah_sakit as ModelsRumah_sakit;
use Exception;
use Illuminate\Http\Request;

class rumah_sakit extends Controller
{

    public function index(Request $request)
    {
        return view('rumahsakit', array('data' => ModelsRumah_sakit::orderBy('updated_at','DESC')->orderBy('id','DESC')->get()));
    }

    public function create(Request $request)
    {
        try {
            $this->validate($request, [
                'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            ModelsRumah_sakit::create($request->all());
            return back()->with('status', 'Berhasil menambahkan rumah sakit.');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Gagal menambahkan rumah sakit.');
        }
    }
    
    public function edit($id,Request $request)
    {
        try {
            ModelsRumah_sakit::find($id)->update($request->all());
            return back()->with('status', 'Berhasil mengubah rumah sakit.');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Gagal mengubah rumah sakit.');
        }
    }
    
    public function remove($id,Request $request)
    {
        try {
            ModelsRumah_sakit::find($id)->delete();
            return back()->with('status', 'Berhasil menghapus rumah sakit.');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Gagal menghapus rumah sakit.');
        }
    }
}
