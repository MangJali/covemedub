<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\slider;

class SliderController extends Controller
{
    public function create(Request $request)
    {
        try {
            if ($request->hasFile("gambar")) {
                $gambar = $request->file('gambar');
                $nama_file = time() . "_" . $gambar->getClientOriginalName();
                $tujuan_upload = public_path() . '/upload_file';
                $gambar->move($tujuan_upload, $nama_file);
            } else {
                $nama_file = "";
            }
            $slider = new slider;
            $slider->judul = $request->judul;
            $slider->link_gambar = $nama_file;
            $slider->konten = $request->konten;
            $slider->save();
            return back()->with('status', 'Berhasil menambahkan slider.');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Gagal menambahkan slider.(' . $e->getMessage() . ')');
        }
    }

    public function edit($id, Request $request)
    {
        try {
            $slider = slider::find($id);
            if ($request->hasFile("gambar")) {
                if (!empty($slider->link_gambar)) {
                    $destinationPath = public_path() . '/upload_file';
                    File::delete($destinationPath . "/$slider->link_gambar");
                }
                $gambar = $request->file('gambar');
                $nama_file = time() . "_" . $gambar->getClientOriginalName();
                $tujuan_upload = public_path() . '/upload_file';
                $gambar->move($tujuan_upload, $nama_file);
            } else {
                $nama_file = $slider->link_gambar;
            }
            $slider->judul = $request->judul;
            $slider->link_gambar = $nama_file;
            $slider->konten = $request->konten;
            $slider->save();
            return back()->with('status', 'Berhasil mengubah slider.');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Gagal mengubah slider.');
        }
    }

    public function remove($id, Request $request)
    {
        try {
            $slider = slider::find($id);
            if (!empty($slider->link_gambar)) {
                $destinationPath = public_path() . '/upload_file';
                File::delete($destinationPath . "/$slider->link_gambar");
            }
            $slider->delete();
            return back()->with('status', 'Berhasil menghapus slider.');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Gagal menghapus slider.');
        }
    }
}
