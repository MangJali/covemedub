<?php

namespace App\Http\Controllers;

use App\Models\poster;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\File;

class PosterController extends Controller
{
    public function index($id)
    {
        return view('poster_detail', array('data' => poster::find($id)));
    }    

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
            $poster = new poster;
            $poster->judul = $request->judul;
            $poster->link_poster = $nama_file;
            $poster->konten = $request->konten;
            $poster->save();
            return back()->with('status', 'Berhasil menambahkan poster.');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Gagal menambahkan poster.(' . $e->getMessage() . ')');
        }
    }

    public function edit($id, Request $request)
    {
        try {
            $poster = poster::find($id);
            if ($request->hasFile("gambar")) {
                if (!empty($poster->link_poster)) {
                    $destinationPath = public_path() . '/upload_file';
                    File::delete($destinationPath . "/$poster->link_poster");
                }
                $gambar = $request->file('gambar');
                $nama_file = time() . "_" . $gambar->getClientOriginalName();
                $tujuan_upload = public_path() . '/upload_file';
                $gambar->move($tujuan_upload, $nama_file);
            } else {
                $nama_file = $poster->link_poster;
            }
            $poster->judul = $request->judul;
            $poster->link_poster = $nama_file;
            $poster->konten = $request->konten;
            $poster->save();
            return back()->with('status', 'Berhasil mengubah poster.');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Gagal mengubah poster.');
        }
    }

    public function remove($id, Request $request)
    {
        try {
            $poster = poster::find($id);
            if (!empty($poster->link_poster)) {
                $destinationPath = public_path() . '/upload_file';
                File::delete($destinationPath . "/$poster->link_poster");
            }
            $poster->delete();
            return back()->with('status', 'Berhasil menghapus poster.');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Gagal menghapus poster.');
        }
    }
}
